@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="container">

                            <a href="{{url('/create-cv')}}" class="btn btn-outline-success">Create your CV</a>

                        </div>
                    </div>
                </div>


            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card" style="margin-top: 10px">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-header">My resume's</div>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>

                                            <td>Title</td>
                                            <td>Name</td>

                                            <td colspan = 3>Actions</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($person as $p)
                                            <tr>
                                                <td>{{$p->title}}</td>
                                                <td>{{$p->name}}</td>
                                                <td>
                                                    <a href="{{ route('person.edit',$p)}}" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('show.cv',$p)}}" class="btn btn-success" target="_blank">Show Resume</a>
                                                </td>

                                                <td>
                                                    <form action="{{ route('person.delete',$p->id)}}" method="get">

                                                        <button class="btn btn-danger" type="submit">Delete Resume</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
