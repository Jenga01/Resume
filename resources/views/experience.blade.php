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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

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





            <form action="/upload/experience" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">

                    <label for="person">Person</label>
                    @foreach($jevbogd as $jb)
                    <select name="personid">
                        <option value="{{$jb ->id}}">{{$jb->name}}</option>
                        @endforeach
                    </select>

                    <label for="position">Position</label>

                    <input type="text" name="position" class="form-control"  placeholder="Position name" >

                    <label for="workplace">Workplace</label>

                    <input type="text" name="workplace" class="form-control"  placeholder="Workplace" >

                    <label for="period">Period</label>

                    <input type="text" name="period" value="" />

                    <script>
                        $(function() {
                            $('input[name="period"]').daterangepicker({
                                opens: 'left'
                            }, function(start, end, label) {
                                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                            });
                        });
                    </script>

                   <p> <label for="responsibilities">Responsibilities</label>

                    <input type="textarea" name="responsibilities" class="form-control">
                   </p>
                    <label for="Tools">Used tools</label>

                    <input type="textarea" name="stack" class="form-control"  placeholder="Used tools" >


                </div>


                <input type="submit" class="btn btn-primary" value="Upload" />

            </form>



        </div>

    </div>

</div>

</body>

</html>
