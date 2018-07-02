<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="image/x-icon" rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Edit_Notepad_Icon.svg/1024px-Edit_Notepad_Icon.svg.png">
        <title>Note Saver</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <style>
            html, body {
               
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
            <div class="content">
            <img class="logoImage" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Edit_Notepad_Icon.svg/1024px-Edit_Notepad_Icon.svg.png">
                <div class="title m-b-md">
                
                    Note Saver
                </div>

                <div class="links">
              
                @if (Route::has('login'))
          
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
           
            @endif

                </div>
            </div>
        </div>
    </body>
</html>
