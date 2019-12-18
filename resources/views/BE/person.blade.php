
@extends('layouts.app')

@section('content')

@if(session()->has('alert-success'))
    <div class="alert alert-success">
        {{ session()->get('alert-success') }}
    </div>
@endif



<div class="container">

    <div class="row">

    </div>

    <br>

    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6">

            <form action="/create-cv" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">

                    <label for="Name">Name</label>

                    <input type="text" name="name" class="form-control"  placeholder="Fullname" >

                    <label for="E-mail">E-mail</label>

                    <input type="text" name="email" class="form-control"  placeholder="E-mail" >

                    <label for="Phone">Phone</label>

                    <input type="text" name="phone" class="form-control"  placeholder="Phone number" >

                    <label for="Date">Birthday</label>

                    <input type="date" name="birthday" class="form-control">

                    <label for="Location">Location</label>

                    <input type="text" name="location" class="form-control"  placeholder="Location" >

                    <label for="Linkedin">Linkedin</label>

                    <input type="url" name="linkedin" class="form-control"  placeholder="Linkedin url" >


                </div>

                <label for="Product Name">Your photo:</label>

                <br />

                <input type="file" class="form-control" name="image" />

                <br /><br />

                <input type="submit" class="btn btn-outline-success" value="Save" />

            </form>

        </div>

    </div>

</div>

@endsection
