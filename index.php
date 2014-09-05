<!DOCTYPE HTML>
<?php
    require_once "config.php";
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
    <td>category_id&name</td>
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
    echo "<td>$product->category_id ";
    echo Category::find($product->category_id)->category_name;
    echo "</td>";
    echo "<td><a href=\"product.php?do=show&id=$product->product_id\">edit</a></td>";
    echo "<td><a href=\"delete.php?who=product&id=$product->product_id\">delete</a></td>";
    echo "</tr>";
}
?>
</table>
<p><a href="add_product.php"> add new product </a></p>

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
<p><a href="add_category.php"> add new category </a></p>
 
</body>
</html>
