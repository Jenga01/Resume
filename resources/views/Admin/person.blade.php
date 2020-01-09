@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row">


        <div class="col-md-6">

            {!! Form::open(['route' => 'create.person', 'files' => true]) !!}

            <fieldset>

                <legend>Person Information</legend>

                <!-- Title -->
                <div class="form-group">
                    {!! Form::label('title', 'CV title:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('title', $value = null, ['class' => 'form-control', 'placeholder' => 'title']) !!}
                    </div>
                </div>


                <!-- Name -->
                <div class="form-group">
                    {!! Form::label('name', 'Fullname:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Yourname']) !!}
                    </div>
                </div>

                <!-- email -->
                <div class="form-group">
                    {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
                    </div>
                </div>
                <!-- Phone -->
                <div class="form-group">
                    {!! Form::label('phone', 'Phone:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('phone', $value = null, ['class' => 'form-control', 'placeholder' => 'Phone number']) !!}
                    </div>
                </div>

                <!-- Birthday -->
                <div class="form-group">
                    {!! Form::label('birthday', 'Birthday:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::date('birthday', $value = null, ['class' => 'form-control', 'placeholder' => '']) !!}
                    </div>
                </div> <!-- Location -->
                <div class="form-group">
                    {!! Form::label('location', 'Location:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('location', $value = null, ['class' => 'form-control', 'placeholder' => 'Your location']) !!}
                    </div>
                </div>

                <!-- Linkedin profile -->
                <div class="form-group">
                    {!! Form::label('linkedin', 'Linkedin:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('linkedin', $value = null, ['class' => 'form-control', 'placeholder' => '']) !!}
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

            </fieldset>

            {!! Form::close()  !!}


        </div>

    </div>

</div>

@endsection
