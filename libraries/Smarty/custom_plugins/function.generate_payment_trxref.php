<?php

function smarty_function_generate_payment_trxref($params,&$smarty){
  //$smarty->assign('trxref','5957abf213dc9');
  $smarty->assign('trxref',uniqid());
  $smarty->assign('paystack_total',intval($params['total'])*100);
}