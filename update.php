<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .main
    {
        border:1px solid blue;
    margin-top:10px;
    max-width:700px;
    min-height:600px;
    }
    .input
    {
        margin-top:5px;
    }
    .h1
    {
        font-family:Times;
    }

</style>


</head>
<body>
    <?php
    
    $con=mysqli_connect("localhost","root","","clientdb");
    $ID=$_GET['Id'];
    $pic="select * from client where Id='$ID'";
    $data=mysqli_query($con,$pic);
    
    $rs=mysqli_fetch_array($data);
    
    
    ?>
<center>
    <div class="main bg-light text-success mt-5">
        <h2 class="bg-light fs-4 fw-bold">Client ragistration form</h2>
        <hr/>
        <form action="update1.php" method="POST" enctype="multipart/form-data">
            <label for=""></label>
            <input type="text" name="Name" placeholder="enter the name" value="<?php echo $rs['name'] ?>" class="form-control"/>
            <label for=""></label>
            <input type="text" name="Email" placeholder="enter the email" value="<?php echo $rs['email'] ?>" class="form-control"/>
            
            <label for=""></label>
            <input type="number" name="Age" placeholder="enter the mobile number" class="form-control"  value="<?php echo $rs['age'] ?>"/>
            <label for=""></label>
            <input type="number" name="Mob" placeholder="enter the password" class="form-control"  value="<?php echo $rs['mobile'] ?>"/>
            <label for=""></label>
            <input type="date" name="Add" placeholder="enter the date of birth" class="form-control"  value="<?php echo $rs['address'] ?>"/>
            <label for=""></label>
            <td><input type="file" name="Image" class="form-control mb-3" value="<?php echo $rs['image'] ?>"/><img src="<?php echo $rs['image'] ?>" height='100px' width='200px'/></td>
            <input type="hidden" name="id" value="<?php echo $rs['id'] ?>"/>
            <button name="update" class="btn btn-outline-success rounded-pill mt-4 fs-4 form-control">UPDATE</button>
        </form>
    </div>
</center>
    
</body>
</html>