<?php
require 'field.php';
require 'boolen.php';
require 'text.php';
require 'checkbox.php';
require 'radio.php';


$fieldes =
 [
   new App\Field('mainfield'),
   new App\Text('textfield'),
   new App\Boolean('booleanfield'),
   new App\CheckBox('checkboxfield'),
   new App\Radio('radiofield'),
 ];


  foreach ($fieldes as $field){
    echo  $field->render();
    echo "</br>" ;
  }