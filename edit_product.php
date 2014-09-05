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
th, td {
    padding: 15px;
}
</style>
</head>
<body>
<?php
$product_id=$_GET['id'];
$product = Product::find_by_product_id($product_id);
$do=$_GET['do'];

if($do="edit"){ 
//update data from POST
$product->product_id= $_POST['product_id'];
$product->product_name= $_POST['product_name'];
$product->category_id= $_POST['category_id'];
$product->product_des= $_POST['product_des'];
$product->save();
}
?>
<form name="edit_product" action="edit_product.php?do=edit&id=<?php echo "$product->product_id" ?>" method="post">
<table>
<tr><td>product_id   </td> <td><input type="text" name="product_id" value="<?php echo "$product->product_id" ?>">     </td> </tr>
<tr><td>product_name </td> <td><input type="text" name="product_name" value="<?php echo "$product->product_name" ?>"> </td> </tr>
<tr><td>category_id  </td> <td><input type="text" name="category_id" value="<?php echo "$product->category_id" ?>">   </td> </tr>
<tr><td>product_des  </td> <td><textarea rows="4" cols="40" type="text" name="product_des" ><?php echo "$product->product_des" ?> </textarea></td> </tr>
<tr><td><input type="submit" value="Submit"></td></tr>
<table>
</form>
<?php
$product_id=$_GET['id'];
$product = Product::find_by_product_id($product_id);
?>
 
</body>
</html>
