<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Entry</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
        .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
    </style>

<div class="container">
  <div style="margin: 10%;">
  	<h2 class="text-center">Enter Product Details</h2>
  	<form class="form-horizontal" method="post" action="barcode.php" target="_blank">
  	<div class="form-group">
      <label class="control-label col-sm-2" for="product">Product:</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="product" name="product">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="product_id">Product ID:</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="product_id" name="product_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="rate">Rate</label>
      <div class="col-sm-10">          
        <input autocomplete="OFF" type="text" class="form-control" id="rate"  name="rate">
      </div>
    </div>
    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="print_qty">Barcode Quantity</label>
      <div class="col-sm-10">          
        <input autocomplete="OFF" type="print_qty" class="form-control" id="print_qty"  name="print_qty">
      </div>
    </div>  -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_warranty">Product Warranty</label>
      <div class="col-sm-10">          
        <input autocomplete="OFF" type="date" class="form-control" id="product_warranty"  name="product_warranty">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="button">Submit</button>
      </div>
    </div>
  </form>
  </div>
</div>

</body>
</html>
