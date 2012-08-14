<?php
require 'model/dogs.php';//ties the model and view together

$dogs = get_dogs();

include 'views/list.php';
?>