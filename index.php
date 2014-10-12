<?php

  require_once('MellatBank.php');
  error_reporting(E_ALL);
  $mellat = new MellatBank();
  
  /**
   * پرداخت مبلغ
   */
  $mellat->startPayment('1000', 'http://localhost');
  
  
  
  /**
   * تایید تراکنش
   */
  $results = $mellat->checkPayment($_POST);
  if($results['status']=='success') {
	  # تراکنش با موفقیت انجام شده است.
	  echo $results['trans'] ; # شماره تراکنش
  }
  else {
	  # تراکنش موفق نبوده است .
  }
