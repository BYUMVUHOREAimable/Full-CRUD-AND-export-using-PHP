<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add New User</title>
</head>
<body>
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New User</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>

<form action="process.php" method="post">
        <div class="form-elemnt my-4">
            <input type="text" class="form-control" name="fname" placeholder="Firstname:">
        </div>
        <div class="form-elemnt my-4">
            <input type="text" class="form-control" name="lname" placeholder="Lastname:">
        </div>

        <div class="form-element my-4">
            <input type="email" name="email" id="" class="form-control" placeholder="Email:">
        </div>

        <div class="form-element my-4">
            <input type="password" name="password" id="" class="form-control" placeholder="Password:">
        </div>

        <div class="form-elemnt my-4">
            <select name="gender" id="" class="form-control">
                <option value="">Select Gender:</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="form-element my-4">
            <input type="submit" name="create" value="Add Contact" class="btn btn-primary">
        </div>
    </form>
    
</div>

<!-- Bootstrap Bundle with Popper.js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-7V+EH503E8yn+N37NY2v1Dr5U49b6U+VO6yJ9X1G36zCn+psAPta4aZby4mcfs3o" crossorigin="anonymous"></script>

</body>
</html>