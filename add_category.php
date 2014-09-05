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
<form name="add_category" action="category.php?do=add" method="post">
<table>
    <tr>
    <td>category_id</td> 
    <td>auto </td> 
    </tr>
    <tr>
    <td>category_name</td> 
    <td><input type="text" name="category_name"> </td> 
    </tr>
    <tr>
    <td>category_des</td> 
    <td><textarea rows="4" cols="40" type="text" name="category_des" ></textarea></td> 
    </tr>
    <tr><td><input type="submit" value="Submit"></td></tr>
    <tr><td><a href="index.php">return to home page</a></tr></td>
<table>
</form>
 
</body>
</html>
