<?php 
 $errors = array();
    $_SESSION['success'] = "";
 $itemname="";
     $price="";
     $amount="";
     $exp_d="";
     $type="";
     $notes="";
      $db=mysqli_connect('localhost','root','','mywebsite');

     // Add 
    
	if (isset($_POST['send'])) {
       
 $itemname = mysqli_real_escape_string($db, $_POST['itemname']);
 $price = mysqli_real_escape_string($db, $_POST['price']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $exp_d = mysqli_real_escape_string($db, $_POST['exp_d']); 
  $type = mysqli_real_escape_string($db, $_POST['type']); 
      $notes = mysqli_real_escape_string($db, $_POST['notes']);
     
         
      if (empty($itemname)) {array_push($errors, "Item name is required");}
      if (empty($price)) {array_push($errors, "Price is required");}
       if (empty($amount)) {array_push($errors, "Amount  is required");}
        if (empty($exp_d)) {array_push($errors, "Exp. Date  is required");}
      
         if ($type=='Select_Item') {array_push($errors, " Type is required");}
       if(empty($notes)) {array_push($errors,"notes  is required");}  
if (count($errors) == 0) {
      $query="insert into items(itemname,price,amount,exp_d,type,notes)Values('$itemname','$price','$amount','$exp_d','$type','$notes')";
        mysqli_query($db,$query);
        
    
       array_push($errors, "Done");
      
      
    }
    }






?>
