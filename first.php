<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<!-- create html form -->
<body>
    <div class="container">
        <form action="create.php" method="post">
            <h3 class="display-4 text-center">Create</h3><hr><br>
        
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" placeholder="Enter your name" name="username">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="userEmail" placeholder="Enter your email">
            </div>

            <button type="submit" class="btn btn-primary" name="create">create</button>
            <a href="readd.php" class="link-primary">View</a>
        </form>
    </div>

</body>
</html>