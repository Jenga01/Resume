@extends('layouts.app')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />



    <script>

        $('#per').datepicker({ dateFormat: 'mm-dd-yyyy' });
    </script>


    <div class="container">

        <div id="accordion">
            <h3 style="background-color: #38c172;">Personal Information</h3>
            <div>


                <div class="container">

                    <div class="row">

                        <div class="col-md-6">

                            @foreach($person as $p)

                            @endforeach

                            <fieldset>

                                <legend>Personal Information</legend>


                            {{ Form::open(['route' => ['person.update', $p->id], 'files' => true,  'method' => 'PUT']) }}


                            <!-- Title -->
                                <div class="form-group">
                                    {!! Form::label('title', 'CV title:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('title', $p->title, ['class' => 'form-control', 'placeholder' => 'title']) !!}
                                    </div>
                                </div>


                                <!-- Name -->
                                <div class="form-group">
                                    {!! Form::label('name', 'Fullname:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('name', $p->name, ['class' => 'form-control', 'placeholder' => 'Yourname']) !!}
                                    </div>
                                </div>

                                <!-- email -->
                                <div class="form-group">
                                    {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::email('email', $p->email, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
                                    </div>
                                </div>
                                <!-- Phone -->
                                <div class="form-group">
                                    {!! Form::label('phone', 'Phone:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('phone', $p->phone, ['class' => 'form-control', 'placeholder' => 'Phone number']) !!}
                                    </div>
                                </div>

                                <!-- Birthday -->
                                <div class="form-group">
                                    {!! Form::label('birthday', 'Birthday:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::date('birthday', $p->birthday, ['class' => 'form-control', 'placeholder' => '']) !!}
                                    </div>
                                </div> <!-- Location -->
                                <div class="form-group">
                                    {!! Form::label('location', 'Location:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('location', $p->location, ['class' => 'form-control', 'placeholder' => 'Your location']) !!}
                                    </div>
                                </div>

                                <!-- Linkedin profile -->
                                <div class="form-group">
                                    {!! Form::label('linkedin', 'Linkedin:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('linkedin', $p->linkedin, ['class' => 'form-control', 'placeholder' => '']) !!}
                                    </div>
                                </div>

                                <!-- Github profile -->
                                <div class="form-group">
                                    {!! Form::label('github', 'github:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('github', $p->github_profile, ['class' => 'form-control', 'placeholder' => 'Link to github profile']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('photo', 'Current photo:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        <img src="{{ asset('public/').$p->image}}"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('image', 'Photo:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::file('image', $value = null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                    </div>
                                </div>


                                <!-- Submit Button -->
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        {!! Form::submit('Submit', ['class' => 'btn btn-success'] ) !!}


                                    </div>
                                </div>

                                {!! Form::close()  !!}
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            <h3 style="background-color: #38c172;">Work experience</h3>



            <div class="container" id="work-refresh">

                <div class="row">


                    {{ csrf_field() }}
                    <div class="table-responsive text-center">
                        <table class="table table-borderless" id="table">
                            <thead>
                            <tr>
                                <th class="text-center">Position</th>
                                <th class="text-center">Workplace</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            @foreach($experience as $exp)

                                <tr class="item{{$exp->id}}">
                                    <td>{{$exp->position}}</td>

                                    <td>{{$exp->workplace}}</td>
                                    <td><button class="edit-modal-work btn btn-info" data-id="{{$exp->id}}"
                                                data-pos="{{$exp->position}}"
                                                data-work="{{$exp->workplace}}"
                                                data-comp_url="{{$exp->company_url}}"
                                                data-per="{{$exp->period}}"
                                                data-resp="{{$exp->responsibilities}}"
                                                data-tools="{{$exp->stack}}">

                                            <span class="glyphicon glyphicon-edit"></span> Edit
                                        </button>
                                        <button class="delete-modal btn btn-danger" data-id="{{$exp->id}}"
                                                data-pos="{{$exp->position}}"
                                                data-work="{{$exp->workplace}}">
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </button></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <div class="container">

                        @section('edit-work')
                        @endsection
                    </div>

                </div>

                <div class="col-md-6">

                    {{link_to('create-cv/experience', $title = 'Add work experience', $attributes = ['class' => 'btn btn-primary','id' => 'exp'], $secure = null)}}

                </div>
            </div>






            <h3 style="background-color: #38c172;">Education</h3>
            <div class="container" id="edu-refresh">
                {{ csrf_field() }}
                <div class="table-responsive text-center">
                    <table class="table table-borderless" id="table">
                        <thead>
                        <tr>
                            <th class="text-center">Studies name</th>
                            <th class="text-center">Instituition</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>


                        @foreach($education as $edu)
                            <tr class="item{{$edu->id}}">
                                <td>{{$edu->studies_name}}</td>
                                <td>{{$edu->institution}}</td>

                                <td><button class="edit-modal-edu btn btn-info" data-id="{{$edu->id}}"
                                            data-sn="{{$edu->studies_name}}"
                                            data-ins="{{$edu->institution}}"
                                            data-per="{{$edu->period}}"
                                            data-deg="{{$edu->degree}}"
                                            data-loc="{{$edu->location}}">

                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                    </button>
                                    <button class="delete-modal-edu btn btn-danger" data-id="{{$edu->id}}"
                                            data-sn="{{$edu->studies_name}}"
                                            data-ins="{{$edu->institution}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                    </button>

                                    <a href="{{route('person.education.courses', ['id' => $edu->id])}}" class="btn btn-info btn-xs" role="button">Add courses</a>

                                </td>

                            </tr>
                        @endforeach



                    </table>

                    <div class="container">

                        @section('edit-edu')
                        @endsection
                    </div>
                </div>



                {{link_to('create-cv/education', $title = 'Add educational institution info', $attributes = ['class' => 'btn btn-primary','id' => 'edu'], $secure = null)}}

            </div>


            <h3 style="background-color: #38c172;">Courses</h3>




            <div class="container" id="cour-refresh">
                {{ csrf_field() }}
                <div class="table-responsive text-center">
                    <table class="table table-borderless" id="table">
                        <thead>
                        <tr>
                            <th class="text-center">Instituition</th>
                            <th class="text-center">Course name</th>

                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>


                        @foreach($courses as $c)
                            <tr class="item{{$c->id}}">
                                <td>{{$c->institution}}</td>
                                <td>{{$c->course_name}}</td>

                                <td><button class="edit-modal-c btn btn-info" data-id="{{$c->id}}"
                                            data-course="{{$c->course_name}}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                    </button>
                                    <button class="delete-modal-c btn btn-danger" data-id="{{$c->id}}"
                                            data-course="{{$c->course_name}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                    </button>


                                </td>

                            </tr>
                        @endforeach



                    </table>

                    <div class="container">

                        @section('edit-c')
                        @endsection
                    </div>
                </div>

            </div>

            <h3 style="background-color: #38c172;">Skills</h3>


            <div class="container" id="skills-refresh">
                {{ csrf_field() }}
                <div class="table-responsive text-center">
                    <table class="table table-borderless" id="table">
                        <thead>
                        <tr>
                            <th class="text-center">Skill</th>

                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>




                        @foreach($skills as $s)
                            <tr class="item{{$s->id}}">
                                <td>{{$s->skill}}</td>



                                <td><button class="edit-modal-skill btn btn-info" data-id="{{$s->id}}"
                                            data-skill="{{$s->skill}}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                    </button>
                                    <button class="delete-modal-skill btn btn-danger" data-id="{{$s->id}}"
                                            data-skill="{{$s->skill}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                    </button>


                                </td>

                            </tr>
                        @endforeach



                    </table>

                    <div class="container">

                        @section('edit-skill')
                        @endsection
                    </div>


                </div>

                {{link_to('create-cv/skills', $title = 'Add Personal skills', $attributes = ['class' => 'btn btn-primary','id' => 'skl'], $secure = null)}}
            </div>


            <h3 style="background-color: #38c172;">Languages</h3>


            <div class="container" id="language-refresh">
                {{ csrf_field() }}
                <div class="table-responsive text-center">
                    <table class="table table-borderless" id="table">
                        <thead>
                        <tr>
                            <th class="text-center">Language</th>

                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>




                        @foreach($languages as $l)
                            <tr class="item{{$l->id}}">
                                <td>{{$l->language}}</td>



                                <td>
                                    <button class="delete-modal-language btn btn-danger" data-id="{{$l->id}}"
                                            data-language="{{$l->language}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                    </button>


                                </td>

                            </tr>
                        @endforeach



                    </table>

                    <div class="container">

                        @section('edit-language')
                        @endsection
                    </div>


                </div>

                {{link_to('create-cv/languages', $title = 'Add language', $attributes = ['class' => 'btn btn-primary','id' => 'skl'], $secure = null)}}
            </div>

            <h3 style="background-color: #38c172;">Projects</h3>


            <div class="container" id="project-refresh">
                {{ csrf_field() }}
                <div class="table-responsive text-center">
                    <table class="table table-borderless" id="table">
                        <thead>
                        <tr>
                            <th class="text-center">Project</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>


                        @foreach($projects as $p)
                            <tr class="item{{$p->id}}">
                                <td>{{$p->name}}</td>

                                <td>
                                    <button class="edit-modal-project btn btn-info" data-id="{{$p->id}}"
                                            data-name="{{$p->name}}"
                                            data-desc="{{$p->description}}"
                                            data-url="{{$p->url}}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                    </button>

                                    <button class="delete-modal-project btn btn-danger" data-id="{{$p->id}}"
                                            data-name="{{$p->name}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                    </button>

                                </td>

                            </tr>
                        @endforeach


                    </table>

                    <div class="container">

                        @section('edit-project')
                        @endsection
                    </div>


                </div>

                {{link_to('create-cv/projects', $title = 'Add Project', $attributes = ['class' => 'btn btn-primary','id' => 'skl'], $secure = null)}}
            </div>
        </div>
    </div>



@endsection
