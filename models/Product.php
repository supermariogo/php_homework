<?php
class Product extends ActiveRecord\Model {
    static $table_name = 'product';
    
    # explicit pk since our pk is not "id" 
    static $primary_key = 'product_id';
    
}
?>
