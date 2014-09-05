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
$category_id=$_GET['id'];
$do=$_GET['do'];

if($do == "show"){ 
    $category = Category::find_by_category_id($category_id);
}
if($do == "edit"){ 
    // get data from POST and update
    $category = Category::find_by_category_id($category_id);
    $category->category_name= $_POST['category_name'];
    $category->category_des= $_POST['category_des'];
    $category->save();
    echo "update successfuly<br>";
}
if($do == "add"){ 
    // get data from POST and create
    $category = New Category();
    $category->category_name= $_POST['category_name'];
    $category->category_des= $_POST['category_des'];
    $category->save();
    echo "add successfuly<br>";
}

?>
<form name="edit_category" action="category.php?do=edit&id=<?php echo "$category->category_id" ?>" method="post">
<table>
    <tr>
    <td>category_id</td> 
    <td><?php echo "$category->category_id"?> </td> 
    </tr>
    <tr>
    <td>category_name</td> 
    <td><input type="text" name="category_name" value="<?php echo "$category->category_name" ?>"> </td> 
    </tr>
    <tr>
    <td>category_des</td> 
    <td><textarea rows="4" cols="40" type="text" name="category_des" ><?php echo "$category->category_des" ?> </textarea></td> 
    </tr>
    <tr><td><input type="submit" value="Submit"></td></tr>
    <tr><td><a href="index.php">return to home page</a></tr></td>
<table>
</form>

</body>
</html>
