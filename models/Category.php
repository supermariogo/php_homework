<?php
class Category extends ActiveRecord\Model {
    static $table_name = 'category';
    
    # explicit pk since our pk is not "id" 
    static $primary_key = 'category_id';
    
}
?>
