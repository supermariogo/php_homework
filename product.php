<!DOCTYPE HTML>
<?php
    require_once "config.php";
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
$do=$_GET['do'];

if($do == "show"){ 
    $product = Product::find_by_product_id($product_id);
}
if($do == "edit"){ 
    // get data from POST and update
    $product = Product::find_by_product_id($product_id);
    $product->product_name= $_POST['product_name'];
    $product->category_id= $_POST['category_id'];
    $product->product_des= $_POST['product_des'];
    $product->save();
    echo "update successfuly<br>";
}
if($do == "add"){ 
    // get data from POST and create
    $product = New Product();
    $product->product_name= $_POST['product_name'];
    $product->category_id= $_POST['category_id'];
    $product->product_des= $_POST['product_des'];
    $product->save();
    echo "add successfuly<br>";
}

?>
<form name="edit_product" action="product.php?do=edit&id=<?php echo "$product->product_id" ?>" method="post">
<table>
    <tr>
    <td>product_id</td> 
    <td><?php echo "$product->product_id"?> </td> 
    </tr>
    <tr>
    <td>product_name</td> 
    <td><input type="text" name="product_name" value="<?php echo "$product->product_name" ?>"> </td> 
    </tr>
    <tr>
    <td>category_name</td> 
    <td>
    <select name="category_id">
    <option value="<?php echo "$product->category_id"?>" selected="selected">
    <?php echo Category::find($product->category_id)->category_name ?>
    </option>
    <?php
    foreach (Category::all() as $category)
    {
    echo "<option value=\"$category->category_id\">";
    echo "$category->category_name";
    echo "</option>";
    }
    ?>
    </select>
    </td> 
    </tr>
    <tr>
    <td>product_des</td> 
    <td><textarea rows="4" cols="40" type="text" name="product_des" ><?php echo "$product->product_des" ?> </textarea></td> 
    </tr>
    <tr><td><input type="submit" value="Submit"></td></tr>
    <tr><td><a href="index.php">return to home page</a></tr></td>
<table>
</form>

</body>
</html>
