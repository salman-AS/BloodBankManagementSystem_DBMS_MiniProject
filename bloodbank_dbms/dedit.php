<?php
include("connection.php");

$id="";
$name="";
$city="";
$phone_no="";
$age="";
$gender="";
$health_condition="";
$blood_groups="";

$errorMessage= "";
$successMessage= "";

if( $_SERVER['REQUEST_METHOD'] == 'GET' ){
    if(!isset($_GET["id"])){
        header("location: /bloodbank_dbms/admin.php#dchart");
        exit;
    }

    $id=$_GET["id"];

    $sql = " SELECT * FROM donors WHERE id = '$id' ";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: /bloodbank_dbms/admin.php#dchart");
        exit;
    }

    $id = $row["id"];
    $name = $row["name"];
    $city = $row["city"];
    $phone_no = $row["phone_no"];
    $age = $row["age"];
    $gender = $row["gender"];
    $health_condition = $row["health_condition"];
    $blood_groups = $row["blood_groups"];
}
else{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $city = $_POST["city"];
    $phone_no = $_POST["phone_no"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $health_condition = $_POST["health_condition"];
    $blood_groups = $_POST["blood_groups"];
    do{
        if( empty($id) || empty($name) || empty($city) || empty($phone_no) || empty($age) || empty($gender) || empty($health_condition) || empty($blood_groups) ){
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE donors SET name='$name', city='$city',phone_no='$phone_no',age='$age',gender='$gender',health_condition='$health_condition',blood_groups='$blood_groups' WHERE id='$id'";
        
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Invalid query".$connection->error;
            break;
        }

        $successMessage="Table updated succesfully";
        header("location: /bloodbank_dbms/admin.php#dchart");
        exit;
    }while (true);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONORS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="form.css">
</head>
<body class="background">
    <div class="container my-5 layer text">
        <h2>Edit donor record</h2>

        <?php if( !empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button id='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <input id="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="name" values="<?php echo $name; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">City</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="city" values="<?php echo $city; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="phone_no" values="<?php echo $phone_no; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Age</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="age" values="<?php echo $age; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="gender" values="<?php echo $gender; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Health</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="health_condition" values="<?php echo $health_condition; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Blood Group</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="blood_groups" values="<?php echo $blood_groups; ?>"> 
                </div>
            </div>
        <?php
        if( !empty($successMessage) ){
            echo "
            <div class='row mb-3>
                <div class='offset-sm-3 col-sm-6>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button id='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>
            </div>
            ";
        }
        ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button id="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class='col-sm-3 d-grid'>
                    <a class="btn btn-outline-primary" href="/bloodbank_dbms/admin.php#dchart" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>