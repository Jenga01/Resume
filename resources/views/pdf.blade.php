<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



    <!-- Styles -->
    <style type="text/css" media="all">
        * { font-family: DejaVu Sans, sans-serif; }

        html, body {
            background-color: #fff;
            font-family: DejaVu Sans !important;
            color: #636b6f;
            font-weight: 200;
            height: 100vh;
            margin: 0;

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
        hr.style-two {
            border: 0;
            height: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }
        .badge-light{
            font-size: small;
            display: inline-block;
        }


        .list-unstyled {
            text-align: center;
        }
        .list-unstyled > ul {
            display: inline-block;
        }

        .btn.btn-link{
            margin-left: 300px;
        }





    </style>
</head>
<body>

@foreach ($person as $p)

<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title m-b-md">
           {{$p->title}}
        </div>



                <h1>{{$p->name}}</h1>


        <img src="{{ asset('public/').$p->image}}">




            <div class="container">
               <p><b>Email:</b> {{$p->email}}</p>
               <p><b>Phone:</b> {{$p->phone }}</p>
               <p><b>Birth date:</b> {{$p->birthday }}</p>
               <p><b>Location:</b> {{$p->location }}</p>
                </div>



    @endforeach

    @if($experience->count() > 0)

            <div class="divider div-transparent"></div>

            <div class="page-break"></div>
        <h4 class="display-4" >Work experience</h4>


                @foreach ($experience as $exp)
                <p><b>Position: </b>{{ $exp->position }}</p>
                 <p><b>Workplace: </b>{{$exp->workplace }}</p>
                 <p><b>Period: </b>{{ $exp->period }}</p>
                 <p><b>Responsibilities: </b>{{$exp->responsibilities }}</p>
                 <p><b>Tools: </b>{{$exp->stack }}</p>

                <hr class="style-two">
                @endforeach

            @endif



            @if($education->count() > 0)

                <div class="divider div-transparent"></div>
                <h4 class="display-4" >Education</h4>

                @foreach ($education as $edu)
                    <p><b>Studies field: </b>{{$edu->studies_name }}</p>
                    <p><b>Institution: </b>{{$edu->institution }}</p>
                    <p><b>Degree: </b>
                        @if($edu -> degree == 'B')
                            {{"Bachelor's degree"}}
                        @elseif($edu -> degree == 'M')
                            {{"Master's degree"}}
                        @else
                            {{"Doctoral degree"}}
                        @endif
                    </p>
                    <p><b>Period:</b>{{ $edu->period }}</p>
                    <p><b>Location: </b>{{$edu->location }}</p>

                @if($courses->count() > 0)

                    <b><p><ins>Courses</ins></p></b>
                @endif
                @foreach($courses as $c)
                    @if($edu->id == $c->institution_id)

                               <p>{{$c->course_name}}</p>

                    @endif
                @endforeach

                <hr class="style-two">
                @endforeach


            @endif



        @if($skills->count() > 0)

            <div class="divider div-transparent"></div>
            <h4 class="display-4" >Skills</h4>
            <div class="container">

            @foreach ($skills as $skill)
                <p class="badge badge-pill badge-light">{{ $skill->skill }}</p>

            @endforeach
            </div>
            <hr class="style-two">
        @endif



        @if($languages->count() > 0)

            <div class="divider div-transparent"></div>
            <h4 class="display-4">Languages</h4>

            @foreach ($languages as $lang)
                <p>{{ $lang->language }}</p>

            @endforeach
            <hr class="style-two">
        @endif


        @if($projects->count() > 0)

            <div class="divider div-transparent"></div>
            <h4 class="display-4">Projects</h4>
            <div class="container">

            @foreach ($projects as $project)
                <p><b>Project name:</b>
                    {{$project->name}}
                </p>
                <p>
                <p><b>Description:</b>  {{$project->description}}
                </p>

                <p>
                    <a href="{{$project->url}}" class="btn btn-link">Go to the project</a>
                </p>
                <hr class="style-two">
            @endforeach
            </div>


        @endif

    </div>



</div>


</body>
</html>
