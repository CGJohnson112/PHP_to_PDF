<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP to PDF</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    
            <div class="d-flex col-md-12 justify-content-center">
                <div class="col-md-5">

               <h2 class="text-center">How to Generate PDF using PHP</h2>
                <form action="generate.php" method="post">
                        <label for="">First Name</label>
                        <input type="text" name="fname" class="form-control" required>

                        <label for="">Surname</label>
                        <input type="text" name="sname" class="form-control" required>


                        <label for="">Username</label>
                        <input type="text" name="uname" class="form-control" required>

                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <input type="submit" name="create" class="btn btn-success" value="Generate PDF">
                        

                </form>
            </div>

    </div>    

</div>
<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>