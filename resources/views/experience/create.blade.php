@extends('layouts.app')

@section('content')

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <div class="container">

        <div class="row">


            <div class="col-md-6">

                {!! Form::open(['route' => 'experience']) !!}

                <fieldset>

                    <legend>Work experience</legend>

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
                            {!! Form::textarea('responsibilities', $value = null, ['class' => 'form-control', 'placeholder' => 'Responsibilities at workplace']) !!}
                        </div>
                    </div>

                    <!-- Linkedin profile -->
                    <div class="form-group">
                        {!! Form::label('tools', 'Tools:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('stack', $value = null, ['class' => 'form-control', 'placeholder' => 'Tools you have used at your workplace']) !!}
                        </div>
                    </div>


                    <!-- Submit Button -->
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {!! Form::submit('Submit', ['class' => 'btn btn-success'] ) !!}

{{--                            {!! link_to_route('person.education', $title = 'Education', $attributes = ['class' => 'btn btn-primary','id' => 'edu', 'style'=>'float: right;']); !!}--}}
{{----}}

                            {{link_to('create-cv/education', $title = 'Education', $attributes = ['class' => 'btn btn-primary','id' => 'edu', 'style'=>'float: right;'], $secure = null)}}



                        </div>
                    </div>

                </fieldset>

                {!! Form::close()  !!}


            </div>

        </div>

    </div>

@endsection
