<?php 
if(isset($_GET["id"])){
    $id = $_GET["id"];
    include("connection.php");

    $sql="DELETE FROM patients WHERE id=$id";
    $connection->query($sql);
}

header("location: /bloodbank_dbms/admin.php#pchart");
exit;

?>