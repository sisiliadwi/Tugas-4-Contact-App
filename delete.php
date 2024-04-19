<?php
require_once 'models.php';

$res = Contact::delete('002');
echo $res;

?>
