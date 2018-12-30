<?php

include '../p_connect.php';
$categoryDetails = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoryID = $_POST['categoryID'];
    $query = mysqli_fetch_assoc(mysqli_query($connect, "CALL spgetcategory('$categoryID')"));
    $category = $query["category"];
    $description = $query["description"];
    array_push($categoryDetails, array("categoryID" => $categoryID, "category" => $category, "description" => $description));
    echo json_encode($categoryDetails);
}
?>