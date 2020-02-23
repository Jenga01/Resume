@extends('layouts.app')

@section('content')


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />




    <div class="container">
@yield('education')
        <div class="row">


            <div class="col-md-6">

                {!! Form::open(['route' => 'education']) !!}

                <fieldset>

                    <legend>Education</legend>

                    <!-- Sudies name -->
                    <div class="form-group">
                        {!! Form::label('studies_name', 'Studies name:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('studies_name', $value = null, ['class' => 'form-control', 'placeholder' => 'Studies field']) !!}
                        </div>
                    </div>

                    <!-- Instituition -->
                    <div class="form-group">
                        {!! Form::label('instituition', 'Instituition:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('institution', $value = null, ['class' => 'form-control', 'placeholder' => 'Instituition']) !!}
                        </div>
                    </div>
                    <!-- Period -->
                    <div class="form-group">
                        {!! Form::label('period', 'Period:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('period', $value = null, ['class' => 'form-control', 'id' => 'per', 'placeholder' => '']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('period', 'Degree:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::select('degree', ['B' => "Bachelor's degree", 'M' => "Master's degree", 'D' => "Doctoral degree"]) !!}
                            </div>


                    </div> <!-- Location -->
                    <div class="form-group">
                        {!! Form::label('location', 'Location:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('location', $value = null, ['class' => 'form-control', 'placeholder' => 'Instituition location']) !!}
                        </div>
                    </div>



                    <!-- Submit Button -->
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {!! Form::submit('Submit', ['class' => 'btn btn-success'] ) !!}

                            {{link_to('create-cv/skills', $title = 'Skills', $attributes = ['class' => 'btn btn-primary','id' => 'edu', 'style'=>'float: right;'], $secure = null)}}
{{--                            {{link_to('create-cv/education', $title = 'Education', $attributes = ['class' => 'btn btn-primary','id' => 'edu', 'style'=>'float: right;'], $secure = null)}}--}}



                        </div>
                    </div>

                    </div>

                </fieldset>

                {!! Form::close()  !!}
                {{link_to('/home', $title = 'Dashboard', $attributes = ['class' => 'btn btn-primary','id' => 'edu', 'style'=>'float: left;'], $secure = null)}}




            </div>

        </div>

    </div>

@endsection
