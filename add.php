<?php
include "model.php";
$data=new Database("localhost","root","","lesson15");
$getTitle=$_POST['titleName'];
$getText=$_POST['textName'];
$getDesc=$_POST['descName'];
$getFile=$_POST['imgName'];
$getDate=$_POST['dateNews'];
$getStatus=$_POST['statusNews'];
$data->insert($getTitle,$getText,$getDesc,$getFile,$getDate,$getStatus);
?>