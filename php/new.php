<?php
$url = "./new.php";
if (isset($_POST['submit']) && isset($_FILES['my_image'])){
    echo "hello";
}
else{
    header("Location : $url");
}
?>