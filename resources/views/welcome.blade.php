<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YouLead Portal   </title>
        <link rel="icon" href="/youleadsummit.org/public/frontend/img/favicon.png" type="image/png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: white-gold;
                color: #000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                color: #000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container pull-left">
                     <a class="pull-left"> 
                        <img src="public/img/YOULEAD-logo.png" style="  height: 50px; width: 150; padding-top: 20px; padding-left: 30px;" >
                     </a>
                    @if (Route::has('login'))
                

                <div class="top-right links">
                     
                     
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        <div class="flex-center position-ref full-height">
       
            <div class="container-fluid" style="background-color: #fff; padding: 10px; text-align: center;">
                <div class="title m-b-md">
                    YouLead Portal
                </div>
                <div>
                    <p> Welcome to YouLead portal where you can create and access your account by</p>
                    <p>

                    If you don't have account yet you can <a href="{{ route('register') }}">Register</a> now or <a href="{{ route('login') }}">Login</a> to your account.
                </p>

                </div>
                <div class="links" style="text-align: center;" >
                    <div>
                        <img src="public/img/youlead__no_one_behi_wspnn.jpg" style=" padding-bottom: 10px;  max-height: 230px; padding-top: 20px;">
                    </div>

                          <a href="#" target="_blank">
            {{__(" YouLead Summit 2020")}}
          </a>
        
          <a href="#" target="_blank">
            {{__(" YouLead")}}
          </a>
        
          <a href="#" target="_blank">
            {{__(" YouLead Community")}}
          </a>
        
          <a href="#" target="_blank">
            {{__(" YouBlog")}} </a>

        </div>
        
    <div class="container" style="text-align: center; background-color: red; padding-top: 15px;padding-bottom: 10px;">
    
      &copy;2020 YouLead

    </div>

          
        </div>

                    

            </div>

            
        </div>

    </body>

</html>
