<?php

include '../p_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoryID = $_POST['categoryID'];
    $query = mysqli_query($connect, "CALL spdeletecategory('$categoryID')");
    echo json_encode($query);
}
?>