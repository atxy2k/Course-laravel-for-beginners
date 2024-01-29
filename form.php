<?php 
include_once './utils/save_form.php';

$form = new SaveFormInFile();
$form->with($_POST)->save();

#header("Location: index.php");
#die();