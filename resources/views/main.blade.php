@foreach($person as $p)

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
            font-family: DejaVu Sans;
            font-weight: 200;
            height: 100vh;
            margin: 0;

        }

        .container {
            font-size: larger;
            max-width: 1000px !important;
            font-family: "Times New Roman", Times, serif;

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

        b {
            font-weight: 900;
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
            max-width: 100% !important;
        }

        .icon-bar {
            position: fixed;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;

            font-size: 20px;
        }

        .icon-bar a:hover {
            background-color: #000;
        }

        .facebook {
            background: #3B5998;
            color: white;
        }

        .twitter {
            background: #55ACEE;
            color: white;
        }

        .linkedin {
            background: #007bb5;
            color: white;
        }

        .badge-light {
            font-size: medium;
            display: inline-block;
        }

        .badge-secondary {
            font-size: medium;
        }

        #skills-container {
            width: 500px;
        }

        .list-unstyled {
            text-align: center;
        }

        .list-unstyled > ul {
            display: inline-block;
        }


        @media screen and (max-width: 860px) {
            .icon-bar {
                position: initial;
                transform: translateY(0%);
            }

            .h-divider {
                margin: auto;
                margin-top: 80px;
                width: 80%;
                position: relative;
            }

            .shadow {
                box-shadow: 0 .0rem 0rem rgba(0, 0, 0, .15) !important;
            }

            .h-divider .shadow {
                overflow: hidden;
                height: 20px;
            }

            .h-divider .shadow:after {
                content: '';
                display: block;
                margin: -25px auto 0;
                width: 100%;
                height: 25px;
                border-radius: 125px/12px;
                box-shadow: 0 0 8px black;
            }


        }

        @media screen and (min-width: 576px) and (max-width: 767px) {

            .contact-info {
                float: left;

            }
        }

        @media screen and (min-width: 320px) and (max-width: 576px) {
            .container {
                width: 70%;
                margin: auto;
            }

            .badge-light {
                font-size: medium;
                display: block;
            }

            .display-1 {
                font-size: xx-large;
            }

            .title.m-b-md {
                font-size: 22px;
            }

            p {
                font-size: medium;
            }

            #exp {
                margin: auto;
                max-width: 70% !important;
            }

        }


    </style>
</head>
<body>


