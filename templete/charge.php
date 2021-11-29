<?php
  require_once('../vendor/autoload.php');
include('../rb.php');

  \Stripe\Stripe::setApiKey('sk_test_51K1DQBIO8aOxXD0bGk6h7jW2ma2nSgHQYSpPH7Kt3ARYqCoRLnAmQG4tDFjSE14yUXdRlwIyq0yt3NLHbXxrt4Vv00YoB6UhfC');

 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 echo $first_name = $POST['first_name'];
 echo $last_name = $POST['last_name'];
 echo $email = $POST['email'];
 echo $token = $POST['stripeToken'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => 5000,
  "currency" => "usd",
  "description" => "",
  "customer" => $customer->id
));



// Transaction Data
// $transactionData = [
//   'id' => $charge->id,
//   'customer_id' => $charge->customer,
//   'product' => $charge->description,
//   'amount' => $charge->amount,
//   'currency' => $charge->currency,
//   'status' => $charge->status,
// ];

// $order = R::load('orders',1);
// $order ->product_id=1;
// $order ->total=100;
// $order ->stripe_id=1;
// $order ->status=112;
// $result=R::store($order);


// Redirect to success
if($result >0){
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);
}else{
    echo "Noo";
}