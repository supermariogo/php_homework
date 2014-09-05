<?php
    require_once "config.php";
?>
<?php
$who=$_GET['who'];
$id=$_GET['id'];

if($who == "product"){ 
    $product = Product::find($id);
    $product -> delete();
}else if($who == "category"){
    $category = Category::find($id);
    $category -> delete();
}
Header("Location:index.php");
?>
