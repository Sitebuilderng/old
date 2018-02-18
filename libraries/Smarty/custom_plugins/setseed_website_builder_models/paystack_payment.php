<?php
/* Load Paystack Library */
require_once(ROOT_DIR.'/libraries/Paystack/src/autoload.php');
class PayStackPayment extends Model{
  
  public $config;
	public $return_url;
	public $cancel_url;
	public $product_title;
	public $currency;
	public $token;
	public $websiteid;
	public $usersid;
	public $server_api_domain;
	public $server_api_key;
	public $tax;
	public $default_plan;
	public $useremail;
  

	
	public function collect()
	{
		$tocharge = $this->query('SELECT * FROM websites WHERE balance < 0');

		foreach ($tocharge as $website) {
			$user=$this->query('SELECT agreementid,usersid,email FROM users WHERE usersid='.$website->belongs_to_user);
				
			$balance = $website->balance;
			$charge = abs($balance);
			$txref = uniqid();
			$fail=false;
			if ($user[0]->agreementid!="") {
				
				$paystack = new Yabacon\Paystack($this->config['secret_key']); 
					try{
						$tranx = $paystack->transaction->charge([
							'amount'=> $charge *100 , //TODO remove multiplier
							'email'=> $user[0]->email,
							'reference'=>$txref, 
							'authorization_code'=>$user[0]->agreementid
						]);
						//return array('amount'=>$charge,'tranx'=>$tranx);
					}catch(\Yabacon\Paystack\Exception\ApiException $e){
						$fail = true;
					}
				/*
				$body = array(
			        "USER"=>$this->config['paypal_api_user']
					,"PWD"=>$this->config['paypal_api_pwd']
					,"SIGNATURE"=>$this->config['paypal_api_signature']
					,"VERSION"=>"86"
					,"METHOD"=>"BillAgreementUpdate"
					,"REFERENCEID"=>$user[0]->agreementid
					,"BILLINGAGREEMENTSTATUS"=>""
				);
				$request = new SWBRestRequest($this->config['paypal_api_endpoint'], 'POST', $body);
				$request->execute();
				parse_str($request->responseBody,$response);
				$country_code = strtolower($response['COUNTRYCODE']);
				$taxToAdd = 0;
				if (isset($this->tax[$country_code])) {
					$taxToAdd = $this->tax[$country_code] * $charge / 100;
				}
				$taxToAdd = number_format($taxToAdd,2,'.','');
				$chargeIncTax = $charge + $taxToAdd;
				$body = array(
			        "USER"=>$this->config['paypal_api_user']
					,"PWD"=>$this->config['paypal_api_pwd']
					,"SIGNATURE"=>$this->config['paypal_api_signature']
					,"VERSION"=>"86"
					,"METHOD"=>"DoReferenceTransaction"
					,"AMT"=>$chargeIncTax
					,"TAXAMT"=>$taxToAdd
					,"ITEMAMT"=>$charge
					,"CURRENCYCODE"=>$this->currency
					,"PAYMENTACTION"=>"SALE"
					,"REFERENCEID"=>$user[0]->agreementid
					,"IPADDRESS"=>$_SERVER['REMOTE_ADDR']
					,"DESC"=>$website->domain
				);
				$request = new SWBRestRequest($this->config['paypal_api_endpoint'], 'POST', $body);
				$request->execute();
				parse_str($request->responseBody,$response);
				$result="";
				$result = $response['PAYMENTSTATUS'];
				*/
				//if (isset($response['PAYMENTSTATUS']) && $result=="Completed") {
				if ($tranx->data->status=='success') {
					
					$update = $this->execute('UPDATE websites SET 
						push_to_hub=1,
						balance="0.00"
						WHERE websitesid='.$website->websitesid);
					
					
					//$response = json_decode($request->responseBody);
					//$code = $request->responseInfo['http_code'];
					
					$payment = $this->insert('INSERT INTO payments(
													usersid
													,date
													,currency
													,amount
													,total_amount
													,tax
													,country_code
													,txref
												)
												VALUES(
													"'.$user[0]->usersid.'"
													,"'.$this->to_datetime(time()).'"
													,"'.$this->currency.'"
													,"'.$charge.'"
													,"'.$chargeIncTax.'"
													,"'.$taxToAdd.'"
													,"'.$country_code.'"
													,"'.$txref.'"
												)');
				
				} else {
					// back to lite mode :(
					$fail=true;
				}
			} else {
				if (strtotime($website->last_saved) < time()-300) {
					$fail=true;	
				}
			}
			if ($fail==true) {
				$plan = $this->default_plan;
				$plan = $this->escapeString($plan);
				$this->query('UPDATE users SET agreementid="" WHERE usersid='.$website->belongs_to_user);
				$this->execute('UPDATE websites SET disabled=1
				,unlimited_pages=0
				,blog=0
				,unlimited_blog=0
				,mailing_lists=0
				,shop=0
				,unlimited_products=0
				,livechat=0
				,video=0
				,galleries=0
				,contact_forms=0
				,calendar=0
				,plan="'.$plan.'"
				,balance="0.00"
				WHERE `websitesid`='.$website->websitesid);
			}

		}	
	}
	  
  public function createBillingAgreement()
	{ 
		$process = array('message'=>'Unable to process payment','status'=>false);
		
		$paystack = new Yabacon\Paystack($this->config['secret_key']); 
		
		try{
			$tranx = $paystack->transaction->verify(['reference'=> $this->token]);
			if($tranx->data->status == "success"){
				$auth_code = $tranx->data->authorization->authorization_code;
				$this->query('UPDATE users SET agreementid="'.$auth_code.'" WHERE usersid='.$this->usersid);
				$process['status']=true;
				$process['message']="Subscription Created";
				//return $tranx;
				$this->collect();
			}
		}
		catch(\Yabacon\Paystack\Exception\ApiException $e){
			$process['message'] = $e->getMessage();
		}
		return $process;
		/*
		$body = array(
	        "USER"=>$this->config['paypal_api_user']
			,"PWD"=>$this->config['paypal_api_pwd']
			,"SIGNATURE"=>$this->config['paypal_api_signature']
			,"VERSION"=>"86"
			,"METHOD"=>"CreateBillingAgreement"
			,"TOKEN"=>$this->token
		);
		$request = new SWBRestRequest($this->config['paypal_api_endpoint'], 'POST', $body);
		$request->execute();
		parse_str($request->responseBody,$response);
		$token = $response['BILLINGAGREEMENTID'];
		$ok = $response['ACK'];
		if ($ok=="Success") {
			if (is_numeric($this->usersid)) {
				
				
				$this->query('UPDATE users SET agreementid="'.$token.'" WHERE usersid='.$this->usersid);
				$this->collect();
			}
		}
		*/
	}
	


}