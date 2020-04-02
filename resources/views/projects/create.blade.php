@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row">


            <div class="col-md-6">

                {!! Form::open(['route' => 'projects']) !!}

                <fieldset>

                    <legend>Projects</legend>


                    <!-- Project name -->
                    <div class="form-group">
                        {!! Form::label('name', 'Project name:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Project name']) !!}
                        </div>
                    </div>


                    <!-- Description -->
                    <div class="form-group">
                        {!! Form::label('description', 'Description:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('description', $value = null, ['class' => 'form-control', 'placeholder' => 'Short project description']) !!}
                        </div>
                    </div>

                    <!-- url -->
                    <div class="form-group">
                        {!! Form::label('url', 'Project url:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('url', $value = null, ['class' => 'form-control', 'placeholder' => 'link to project e.g. github']) !!}
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {!! Form::submit('Submit', ['class' => 'btn btn-success'] ) !!}


                        </div>
                    </div>

                </fieldset>

            </div>

            {!! Form::close()  !!}

        </div>
        {{link_to('/home', $title = 'Dashboard', $attributes = ['class' => 'btn btn-primary','id' => 'edu'], $secure = null)}}
    </div>



@endsection
