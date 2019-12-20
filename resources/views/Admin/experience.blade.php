
@extends('layouts.app')

@section('content')

@if(session()->has('alert-success'))
    <div class="alert alert-success">
        {{ session()->get('alert-success') }}
    </div>
@endif

<style>
    #edu{
        float: right;
    }
</style>

<div class="container">

    <div class="row">


    </div>

    <br>

    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6">


            <form action="" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">


                    <label for="position">Position</label>

                    <input type="text" name="position" class="form-control"  placeholder="Position name" >

                    <label for="workplace">Workplace</label>

                    <input type="text" name="workplace" class="form-control"  placeholder="Workplace" >

                    <label for="period">Period</label>

                    <input type="text" name="period" value="" />


                   <p> <label for="responsibilities">Responsibilities</label>

                    <input type="textarea" name="responsibilities" class="form-control">
                   </p>
                    <label for="Tools">Used tools</label>

                    <input type="textarea" name="stack" class="form-control"  placeholder="Used tools" >


                </div>

                <input type="submit" class="btn btn-outline-success" value="Save" />

                <button type="button" id="edu" class="btn btn-outline-primary">Education</button>

            </form>


        </div>

    </div>

</div>

@endsection