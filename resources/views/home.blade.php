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
                                    <h1 class="display-5">My CV's</h1>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Title</td>
                                            <td>Name</td>

                                            <td colspan = 2>Actions</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($person as $p)
                                            <tr>
                                                <td>{{$p->id}}</td>
                                                <td>{{$p->title}}</td>
                                                <td>{{$p->name}}</td>
                                                <td>
                                                    <a href="{{ route('person.edit',$p)}}" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td>
                                                    {{--                                                <form action="{{ route('person.destroy', $p->id)}}" method="post">--}}
                                                    {{--                                                    @csrf--}}
                                                    {{--                                                    @method('DELETE')--}}
                                                    {{--                                                    <button class="btn btn-danger" type="submit">Delete</button>--}}
                                                    {{--                                                </form>--}}
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
@endsection
