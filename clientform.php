<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client form</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form action="client1.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="email" name="Email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">age</label>
                        <input type="number" name="Age" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">mobile</label>
                        <input type="number" name="Mob" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">address</label>
                        <input type="text" name="Add" class="form-control">
                    </div>

                    <!-- <input type="radio" id="" name="" value="HTML">
                    <label for="html">MALE</label><br>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="css">FEMALE</label><br> -->
 
                    
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="Image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-dark" name="save">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


    
</body>
</html>