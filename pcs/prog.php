<?php
 
   class blueprint {

     protected $myname;
     public $email;
     private $address;                  

   }
   class radio extends blueprint {
     public $station = '105.9';

     function __construct() {
       $this->myname = 'ezkops';
       $this->address = '6A negba st.';
     }




   }                               
  $ezkops = new radio;
  $ezkops->email = 'ezkops@gmail.com';    
  //$ezkops->address = '6A negba st.'; 
  print_r($ezkops);







?>
