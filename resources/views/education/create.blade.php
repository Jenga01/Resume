@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row">


            <div class="col-md-6">

                {!! Form::open(['route' => 'education']) !!}

                <fieldset>

                    <legend>Education</legend>

                    <!-- Sudies name -->
                    <div class="form-group">
                        {!! Form::label('studies_name', 'Studies Field:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('studies_name', $value = null, ['class' => 'form-control', 'placeholder' => 'Studies field']) !!}
                        </div>
                    </div>

                    <!-- Instituition -->
                    <div class="form-group">
                        {!! Form::label('instituition', 'Instituition:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('instituition', $value = null, ['class' => 'form-control', 'placeholder' => 'Instituition']) !!}
                        </div>
                    </div>
                    <!-- Period -->
                    <div class="form-group">
                        {!! Form::label('period', 'Period:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('period', $value = null, ['class' => 'form-control', 'placeholder' => '']) !!}
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


{{--                            {{link_to('create-cv/education', $title = 'Education', $attributes = ['class' => 'btn btn-primary','id' => 'edu', 'style'=>'float: right;'], $secure = null)}}--}}



                        </div>
                    </div>

                </fieldset>

                {!! Form::close()  !!}


            </div>

        </div>

    </div>

@endsection
