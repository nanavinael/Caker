@extends('layouts.usermain')
@section('title', ' Masuk')
@section('main')

    <!-- Tabs Titles -->
<html lang="en-Us">
<head>

    <meta charset="utf-8">
    
    <title>Login with Facebook or Twitter</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>

    <!--[if lt IE 9]>
        <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
<div class="background">
    <div id="login">
        <br><br>
        <h1><strong>Welcome.</strong> Please login.</h1>

        <form form action="{{ URL::action('UserController@login') }}" method="post" >
            @csrf
            <fieldset>

               @if(Session::has('msg'))
            <b class="text-success">{{ Session::get('msg')}}</b>
              
            @endif
             @if(Session::has('error'))
            <b class="text-danger">{{ Session::get('error')}}</b>
              
            @endif <br>
            <input type="text" name="email" class="form-control" placeholder="Email" required="" autofocus=""><br><br>
            <input type="password" name="password" class="form-control" placeholder="Password" required=""><br><br>
                <p><a href="{{ URL::action('PerusahaanController@register') }}">Don't Have Account?</a></p>

                <p><input type="submit" value="Login"></p>

            </fieldset>

        </form>

    </div> <!-- end login -->
</div>
</body>
</html>
@endsection