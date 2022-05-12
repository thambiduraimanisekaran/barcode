<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "techverse";
 $conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['product']))
{
   
?>
    <html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>

<body onload="window.print();">
	<div style="margin-left: 5%">
		<?php
		include 'barcode128.php';
		$product = $_POST['product'];
		$product_id = $_POST['product_id'];
		$rate = $_POST['rate'];
        $product_warranty = $_POST['product_warranty'];
        $message = "Data inserted Successfully";
        $sql="INSERT INTO product_details (product, product_id, rate, product_warranty)
        VALUES ('$product', $product_id, $rate, '$product_warranty')";
        $conn->query($sql);      
        
        
		for($i=1;$i<=1;$i++){
			echo "<p class='inline'><span ><b>Item: $product</b></span>".bar128(stripcslashes($_POST['product_id']))."<span ><b>Price: ".$rate." <span></p>&nbsp&nbsp&nbsp&nbsp"."<span ></br><b>Warranty Date: ".$product_warranty." <span></p>&nbsp&nbsp&nbsp&nbsp"."<span ></br><b><b>".$message." <span></p>&nbsp&nbsp&nbsp&nbsp";
		}
      
  ?>
	</div>
</body>
</html>
<?php   }
else
{?>
<html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>



<body>
	<div style="margin-left: 5%">
		<?php
		include 'barcode128.php';
		
		$product_id = $_POST['product_id'];

        $sql="SELECT * from product_details where product_id=$product_id";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    
        $product=$row['product'];
        $rate=$row['rate'];
        $product_warranty=$row['product_warranty'];
        
        
		for($i=1;$i<=1;$i++){
			echo "<p class='inline'><span ><b>Item: $product</b></span>".bar128(stripcslashes($_POST['product_id']))."<span ><b>Price: ".$rate." <span></p>&nbsp&nbsp&nbsp&nbsp"."<span ></br><b>Warranty Date: ".$product_warranty." <span></p>&nbsp&nbsp&nbsp&nbsp"." </b><span></p>&nbsp&nbsp&nbsp&nbsp";
		}

      
  ?>
	</div>
</body>
</html>

<?php
  
}

?>
