@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row">


            <div class="col-md-6">

                {!! Form::open(['route' => 'languages']) !!}

                <fieldset>

                    <legend>Languages</legend>


                    <div class="form-group">
                        <select class="form-control" name="language" required="required">
                            @foreach($language as $lang)
                            <option value="{{$lang->name}}">{{$lang->name}}</option>
                                @endforeach
                        </select>

                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2" style="padding-left: 0;">
                            {!! Form::submit('Add', ['class' => 'btn btn-success'] ) !!}


                            {{link_to('create-cv/projects', $title = 'Projects', $attributes = ['class' => 'btn btn-primary','id' => 'edu', 'style'=>'float: right;'], $secure = null)}}



                        </div>
                    </div>

                </fieldset>

                {!! Form::close()  !!}


            </div>

        </div>

    </div>

@endsection
