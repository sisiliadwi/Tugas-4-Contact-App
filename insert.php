<?php
require_once 'models.php';

$res = Contact::insert ('002', '081336914773', 'Abidzar Hakim', 'Laki-Laki' );
echo $res;
?>