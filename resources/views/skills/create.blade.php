@extends('layouts.app')

@section('content')
    <script type="text/javascript" src="{{ asset('js/jquery_scripts.js') }}"></script>

    <div class="container">

        <div class="row">


            <div class="col-md-6">

                {!! Form::open(['route' => 'skills']) !!}

                <fieldset>

                    <legend>Skills</legend>


                    <div class="form-group">
                        <div id="main">
                            <input type="button" id="btAddSkill" value="Add Skill" class="btn btn-primary" />
                            <input type="button" id="btRemoveSkill" value="Remove Skill" class="btn btn-danger" />
                            <input type="button" id="btRemoveAllSkill" value="Remove all Skills" class="btn btn-danger" /><br />
                        </div>
                    </div>


                    <!-- Submit Button -->
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2" style="padding-left: 0;">
                            {!! Form::submit('Submit', ['class' => 'btn btn-success'] ) !!}


                            {{link_to('create-cv/languages', $title = 'Languages', $attributes = ['class' => 'btn btn-primary','id' => 'edu', 'style'=>'float: right;'], $secure = null)}}



                        </div>
                    </div>

                </fieldset>

                {!! Form::close()  !!}


            </div>

        </div>

    </div>

@endsection
