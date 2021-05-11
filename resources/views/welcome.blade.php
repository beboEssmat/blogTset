<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
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
        

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <h1>{{__('message.welcome')}}</h1>
            {{--<p>{{$obj->name}} ---- {{$obj->age}}</p>--}} //comment
            {{-----------------------------------------------------------}}
              @foreach($arr as $_arr)
                @if( $_arr == 'abanoub')
                <p>{{$_arr}} the king</p>
                @else 
                <p>{{$_arr}}</p>
                @endif
              @endforeach
              {{-----------------------------------------------------------}}

              @forelse($arr as $_arr)
                <p>{{$_arr}}</p>
                @empty
                <p>empty array</p>
              @endforelse
            </div>
        </div>
    </body>
</html>
