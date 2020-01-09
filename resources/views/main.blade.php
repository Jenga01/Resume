@foreach($person as $p)

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ $p->name }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
            margin: auto;
            margin-top: 0;
        }

        .title {
            font-size: 84px;
        }

        img {
            border-radius: 50%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-border-radius: 99em;
            -moz-border-radius: 99em;
            border-radius: 99em;
            border: 5px solid #eee;
            box-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);
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

        .col-sm-8 {
            max-width: 30%;

        }

        .divider {
            position: relative;
            margin-top: 90px;
            height: 1px;
        }

        .div-transparent:before {
            content: "";
            position: absolute;
            top: 0;
            left: 5%;
            right: 5%;
            width: 90%;
            height: 1px;
            background-image: linear-gradient(to right, transparent, rgb(48, 49, 51), transparent);
        }

        #exp {
            margin: auto;
            width: 50%;
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title m-b-md">
          {{$p->title}}
        </div>




            <div class="container">
                @yield('content')
                <div class="row">
                    <div class="col-sm-4">
                        <h2>{{ $p->name }}</h2>


                    </div>
                    <div class="col-sm-8">
                        <img src="{{ asset($p->image) }}"/>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <i class="fas fa-envelope"></i>
                            {{ $p->email }}
                        </p>

                        <p>
                            <i class="fas fa-phone"></i>
                            {{ $p->phone }}
                        </p>
                        <i class="fas fa-calendar"></i>
                        {{ $p->birthday }}
                        <p>
                            <i class="material-icons">location_city</i>
                            {{ $p->location }}

                        </p>
                        <p>
                            <i class="fa fa-linkedin-square"></i>
                            <a href="{{$p->linkedin}}">linkedin</a>
                        </p>
                        @endforeach

                        <p>
                            {{--<a href="{{action('pdfController@saveToPDF', $p->id)}}">Save as PDF</a>--}}
                            <a href="{{ route('person.pdf', $p) }}"> Save as PDF </a>
                        </p>

                    </div>

                </div>
            </div>
            <div class="divider div-transparent"></div>
            <h1 class="display-1">Work experience</h1>
            @foreach($experience as $exp)
                <div class="container">
                    <p class="col-sm-4" id="exp">
                    <p>
                    <h1>{{$exp->position}}</h1></p>
                    <p>
                    <h2>{{$exp->workplace}}</h2></p>
                    <p>
                    <h3>{{$exp->period}}</h3></p>
                    <p><h4>{{$exp->responsibilities}}</h4></p>
                    <p><h5>{{$exp->stack}}</h5></p>
                    <hr class="mt-5 mb-5">

                </div>

            @endforeach





    </div>
</div>
</body>
</html>
