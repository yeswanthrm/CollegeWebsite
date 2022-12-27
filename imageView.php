<?php
require_once __DIR__ . '/db_conn.php';
if (isset($_GET['id'])) {	
    $sql = "SELECT id, SSC_Cert FROM users WHERE id=?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("i", $_GET['id']);
    $statement->execute() or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_connect_error());
    $result = $statement->get_result();

    $row = $result->fetch_assoc();
    header("Content-type: " . "image/jpeg");
    echo $row["SSC_Cert"];
}
?>

