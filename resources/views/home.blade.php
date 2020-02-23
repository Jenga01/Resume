@extends('layouts.app')
@extends('person.delete')

@section('notification-bell')



    <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="badge badge-danger ml-2">
        {{$notifications->count() + $nullUser->count()}}
            </span>
            <i class="fas fa-bell"></i>
        </a>

        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">

            <div class="col-md-12">

            @foreach($notifications as $note)

                @if($note->avatar != null)
                    <p><img src="{{$note->avatar}}" width="40px" style="border-radius: 50%;">
                        @endif
                        {{$note->name}} checked your {{$note->title}} resume at {{$note->updated_at}}</p>

                @endforeach

                        @if($nullUser->count() >0)
                            <div class="col-md-12">
                                <h4>Guest visitors</h4>
                                <div class="h-divider">
                                    <div class="shadow"></div>
                                </div>
                                @endif
                @foreach($nullUser as $us)

                    <p>{{$us->title}} resume {{str_replace('"', "", $us->data)}} at {{$us->updated_at}} </p>

                @endforeach
                </div>

                    @if($notifications->count() + $nullUser->count() >0)
          <p> <a href="{{route('mark.notifications')}}" id="read_notif">Mark as read</a></p>
                @else
                No new notifications
                @endif


            </div>
        </div>
    </li>


@endsection
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

                            <a href="{{url('/create-cv')}}" id="create-cv" class="btn btn-outline-success">Create resume</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container" id="resume-container">
                {{ csrf_field() }}
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
                                                    <a href="{{ route('person.edit',$p)}}" id="edit-resume" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('show.cv',$p)}}" id="show-resume" class="btn btn-success" target="_blank">Show Resume</a>
                                                </td>

                                                <td>

                                                        <button class="delete-modal-resume btn btn-danger" data-id="{{$p->id}}">

                                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                                        </button>

                                                </td>

                                            </tr>


                                        @endforeach
                                        </tbody>
                                    </table>
                                    @section('resume-delete')

                                        @endsection()



                                </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
@endsection

