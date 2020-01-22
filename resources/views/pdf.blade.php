<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Jevgenij Bogdasic</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



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


        .col-sm-8{
            float: left;
            max-width: 30%;

        }
        .contact-info{
            float: right;
        }
        .page-break {
            page-break-after: always;
        }




    </style>
</head>
<body>

@foreach ($person as $p)

<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title m-b-md">
            Web developer and IT enthusiast
        </div>

            <div class="name">

                <h1>{{ $p->name }}</h1>
            </div>

                    <div class="col-sm-8">
                        <img src="{{ url($p->image) }}">

                    </div>
        <div class="contact-info">

                {{$p->email . ','}}

                {{ $p->phone }}

                {{ $p->birthday }}

                {{ $p->location }}

                </div>


            </div>
    @endforeach
            <div class="divider div-transparent"></div>

            <div class="page-break"></div>

            <div class="container">

                @foreach ($experience as $exp)
                 <h1>{{ "Position: ".$exp->position }}</h1>
                 <h1>{{ "Workplace: ".$exp->workplace }}</h1>
                 <h1>{{ "Period: ".$exp->period }}</h1>
                 <h1>{{ "Responsibilities: ".$exp->responsibilities }}</h1>
                 <h1>{{ "Tools: ".$exp->stack }}</h1>
                @endforeach

                <hr class="mt-5 mb-5">



    </div>
</div>
</body>
</html>
