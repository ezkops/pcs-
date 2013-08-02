<?php
  $bankaccount =100;

  function expense($amount, $bankaccount) {
    $bankaccountn = $bankaccount - $amount;
    return $bankaccount;
  }
  
  $newbalance = expense(10, $bankaccount);

  echo '<p>how much monry did i start with this monnth: ' . $bankaccount . '</p>
  








?>
