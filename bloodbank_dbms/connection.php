<?php
	$connection = mysqli_connect('localhost', 'root', '', 'bloodbank');
    if(!$connection){
        echo "Connection failed";
    }
?>