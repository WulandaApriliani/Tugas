<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8git">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="log_in.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
</head>
<body>
    
   <div class="global-container pt-5">
    <div class="card login-from">
        <div class ="card-body">
            <h1 class="card-title text-center text-black">L O G I N</h1>
        </div>
        <div class="card-text">
            <form>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-black">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1"            aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-black">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label text-black" for="exampleCheck1">Check me out</label>
                </div>
                <div class="d-grid gap-2">       
                <button type="submit" class="btn btn-primary"><a href="dashboard.php">Login</a></button>
                </div>
            </form>
        </div>
        <div>
        </div>
        </div>
    </body>