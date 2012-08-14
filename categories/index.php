<?php
require 'model/categories.php';//ties the model and view together

$products = get_products();

include 'views/list.php';
?>