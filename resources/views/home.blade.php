<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

    @auth
    @else
        <div ">
                <h2>Register</h2>
                <form action="/register" method="POST">
                    @csrf
                    <div >
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="name" class="form-control mb-2" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" >We'll never share your email with anyone else.</div>
                    </div>
                    <div >
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name='password' class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" >Register</button>
                </form>
                <p >Already have an account? Please <a
                        href="/login">login</a></p>
            </div>





    @endauth

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

{{-- registration form created by afrin --}}
