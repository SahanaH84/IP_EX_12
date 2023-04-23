<!DOCTYPE html>
<html>
<head>
	<title>Get Product Details</title>
         <style>
        table,th,td,tr {
            text-align: center;
            border : 1px solid black;
            border-collapse: collapse;
          
        }
        th,td {
            padding: 5px;
        }
    </style>
</head>
<body >
    <h1>PRODUCT DETAILS</h1>
	<form method="get">
		<label for="code">Enter Product Code:</label>
		<input type="text" name="code" id="code"><br><br>
		<input type="submit" value="Get Details">
	</form>
    <br>
    <br>
    <?php
  if(isset($_GET['code'])){
  $code = $_GET['code'];
  $xml = simplexml_load_file("products.xml");
  foreach ($xml->product as $product) {
    if ($product->code == $code) {
      $name = $product->name;
      $desc = $product->description;
      $price = $product->price;
      
      echo"<table>";
      echo "<tr><th>Product Name:</th><td >" . $name . "</td></tr>";
      echo "<tr><th>Product Description:</th><td >" . $desc . "</td></tr>";
      echo "<tr ><th>Product Price:</th><td >" . $price . "</td></tr>";
      echo "</table>";
}
}
}
?>
</body>
</html>