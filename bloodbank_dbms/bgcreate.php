<?php
include("connection.php");


$type="";
$give_to="";
$recieve_from="";

$errorMessage= "";
$successMessage= "";

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $type=$_POST["type"];
    $give_to=$_POST["give_to"];
    $recieve_from=$_POST["recieve_from"];

    do{
        if( empty($type) || empty($give_to) || empty($recieve_from) ){
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "INSERT INTO bloodgroup (type, give_to, recieve_from)" .
                "VALUES ('$type','$give_to','$recieve_from')";
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        
        $type="";
        $give_to="";
        $recieve_from="";

        $successMessage = "NEW RECORD ADDED SUCCESFULLY";

        header("location: /bloodbank_dbms/admin.php#bgchart");
    } while (false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD GROUPS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="form.css">
</head>
<body class="background">
    <div class="container my-5 layer text">
        <h2>Add new blood type</h2>

        <?php if( !empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post" class="fs-3 ">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Type</label>
                <div class='col-sm-6'>
                    <input type="text" class="form-control " name="type" values="<?php echo $type; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Give to</label>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" name="give_to" values="<?php echo $give_to; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Recieve from</label>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" name="recieve_from" values="<?php echo $recieve_from; ?>"> 
                </div>
            </div>

        <?php
        if( !empty($successMessage) ){
            echo "
            <div class='row mb-3>
                <div class='offset-sm-3 col-sm-6>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>
            </div>
            ";
        }
        ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class='col-sm-3 d-grid'>
                    <a class="btn btn-outline-primary" href="/bloodbank_dbms/admin.php#bgchart" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>