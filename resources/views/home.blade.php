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
        <div style="border: 3px solid black;">


            <div>
                <h1>How To Start A Blog In 2024</h1>
                <p>by Shaikh Nayeem Uddin</p>
                <hr>
                <p>Updated December 24th, 2023</p>
                <p>Are you looking for an easy guide on how to start a blog?<br><br>

                    The step-by-step guide on this page will show you how to create a blog in 20 minutes with just the most
                    basic computer skills. <br><br>

                    After completing this guide you will have a beautiful blog that is ready to share with the world.
                    <br><br>

                    This guide is made especially for beginners. I will walk you through each and every step, using plenty
                    of pictures and videos to make it all perfectly clear. <br><br>

                    If you get stuck or have questions at any point, simply send me a message and I will do my best to help
                    you out.
                </p>

                <div>
                    <p><a href="">Edit</a></p>
                    <form action="" method="">
                        @csrf
                        <button>Delete</button>
                    </form>
                </div>
                <p>This actions only available for your own posts.</p>
            </div>

            <div>
                <h1>How to Start a Blog That Makes You Money</h1>
                <p>by Asifur Rahman</p>
                <hr>
                <p>Updated December 25th, 2023</p>
                <p>Anyone can start a blog that makes money. Seriously. <br><br>

                    Some of you can even generate enough money from your blog to quit your job.<br><br>

                    Don’t believe me?<br><br>

                    My blog gets over 2,436,100 visitors annually and generates more than one million dollars in revenue.
                </p>

                <div>
                    <p><a href="">Edit</a></p>
                    <form action="" method="">
                        @csrf
                        <button>Delete</button>
                    </form>
                </div>
                <p>This actions only available for your own posts.</p>
            </div>

            @foreach ($posts as $post)
                <div>
                    <h1>{{ $post['title'] }}</h1>
                    <p>by {{ $post->user->name }}</p>
                    <hr>
                    <p>Updated at {{ $post->updated_at }}</p>
                    <p>{{ $post['body'] }}</p>

                    <div>
                        <p><a href="/edit-post/{{ $post->id }}">Edit</a></p>
                        <form action="/delete-post/{{ $post->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </div>
                    <p>This actions only available for your own posts.</p>
                </div>
            @endforeach


        </div>
    @else
        <div class="w-50 mx-auto border border-black rounded p-2 m-3">
            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="name" class="form-control mb-2" id="exampleInputEmail1"
                        aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name='password' class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <p class="text-secondary">Already have an account? Please <a class="text-decoration-none"
                    href="/login">login</a></p>
        </div>





    @endauth

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

{{-- added for all post --}}
