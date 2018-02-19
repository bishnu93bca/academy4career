<?php
 
// $merchant_key="OaCkjuwh";
// $salt="G56EPm4WRV";
//$payu_base_url="https://secure.payu.in/_payment";
 $merchant_key  = "gtKFFx";
  $salt          = "eCwWELxi";
  $payu_base_url = "https://test.payu.in"; // For Test environment
  
  $success_url   =  BASE_URL."members/success#";
  $failure_url   =  BASE_URL."members/fail#";
  $action        = '';
  $currentDir    = BASE_URL.'mmembers/add';
  $firstname     =$_SESSION->first_name;
  $lastname     =$_SESSION->last_name;
  $email         =$_SESSION->email;
  $phone          =$_SESSION->mobile;
  $productinfo    ='Members Registion Fee';
  $plan=$Plans->name;
  $plan_id=$Plans->id;
  $fee=$Plans->amount;

  

  $posted = array();
  if(!empty($_POST)) {
    foreach($_POST as $key => $value) {    
      $posted[$key] = $value; 
    }
  } 

  $formError = 0;
  if(empty($posted['txnid'])) {
    $txnid = strtoupper(substr(hash('sha256', mt_rand() . microtime()), 0, 10));
  } else {
    $txnid =  strtoupper($posted['txnid']);
  }

  $hash         = '';
  $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

  if(empty($posted['hash']) && sizeof($posted) > 0) {
    if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
    ){
      $formError = 1;

    } else {
      $hashVarsSeq = explode('|', $hashSequence);
      $hash_string = '';  
    foreach($hashVarsSeq as $hash_var) {
        $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
        $hash_string .= '|';
      }
      $hash_string .= $salt;
      
      $hash = strtolower(hash('sha512', $hash_string));
      $action = $payu_base_url . '/_payment';
    }
  } elseif(!empty($posted['hash'])) {
    $hash = $posted['hash'];
    $action = $payu_base_url . '/_payment';
  }

  
?>

    

       
    
<div class="col-md-12 col-lg-12 about_middle">
 <div class="container">
  <div class="column_5">
 
    
    <div class="col-md-12">
        <div class="item-testimonial">
          <div class="content_box">
            <blockquote>
            <h2><center><?=h($Plans->name)?> </center></h2>
            <p style="text-align: center;" >
            Expires On: 31 Aug 2017M<br>
            <hr>
            10 QUESTIONS
            <hr>
            10 MARKS<br>
             <hr>

              10 MINUTES<br>
              <hr>
              Rs  <?=h($Plans->amount)?>
            </p>
                 <form action="<?php echo $action; ?>" method="post">

                <input type="hidden" name="key" value="<?php echo $merchant_key; ?>" />
                <input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
                <input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
                <input name="amount" type="hidden" value="<?php echo $fee; ?>" />
                <input name="udf1" type="hidden" value="<?php echo $plan_id; ?>" />
                <input name="udf2" type="hidden" value="<?php echo $plan; ?>" />
                <input type="hidden" name="surl" value="<?=h($success_url)?>"  />
                <input type="hidden" name="furl" value="<?=h($failure_url)?>" />
                <input  name="firstname"  type="hidden" value="<?php echo $firstname ?>">
                <input  name="lastname"  type="hidden" value="<?php echo $lastname ?>"/>
                <input  name="email"  type="hidden" value="<?php echo $email ?>" >
                <input  name="phone" type="hidden" value="<?php echo $phone ?>" />
                <input  name="productinfo" type="hidden" value="<?=h($productinfo)?>" />        
              <div class="submit-wrap" style="text-align: center;">
                 <input type="submit"  value="Conform">
              </div>  </form>
            </blockquote>
          </div>
           
        </div>
    </div>

      
    
      <div class="clearfix"> </div>
 </div>
 </div>
</div>
