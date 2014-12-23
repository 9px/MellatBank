<?php

  /*** نمونه کد استفاده از کتابخانه ***/
  require_once(__DIR__ . '/MellatBank.php');
  error_reporting(E_ALL);
  
  /*** ساختن یک آبجکت جدید ***/
  $mellat = new MellatBank('123456', 'test', 'test');
  
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
