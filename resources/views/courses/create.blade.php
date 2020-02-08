@extends('layouts.app')

@section('content')
    <script type="text/javascript" src="{{ asset('js/jquery_scripts.js') }}"></script>

    <div class="container">

        <div class="row">


            <div class="col-md-6">

                {!! Form::open(['route' => 'courses']) !!}

                <fieldset>

                    <legend>Courses</legend>


                    <div class="form-group">
                        <div id="main">
                            <input type="button" id="btAdd" value="Add Course" class="btn btn-primary" />
                            <input type="button" id="btRemove" value="Remove Course" class="btn btn-danger" />
                            <input type="button" id="btRemoveAll" value="Remove all courses" class="btn btn-danger" /><br />
                        </div>
                    </div>


                    <!-- Submit Button -->
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2" style="padding-left: 0;">

                            {!! Form::submit('Submit', ['class' => 'btn btn-success'] ) !!}




                            {{link_to('create-cv/skills', $title = 'Skills', $attributes = ['class' => 'btn btn-primary','id' => 'edu', 'style'=>'float: right;'], $secure = null)}}




                        </div>
                    </div>

                </fieldset>

                {!! Form::close()  !!}
                {{link_to('/home', $title = 'Dashboard', $attributes = ['class' => 'btn btn-primary','id' => 'edu', 'style'=>'float: left;'], $secure = null)}}


            </div>
            {{Session::put('institutionID_add',request()->id)}}

{{--            @if(Session::has('institutionID_add'))--}}
{{--                <div class="alert alert-success">--}}
{{--                    {{Session::get('institutionID_add')}}--}}
{{--                </div>--}}

{{--            @elseif(Session::has('institutionID'))--}}
{{--                <div class="alert alert-success">--}}
{{--                    {{Session::get('institutionID')}}--}}
{{--                </div>--}}

{{--                {{'No session'}}--}}
{{--            @endif--}}

        </div>

    </div>

@endsection
