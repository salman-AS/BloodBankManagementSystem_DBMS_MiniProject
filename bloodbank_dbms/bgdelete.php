<?php 
if(isset($_GET["id"])){
    $id = $_GET["id"];
    include("connection.php");

    $sql="DELETE FROM bloodgroup WHERE type='$id'";
    $connection->query($sql);
}

header("location: /bloodbank_dbms/admin.php#bgchart");
exit;

?>