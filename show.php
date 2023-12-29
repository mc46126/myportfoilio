<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .container

        {
            border:1px solid blue;
            
        }
        .thead
        {
            background-color:lime;
            font-family:Times;
        }
        .tbody
        {
            font-family:Times; 
        }
        .h1
        {
            font-family:Times;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1 class="h1 text-center text-success fs-0.5">client ragistration record data</h1>
    <table class="table mt-10">
        <thead class="thead text-success fw-bold fs-4">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>image</th>
                <th>delete</th>
                <th>update</th>

            </tr>
            <tbody class='tbody bg-light fs-6 fw-bold'>
                <?php
                //database conne..
                $con=mysqli_connect("localhost","root","","clientdb");

                //$cmd="select * from logindata where 1";
                 $data=mysqli_query($con,"SELECT * FROM `client` WHERE 1");

                 while($rs=mysqli_fetch_array($data))
                 {
                    echo "
                    <tr>
                    <td>$rs[id]</td>
                    <td>$rs[name]</td>
                    <td>$rs[email]</td>
                    <td>$rs[age]</td>
                    <td>$rs[mobile]</td>
                    <td>$rs[address]</td>
                    <td><img src='$rs[image]' height='200px' width='200px'/></td>
                    <td><a href='delete.php? Id=$rs[id]' class='btn btn-outline-danger'>delete</a></td>
                    <td><a href='update.php? Id=$rs[id]' class='btn btn-outline-success'>update</a></td>
                    </tr>";
                    
                 }
                 
                ?>
            </tbody>
        </thead>
    </table>
    </div>





    
</body>
</html>

