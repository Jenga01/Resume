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
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
=======
>>>>>>> e81d41405d1b6724a3baa48f2ea7bcb4379ac42c


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

                            <div class="form-group">
                                <div class="col-lg-10">
                                    <img src="{{$p->image}}">
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
        <div>


            <div class="container">



                <div class="row">


                    <div class="col-md-6">


                        <!-- Position -->
                        <div class="form-group">
                            {!! Form::label('poaition', 'Position:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('position', $value = null, ['class' => 'form-control', 'placeholder' => 'Position name']) !!}
                            </div>
                        </div>

                        <!-- workplace -->
                        <div class="form-group">
                            {!! Form::label('workplace', 'Workplace:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('workplace', $value = null, ['class' => 'form-control', 'placeholder' => 'Workplace']) !!}
                            </div>
                        </div>
                        <!-- Period -->
                        <div class="form-group">
                            {!! Form::label('period', 'Period:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('period', $value = null, ['class' => 'form-control', 'placeholder' => '']) !!}
                            </div>


                        </div> <!-- Responsibilities -->
                        <div class="form-group">
                            {!! Form::label('responsibilities', 'Responsibilities:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('responsibilities', $value = null, ['class' => 'form-control', 'placeholder' => 'Responsibilities at workplace']) !!}
                            </div>
                        </div>

                        <!-- Linkedin profile -->
                        <div class="form-group">
                            {!! Form::label('tools', 'Tools:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('stack', $value = null, ['class' => 'form-control', 'placeholder' => 'Tools you have used at your workplace']) !!}
                            </div>
                        </div>

                        {{ Form::hidden('invisible', $p->id) }}


                            <div class="col-md-4">
                                <button class="btn btn-primary" type="submit" id="add">
                                    <span class="glyphicon glyphicon-plus"></span> ADD
                                </button>
                            </div>
                        </div>

                    <div class="form-group">
                        <div class="col-lg-10">
                            <div id="ohsnap" class="alert"></div>
                        </div>
                    </div>
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
                                    <td><button class="edit-modal btn btn-info" data-id="{{$exp->id}}"
<<<<<<< HEAD
                                                data-pos="{{$exp->position}}"
                                                data-work="{{$exp->workplace}}"
                                                data-per="{{$exp->period}}"
                                                data-resp="{{$exp->responsibilities}}"
                                                data-tools="{{$exp->stack}}">

                                            <span class="glyphicon glyphicon-edit"></span> Edit
                                        </button>
                                        <button class="delete-modal btn btn-danger" data-id="{{$exp->id}}"
                                                data-pos="{{$exp->position}}"
                                                data-work="{{$exp->workplace}}">
=======
                                                data-position="{{$exp->position}}"
                                                data-workplace="{{$exp->workplace}}">
                                            <span class="glyphicon glyphicon-edit"></span> Edit
                                        </button>
                                        <button class="delete-modal btn btn-danger" data-id="{{$exp->id}}"
                                                data-name="{{$exp->workplace}}">
>>>>>>> e81d41405d1b6724a3baa48f2ea7bcb4379ac42c
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </button></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

<<<<<<< HEAD
                    <div class="container">

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
                                                <label class="control-label col-sm-2" for="id">ID:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="fid" disabled>
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
                                                    <input type="text" class="form-control" id="tools">
                                                </div>
                                            </div>
                                        </form>
                                        <div class="deleteContent">
                                            Are you Sure you want to delete <span id="pos" class="pos"></span> Position at
                                            <span
                                                class="hidden work"></span>?
                                            <span
                                                class="hidden did" style="display: none"></span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn actionBtn" data-dismiss="modal">
                                                <span id="footer_action_button" class='glyphicon'> </span>
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


=======


                    <script>

                        $("#add").click(function() {
                            $.ajax({
                                type: 'post',
                                url: '{{ route('add.experience') }}',
                                data: {
                                    '_token': $('input[name=_token]').val(),
                                    'position': $('input[name=position]').val(),
                                    'workplace': $('input[name=workplace]').val(),
                                    'period': $('input[name=period]').val(),
                                    'responsibilities': $('input[name=responsibilities]').val(),
                                    'stack': $('input[name=stack]').val(),
                                    'invisible': $('input[name=invisible]').val(),
                                },
                                success: function(data) {
                                    ohSnap(data.status, {
                                        color: 'green'
                                    });
                                },

                                error: function (result) {
                                    var errors = '';
                                    for(results in result.responseJSON){
                                        errors += result.responseJSON[results] + '<br>';
                                        ohSnap(errors, {
                                            color: 'red'
                                        });
                                    }


                                }
                            });
                            $('#name').val('');
                        });


                    </script>
>>>>>>> e81d41405d1b6724a3baa48f2ea7bcb4379ac42c


                    </div>

                </div>




        </div>
        <h3>Section 3</h3>
        <div>
            <p>
                Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
            </p>
            <ul>
                <li>List item one</li>
                <li>List item two</li>
                <li>List item three</li>
            </ul>
        </div>
        <h3>Section 4</h3>
        <div>
            <p>
                Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                mauris vel est.
            </p>
            <p>
                Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                inceptos himenaeos.
            </p>
        </div>
    </div>
</div>

<<<<<<< HEAD
    <script>

        $("#add").click(function() {
            $.ajax({
                type: 'post',
                url: '{{ route('add.experience') }}',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'position': $('input[name=position]').val(),
                    'workplace': $('input[name=workplace]').val(),
                    'period': $('input[name=period]').val(),
                    'responsibilities': $('input[name=responsibilities]').val(),
                    'stack': $('input[name=stack]').val(),
                    'invisible': $('input[name=invisible]').val(),
                },
                success: function(data) {
                    ohSnap(data.status, {
                        color: 'green'
                    });
                },

                error: function (result) {
                    var errors = '';
                    for(results in result.responseJSON){
                        errors += result.responseJSON[results] + '<br>';
                        ohSnap(errors, {
                            color: 'red'
                        });
                    }


                }
            });
            $('#name').val('');
        });

        $('.modal-footer').on('click', '.edit', function() {
            $.ajax({
                type: 'patch',
                url: '{{route('edit.experience')}}',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $("#fid").val(),
                    'position': $('#pos').val(),
                    'workplace': $('#work').val(),
                    'period': $('#per').val(),
                    'responsibilities': $('#resp').val(),
                    'tools': $('#tools').val()
                },
                success: function(data) {
                    ohSnap(data.status, {
                        color: 'green'
                    });
                },

                error: function (result) {
                    var errors = '';
                    for(results in result.responseJSON){
                        errors += result.responseJSON[results] + '<br>';
                        ohSnap(errors, {
                            color: 'red'
                        });
                    }


                }
            });
        });

        $('.modal-footer').on('click', '.delete', function() {
            $.ajax({
                type: 'post',
                url: '{{route('delete.experience')}}',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $('.did').text()
                },
                success: function(data) {
                    ohSnap(data.status, {
                        color: 'green'
                    });
                },
            });
        });


    </script>




@endsection

=======


@endsection
>>>>>>> e81d41405d1b6724a3baa48f2ea7bcb4379ac42c
