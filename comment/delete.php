<?php
include '../connection.php';

$id = $_POST['id'];
$images = $_POST['images'];

$sql ="DELETE FROM comment
        WHERE
        id = '$id'
        ";
$result = $connect->query($sql);

if ($result) {
   if ($image = '') {
        unlink("../images/comment/".$image);
   }
    echo json_encode(array("success" => true)); 
} else {
    echo json_encode(array("success" => false));
}