<!doctype html>

<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Uploading</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <style>

        .container {

            margin-top:2%;

        }

    </style>

</head>

<body>
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

            <form action="/upload" method="post" enctype="multipart/form-data">

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

                <input type="submit" class="btn btn-primary" value="Upload" />

            </form>

        </div>

    </div>

</div>

</body>

</html>
