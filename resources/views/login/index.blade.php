<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="background-color: #3259C7">
    
    <link rel="stylesheet" type="text/css" href="{{ ('assets/css/bootstrap.min.css') }}">
    
    <div class="container" style="position: relative; top: 150px;">
        <div class="row justify-content-center my-auto">
            <div class="col-lg-10 col-md-9 col-xl-10 my-5">
                <div class="card bg-gray-200 shadow my-5">
                    <div class="card-body">
                        <div class="card bg-green w-50 mx-auto">
                            <h1 class="text-center text-dark h5 my-auto py-2"><img src="img/logo.png" alt="" style="width: 100px"></h1>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="username" class="text-dark">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-dark">Password</label>
                                    <input type="text" name="password" id="password" class="form-control" placeholder="Masukkan Password" aria-describedby="helpId">
                                </div>
                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary form-control">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>