<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
        <div class="flex-center position-ref full-height">
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

            <div class="content">
                <div class="title m-b-md">
                    Add new offer
                </div>

                <form method="POST" action="{{route('offers.store')}}">
                    @csrf

                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            A simple success alert—check it out!
{{--                            {{Session::get('success')}}--}}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                        @error('name')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror


                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter the price">
                        @error('price')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">details</label>
                        <input type="text" class="form-control" name="details" placeholder="Enter details" >
                        @error('details')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save offer</button>
                </form>


            </div>
        </div>
    </body>
</html>
