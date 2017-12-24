<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href={{ asset('page_movie/css/login.css') }}>
</head>
<body>
<div id="container">
    @if(\Illuminate\Support\Facades\Session::has('message'))
        {{ \Illuminate\Support\Facades\Session::get('message') }}
    @endif
    <div id="frame">
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="box">
                <div class="title">
                    <p>Register</p>
                </div>
                <div class="input">
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="input">
                    <input type="text" name="email" placeholder="Email" required>
                </div>
                <div class="input">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="password">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="register">
                    REGISTER
                </button>
                <div class="click">
                    <a href="#"><p>By clicking register, I agree to your terms</p></a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>