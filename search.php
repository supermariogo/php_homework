<!DOCTYPE HTML>
<?php
    require_once "config.php";
?>
<?php
$key=$_GET['key'];
$products = Product::find('all', array('conditions' => "product_name LIKE '%$key%'"));
$total_num = count($products);
$page_size = 3;
$page=$_GET['page'];
if (empty($page)) {
	$page=1;
}
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
    #div-1a {
        position:absolute;
        top:45;
        right:0;
    }
    </style>
</head>
<body>
<div id="div-1a">
<form name="search" action="search.php" method="get">
Search: 
<input type="text" name="key"> 
</form>
</div>
<H1>Search result for: <?php echo "$key"?></H1>
<P><?php echo "$total_num results found. $page_size results in every page"?></p>
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
foreach (Product::find('all', array('conditions' => "product_name LIKE '%$key%'", 'limit' => $page_size, 'offset' => ($page-1)*$page_size)) as $product)
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

<p>
<?php
$current_num=$total_num;
$current_page=1;
while($current_num > 0)
{  
    echo "<a href=\"search.php?key=$key&page=$current_page\">$current_page </a>";
    $current_num=$current_num - $page_size;
    $current_page=$current_page + 1;
}
?>
<p><a href="index.php">return to home page</a>

</table>
</body>
</html>
