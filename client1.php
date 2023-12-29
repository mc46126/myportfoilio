<?php 

//database conne..
$con=mysqli_connect("localhost","root","","clientdb");

if(isset($_POST['save']))
{

    $NAME=$_POST['Name'];
    $EMAIL=$_POST['Email'];
    $AGE=$_POST['Age'];
    $MOB=$_POST['Mob'];
    $ADDRESS = $_POST['Add'];
    $IMAGE=$_FILES['Image'];
    //print_r($_FILES['image']);
    $imgl=$_FILES['Image']['tmp_name'];
    $imgname=$_FILES['Image']['name'];
    $imgdes="profiles/".$imgname;

    //move uploaded file
    move_uploaded_file($imgl,'profiles/'.$imgname);

    $cmd="insert into client(name,email,age,mobile,address,image) values('$NAME','$EMAIL',$AGE,'$MOB','$ADDRESS','$imgdes')";
    mysqli_query($con,$cmd);
    header("location:show.php");
    
}


?>




?>