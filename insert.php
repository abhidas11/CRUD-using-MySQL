<?php
include 'dbconn.php';
if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $adress = mysqli_real_escape_string($conn, $_POST['adress']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

      $insertquery =  "INSERT INTO crud(name, email, address, phone)
                     VALUES ('$name','$email','$adress','$phone')";
        $mysqliquery = mysqli_query($conn, $insertquery);
    if($insertquery){
        ?>
    <script>
        window.location.replace("index.php");
    </script>

<?php 

    }else{
        echo 'Not Inserted';
    }



}



?>