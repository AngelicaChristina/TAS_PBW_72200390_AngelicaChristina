<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        @if (session('flash'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('flash') }}</strong>
        </div>
        @endif

        @if (session('error'))
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
    </div>
@endif

        <form action="/user/ceklogin" method="POST">
            @csrf
            <img class="mb-4" src="https://i.pinimg.com/564x/9e/55/0e/9e550e640af8fe7c180013bbd81389df.jpg" alt="" width="100"
                height="100">
            <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>

            <div class="form-floating">
                <input type="email" name='email' class="form-control" id="floatingInput" required autofocus>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name='password' class="form-control" id="floatingPassword" required>
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 72200390</p>
        </form>
    </main>



</body>

</html>