<?php
include_once "../vendor/autoload.php";
use App\controller\Staff;

$staff = new Staff;

$name = $_POST['name'];
$email = $_POST['email'];
$cell = $_POST['cell'];


$photo_name = $_FILES['photo']['name'];
$photo_tmp_name = $_FILES['photo']['tmp_name'];

$unique_name = md5(time().rand()).$photo_name;

move_uploaded_file($photo_tmp_name,'../assets/media/img/'.$unique_name);

$data = $staff -> createStaff($name,$email,$cell,$unique_name);

if ($data){
    echo '<p class="alert alert-success">Data insert successful<button class="close" data-dismiss="alert">&times;</button></p>';
}