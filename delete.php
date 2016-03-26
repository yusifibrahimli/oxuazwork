<?php
include "model.php";

$delete=new Database("localhost","root","","lesson15");
$delete->delete($_GET['id']);
?>