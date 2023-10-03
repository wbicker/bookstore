<?php
include 'LW65456_member.php';


require 'LW65456_dbcon.php';

$id = "";

$id = $_GET['nid'];

$sql = "INSERT INTO LW65456_tblcomment (comment, newsid) SELECT comment, newsid FROM LW65456_approvecomment";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql1 = "DELETE FROM LW65456_approvecomment WHERE id=$id";

$conn->query($sql1);


$conn->close();

header('Location: LW65456_newcom.php');


?>