<div class="content">
    <div class="title m-b-md">
        {{$p->title}}
    </div>


    <div class="container">

        <div class="row">
            <div class="col-sm">
                <h2>{{ $p->name }}</h2>


            </div>
            <div class="col-sm">
                <img src="{{ asset('public/').$p->image}}"/>
            </div>
            <div class="col-sm">
                <div class="contact-info">
                    <p>
                        <i class="fas fa-envelope"></i>
                        {{ $p->email }}
                    </p>

                    <p>
                        <i class="fas fa-mobile"></i>
                        {{ $p->phone }}
                    </p>
                    <i class="fas fa-calendar"></i>
                    {{ $p->birthday }}
                    <p>
                        <i class="material-icons">location_city</i>
                        {{ $p->location }}

                    </p>
                    @if($p->linkedin != '')
                        <p>
                            <i class="fa fa-linkedin-square"></i>
                            <a href="{{$p->linkedin}}" target="_blank">Linkedin profile</a>
                        </p>
                    @endif

                    @if($p->github_profile != '')
                        <p>
                            <i class="fa fa-github" aria-hidden="true"></i>
                            <a href="{{$p->github_profile}}" target="_blank">Github profile</a>
                        </p>


                    @endif
                    @endforeach


                    <p>

                        <a href="{{ route('person.pdf', $p) }}"> Save as PDF </a>
                    </p>


                </div>
            </div>
        </div>
    </div>


    @if($experiences->count() > 0)

        <h1 class="display-1">Work experience</h1>
        @foreach($experiences as $experience)


            <div class="divider div-transparent"></div>

            <div class="container">

                <p><b>Position: </b>{{ $experience->position }}</p>
                <p><b>Workplace: </b>{{$experience->workplace }}</p>
                <p><b>Period: </b>{{ $experience->period }}</p>
                <p><b>Responsibilities: </b>{{$experience->responsibilities }}</p>
                @if($experience->stack != null)
                    <p><b>Tools: </b>{{$experience->stack }}</p>
                @endif
                @if($experience->company_url != null)
                    <p><b><a href="{{$experience->company_url }}" target="_blank">Company homepage</a></b></p>
                @endif


            </div>

        @endforeach
    @endif

    @if($projects->count() > 0)

        <h1 class="display-1">Projects</h1>
        <div class="divider div-transparent"></div>

        <div class="container">
            @foreach($projects as $project)

                <b style="font-size: x-large">Project name:</b>
                <p>{{$project->name}}</p>
                <b style="font-size: x-large">Description:</b>
                <p>{{$project->description}}</p>
                <p>
                    <a href="{{$project->url}}" style="font-size: x-large" class="btn btn-link" target="_blank">Go to
                        the project</a>
                </p>
                <hr class="dotted">


            @endforeach
        </div>
    @endif




    @if($education->count() > 0)

        <h1 class="display-1" style="display: block;">Education</h1>

        @foreach($education as $edu)

            <div class="divider div-transparent"></div>
            <div class="container">

                <p><b>Program name: </b>{{$edu->studies_name}}</p>
                <p><b>Educational institution: </b>{{$edu->institution}}</p>
                <p><b>Education period: </b>{{$edu->period}}</p>
                <p><b>Degree: </b>
                    @if($edu -> degree == 'B')
                        {{"Bachelor's degree"}}
                    @elseif($edu -> degree == 'M')
                        {{"Master's degree"}}
                    @else
                        {{"Doctoral degree"}}
                    @endif

                </p>
                <p><b>Location:</b>
                    {{$edu->location}}
                </p>


                @foreach($courses as $course)
                    @if($edu->id == $course->institution_id)

                        <ul class="list-unstyled">
                            <ul>
                                <li>{{$course->course_name}}</li>
                            </ul>
                        </ul>
                    @endif

                @endforeach


                @endforeach
            </div>
            @endif





            @if($skills->count() > 0)

                <h1 class="display-1">Skills</h1>
                <div class="divider div-transparent"></div>

                <div class="container">

                    <p class="col-sm-4">

                    @foreach($skills as $skill)



                        <p class="badge badge-pill badge-light">

                            {{$skill->skill}}
                        </p>

                    @endforeach
                </div>
            @endif


            @if($languages->count() > 0)
                <h1 class="display-1">Languages</h1>
                <div class="divider div-transparent"></div>
                <div class="container">
                    @foreach($languages as $language)


                        <p class="col-sm-4">
                        <ul class="list-unstyled">
                            <ul>
                                <li>{{$language->language}}</li>
                            </ul>
                        </ul>
                    @endforeach
                </div>
            @endif



            <div class="h-divider">
                <div class="shadow"></div>
            </div>

            <div class="icon-bar">
                <p>Share on:</p>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{route('show.cv', $p)}}&title={{$p->title}}"
                   target="_blank" class="share-popup" style="background: #007bb5; color: white;">
                    <i class="fa fa-linkedin"></i>
                </a>

                <a href="https://www.facebook.com/sharer/sharer.php?u={{route('show.cv', $p)}}&t={{$p->title}}"
                   target="_blank" class="share-popup" style="background: #3B5998;color: white;">
                    <i class="fa fa-facebook"></i>
                </a>

                <a href="http://www.twitter.com/intent/tweet?url={{route('show.cv', $p)}}&via=TWITTER_HANDLE_HERE&text={{$p->title}}"
                   target="_blank" class="share-popup" style="background: #55ACEE; color: white;">
                    <i class="fa fa-twitter"></i>
                </a>

            </div>
            <div class="divider div-transparent"></div>

            @if(Auth::guest())
                <div class="container">
                    <p class="bg-light text-dark" style="font-size: large; margin-top: 20px;"><a
                            href="http://resumetec.site/home" target="_blank">Interested in creating Resume like
                            this?</a></p>
                </div>

@endif


</body>


</html>
