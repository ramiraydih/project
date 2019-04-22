<?php include ('server1.php')?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin_Panel</title>
	<link rel="stylesheet" type="text/css" href="stylehome.css">
</head>
<body style="background: #128184 ">
   
	<div class="header">
		<h2>Admin_Panel</h2>
	</div>
    <form method="post" action="adminpanel.php ">
        <?php include 'errors.php'?>
       
         <div class="input">
        <label>Item Name</label>
			<input type="text" name="itemname" value="<?php echo $itemname?>" >
            </div>
         <div class="input">
        <label>Price</label>
			<input type="text" name="price" value="<?php echo $price?>">
            </div>
         <div class="input">
			<label>Amount</label>
			<input type="text" name="amount"  value="<?php echo $amount?>">
        </div>
        <div class="input">
        <label>Expiry date</label>
			<input type="date" name="exp_d" value="<?php echo $exp_d?>">
            </div>
        <div class="input">
          <p>
             <label>Type of product</label>
             <select id = "myList" name="type" style="font-size:18px;" dir="rtl">
                  <option value = "--"  >Select_Item</option>
               <option value = "Meat"  >Meat </option>
               <option value = "foodstuffs">foodstuffs</option>
               <option value = "Detergent">Detergent</option>
               <option value = "Candy">Candy</option>
                  <option value = "Paperwork">Paperwork</option>
             </select>
          </p>
       
            </div>
		
  
        <div class="inputs">
			<label>Notes</label>
			<input type="text" name="notes" style="margin-bottom: 20px"  value="<?php echo $notes?>">
        </div>
              
        <button type="submit" class="btn" name="send"  >Save</button>
		
	</form>
</body>
</html>
