<?php

function smarty_function_paystack_process_payment($params, &$smarty){
  require_once('../libraries/Paystack/src/autoload.php');
  
  
  // initiate the Library's Paystack Object
  //$sk = 'sk_test_dc2024ce39f1d9f6e02413f1d771c5935d8a160f';
  $paystack = new Yabacon\Paystack($params['secret_key']); 
  $process = array('message'=>'Unable to process payment','status'=>false);
  try
  {
    // verify using the library
    $tranx = $paystack->transaction->verify(['reference'=> $params['trxref']]);
    if($tranx->data->status == "success"){
      $process['message']="Payment Successful, unable to update order. Please contact support ";
    
      
      //Update order 
      $payment_data = array(
        'buyerId'=>$params['buyerId'],
        'payment_status'=>'Paid',
        'txn_id'=>$params['trxref'],
        'mc_gross'=>($tranx->data->amount)/100,
        'first_name'=>$params['customer_fname'],
        'last_name'=>$params['customer_lname'],
        'payer_email'=>$params['customer_email'],
        'address_street'=>$params['street_address'],
        'address_city'=>$params['city'],
        'address_state'=>$params['state'],
        'contact_phone'=>$params['customer_phone'],
      );
      $smarty->assign('pmnt_data',$payment_data);
      $curlHandle = curl_init();  
      $curlHandle = curl_init();  
      curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array(
      'API-KEY: '.$params['api_key']
      ,'Host: ' .$params['site']
      )); 
      curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);  
      curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true); 
      //curl_setopt($curlHandle, CURLOPT_REFERER, 'http://sitebuilder.com.ng/products');
      curl_setopt($curlHandle, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($curlHandle, CURLOPT_CUSTOMREQUEST, "PUT");
      curl_setopt($curlHandle, CURLOPT_POSTFIELDS,http_build_query($payment_data));
      curl_setopt($curlHandle, CURLOPT_URL, "127.0.0.1/api/ordernotify");  
      $responseBody = curl_exec($curlHandle);
      $responseInfo = curl_getinfo($curlHandle);
      curl_close($curlHandle);
      
      $smarty->assign('response_info',$responseInfo);
      
      if($responseInfo['http_code'] == 200){
        //Everything fine we can exit
        $process['status'] = true; $process['message']="Payment Successful. Order updated";
        $smarty->assign('order_status',$process['status']);
        $smarty->assign('order_message',$process['message']);
        return;
      }
    }
  } 
  catch(\Yabacon\Paystack\Exception\ApiException $e){
    $process['message'] = $e->getMessage();
  }
  $smarty->assign('order_status',$process['status']);
  $smarty->assign('order_message',$process['message']);
  
}