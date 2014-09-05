<!DOCTYPE HTML>
<?php
    // Configure PHP ActiveRecord and specify our "models/" subdirectory.
    require_once "php-activerecord/ActiveRecord.php";
    ActiveRecord\Config::initialize(function($cfg) {
        $cfg->set_model_directory("models");
        $cfg->set_connections(array(
            "development" => "mysql://root:googlemao@localhost/sell"));
    });
 
?>
<html>
<head>
    <title>Product and Category Admin Site</title>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>
</head>
<body>
 
<h1>Products</h1>
<table>
<tr>
	<td>product_id</td>
	<td>product_name</td>
	<td>product_des</td>
	<td>category_id</td>
	<td>edit</td>
	<td>delete</td>
</tr>
<?php
foreach (Product::all() as $product)
{  
        echo "<tr>";
	echo "<td>$product->product_id</td>";
	echo "<td>$product->product_name</td>";
	echo "<td>$product->product_des</td>";
	echo "<td>$product->category_id</td>";
	echo "<td><a href=\"edit_product.php?do=show&id=$product->product_id\">edit</a></td>";
	echo "<td>delete</td>";
        echo "</tr>";
}
?>
</table>
<p>add a new one</p>

<h1>Categories</h1>
<table>
<tr>
	<td>category_id</td>
	<td>category_name</td>
	<td>category_des</td>
	<td>edit</td>
	<td>delete</td>
</tr>
<?php
foreach (Category::all() as $category)
{  
        echo "<tr>";
	echo "<td>$category->category_id</td>";
	echo "<td>$category->category_name</td>";
	echo "<td>$category->category_des</td>";
	echo "<td>edit</td>";
	echo "<td>delete</td>";
        echo "</tr>";
}
?>
</table>
<p>add a new one</p>
 
</body>
</html>
