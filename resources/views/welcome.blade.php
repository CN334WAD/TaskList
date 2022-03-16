<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
            margin: auto;
            background-color: #f3f4f6;
        }

        .LOGO {
            margin: 0px;
            padding: 0px;
            right: 0;
            bottom: 0;
            min-width: 10%;
            min-height: 10%;
        }

        .button {
            color: white;
            padding: 32px;
            text-align: center;
            display: inline;
            position: relative;

        }


        .btn-auth {
            width: 20%;
            height: 20%;
            font-size: 50px;
            text-decoration: none;
            border: #ffFFFF solid 1px;
            background-color: #ffFFFF;
            border-radius: 25px;
            padding: 20px;
            box-shadow: 0.1em 0 .1em #1f2937;
            color: #59a1cc;
        }

        .btn-auth:hover {
            box-shadow: 0.1em 0 .1em #fbc549;
            color: #59a1cc;
            border-radius: 25px;
        }

        .image {
            padding: 5px;
            width: 350px;
            position: relative;
            bottom: 60%;
        }

        .container-image {
            padding-top: 30px;
            text-align: center;
        }

        .container-btn {
            text-align: center;
            margin-top: 100px;
        }

        img {
            border-radius: 50%;
        }

        .form-dashboard {

            width: 500px;
            border: #ffFFFF solid 1px;
            background-color: #ffFFFF;
            border-radius: 25px;
        }
    </style>
</head>

<body>

    <div class="formborder container-sm">

        <div class="row">
            <div class="col">
                <div class="container-image">
                    <img src="logo2.jpg" alt="sea" class="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container-btn">
                @if (Route::has('login'))
                <div class="button">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 ">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="btn-auth">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-auth" style="margin-left: 20px;">Register</a>
                    @endif
                    @endif
                </div>
                @endif
            </div>
        </div>


    </div>



</body>

</html>
