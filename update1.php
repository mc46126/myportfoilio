<?php 
$con=mysqli_connect("localhost","root","","clientdb");
if(isset($_POST['update']))
{
    $ID=$_POST['id'];
    $NAME=$_POST['Name'];
    $EMAIL=$_POST['Email'];
    $AGE=$_POST['Age'];
    $MOBILE=$_POST['Mob'];
    $ADDRESS=$_POST['Add'];
    $IMAGE=$_FILES['Image'];
    //print_r($_FILES['image']);
    $imgl=$_FILES['Image']['tmp_name'];
    $imgname=$_FILES['Image']['name'];
    $imgdes="profiles/".$imgname;

    //move uploaded file
    move_uploaded_file($imgl,'profiles/'.$imgname);

    //$cmd="update logindata 
    mysqli_query($con,"UPDATE `client` SET `id`='$ID',`name`='$NAME',`email`='$EMAIL',`age`='$AGE',`mobile`='$MOBILE',`address`='$ADDRESS',`image`='$imgdes' WHERE id=$ID");

    header("location:show.php");


}


?>




