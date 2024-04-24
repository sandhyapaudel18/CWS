<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <? php
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $address=$_POST["address"];
    $email=$_POST["email"];
    $country=$_POST["country"];
    $subjects=$_POST["subjects"];
    $bio=$_POST["bio"];
    $password=$_POST["password"];
    $dateofbirth=$_POST["dateofbirth"];
    $conn=mysqli_connect("localhost","root","root123","");
    $inser="INSERT INTO student($name,$gender,$address,$email,$country,$subjects,$bio,$password,$dateofbirth) VALUES('$name','$gender','$address','$email','$country','$subjects','$bio','$password','$dateofbirth')";
    $run=mysqli_connect($conn,$inser);

    if($run==true){
        echo"Thank you for Submitting your Form:"
    }


    ?>

   
</body>
</html>                                                                                                                                                                                     