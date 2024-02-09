<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>formulaire</title>
</head>
<body>

        <div class="container mt-5 col-4">
            <h3 class="text-center">Create a Compte</h3>
            <form method="POST" action="{{ route('suscribe') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputPasword1" class="form-label"> Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasword1">
                  </div>
                <button type="submit" class="btn btn-primary">Creat Now</button>
              </form>
        </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

