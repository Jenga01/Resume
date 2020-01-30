<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap-social.css')}}" />

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://kit.fontawesome.com/8c15c4443d.js" crossorigin="anonymous"></script>


    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/accordion.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ohsnap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery_scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ajaxCalls.js') }}"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script>
        $(function() {
            $('input[name="period"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        });
    </script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

        .alert-green {
            color: white;
            background-color: #37BC9B;
        }
        .alert-red {
            color: white;
            background-color: #DA4453;
        }

        .fade:not(.show) {
            opacity: 0.9;
        }
        #social-legend{
            display: block;
            width: 100%;
            margin-bottom: 20px;
            font-size: 21px;
            line-height: inherit;
            color: #333;
            border-bottom: 1px solid #e5e5e5;
        }
        .btn#git-log:hover{
            color: white !important;
            opacity: 0.8 !important;
        }
       .btn#git-log{
           background-color: #1b1e21 !important;
           color: white !important;

       }
        .btn-block {

            width: 50% !important;
        }

    </style>
</head>



<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Resumetec') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{--                                    {{ Auth::user()->id }}--}}
                                {{ Auth::user()->name }} <span class="caret"></span>
                                @if( Auth::user()->name == null)
                               <img width="20" height="20" src="{{ Auth::user()->avatar }} "><span class="caret"></span>
                                    {{ Auth::user()->email }} <span class="caret"></span>

                            @endif
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('ohsnap')
    <div class="form-group">
        <div class="col-lg-10">
            <div id="ohsnap" class="alert"></div>
        </div>
    </div>



    <div class="validation-error">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if(session()->has('alert-success'))
            <div class="alert alert-success">
                {{ session()->get('alert-success') }}
            </div>
        @endif


        <main class="py-4">
            @yield('content')
        </main>

        @yield('edit-work')
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">

                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" id="fid" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="position">Position:</label>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" id="pos">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="workplace">Workplace:</label>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" id="work">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="period">Period:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="period" class="form-control" id="per">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="period">Responsibilities::</label>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" id="resp">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="tools">Tools:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="stack">
                                </div>
                            </div>
                        </form>
                        <div class="deleteContent">
                            Are you Sure you want to delete <span id="pos" class="pos"></span> Position at
                            <span
                                class="hidden work"></span>?
                            <span
                                class="hidden did-exp" style="visibility: hidden;" ></span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn actionBtn" data-dismiss="modal">
                                <span id="footer_action_button" class='glyphicon'> </span>
                            </button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <span class='glyphicon glyphicon-remove'></span> Close
                            </button>
                        </div>
                        6
                    </div>
                </div>
            </div>
        </div>


    </div>

    @yield('edit-edu')
    <div id="myModal-edu" class="modal fade" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">

                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="edu_id" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="studies_name">Studies name:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" id="sn">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="institution">Institution:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" id="ins">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="period">Period:</label>
                            <div class="col-sm-10">
                                <input type="text" name="period" class="form-control" id="per">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="degree">Degree:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="deg">
                                    <option value="B">Bachelor's degree</option>
                                    <option value="M">Masters's degree</option>
                                    <option value="D">Doctoral degree</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="tools">Location:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="loc">
                            </div>
                        </div>
                    </form>
                    <div class="deleteContent">
                        Are you Sure you want to delete <span id="sn" class="sn"></span> Studies at
                        <span
                            class="hidden ins"></span>?
                        <span
                            class="hidden did-edu" ></span>
                    </div>
                    <div class="modal-footer-edu">
                        <button type="button" class="btn actionBtn" data-dismiss="modal">
                            <span id="footer_action_button_edu" class='glyphicon'> </span>
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @yield('edit-c')
    <div id="myModal-c" class="modal fade" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">

                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="cid" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="course_name">Course name:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" id="cn">
                            </div>
                        </div>



                    </form>
                    <div class="deleteContent">
                        Are you Sure you want to delete this course?<span id="cn" class="cn"></span>
                        <span
                            class="hidden"></span>
                        <span
                            class="hidden did-c" style="visibility: hidden;"></span>
                    </div>
                    <div class="modal-footer-cour">
                        <button type="button" class="btn actionBtn" data-dismiss="modal">
                            <span id="footer_action_button_c" class='glyphicon'> </span>
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('edit-skill')
    <div id="myModal-skill" class="modal fade" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">

                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="skill-id" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="course_name">Skill:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" id="sk">
                            </div>
                        </div>



                    </form>
                    <div class="deleteContent">
                        Are you Sure you want to delete this skill?<span id="sk" class="sk"></span>
                        <span
                            class="hidden"></span>
                        <span
                            class="hidden did-skill" style="visibility: hidden;"></span>
                    </div>
                    <div class="modal-footer-skill">
                        <button type="button" class="btn actionBtn" data-dismiss="modal">
                            <span id="footer_action_button_skill" class='glyphicon'> </span>
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('edit-language')
    <div id="myModal-language" class="modal fade" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">


                    <div class="deleteContent">
                        Are you Sure you want to delete this language?<span id="lang" class="lang"></span>
                        <span
                            class="hidden"></span>
                        <span
                            class="hidden did-language" style="visibility: hidden;"></span>
                    </div>
                    <div class="modal-footer-language">
                        <button type="button" class="btn actionBtn" data-dismiss="modal">
                            <span id="footer_action_button_language" class='glyphicon'> </span>
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @yield('edit-project')
    <div id="myModal-project" class="modal fade" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                    <form class="form-horizontal" role="form">

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="project-id" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="project_name">Project:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" id="pro-name">
                            </div>
                        </div>   <div class="form-group">
                            <label class="control-label col-sm-2" for="project_desc">Description:</label>
                            <div class="col-sm-10">
                                <textarea  class="form-control" id="pro-desc"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="project_link">Link:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" id="pro-link">
                            </div>
                        </div>

                    </form>

                    <div class="deleteContent">
                        Are you Sure you want to delete this project?<span id="lang" class="lang"></span>
                        <span
                            class="hidden"></span>
                        <span
                            class="hidden did-project" style="visibility: hidden;"></span>
                    </div>
                    <div class="modal-footer-project">
                        <button type="button" class="btn actionBtn" data-dismiss="modal">
                            <span id="footer_action_button_project" class='glyphicon'> </span>
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>



</body>
</html>
