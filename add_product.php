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
<form name="add_product" action="product.php?do=add" method="post">
<table>
    <tr>
    <td>product_id</td> 
    <td>auto </td> 
    </tr>
    <tr>
    <td>product_name</td> 
    <td><input type="text" name="product_name"> </td> 
    </tr>
    <tr>
    <td>category_name</td> 
    <td>
    <select name="category_id">
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
    <td><textarea rows="4" cols="40" type="text" name="product_des" ></textarea></td> 
    </tr>
    <tr><td><input type="submit" value="Submit"></td></tr>
    <tr><td><a href="index.php">return to home page</a></tr></td>
<table>
</form>
 
</body>
</html>
