<?php
require_once 'models.php';

$res = Contact::update('003', '082356987652', 'Keenan Te', 'Laki-Laki');
echo $res;

?>
