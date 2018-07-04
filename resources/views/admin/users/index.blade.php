@extends('layouts.admin')
@section('content')
    <h1 class="page-header">Users</h1>
    @if(Session::has('deleted_user'))
        <p class="bg-danger">{{session('deleted_user')}}</p>
    @endif
    @if(Session::has('updated_user'))
        <p class="bg-info">{{session('updated_user')}}</p>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Created at</th>
            <th>Updated at</th>

        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}"
                             alt=""></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active':'No Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td><a href="{{url('admin/users/'.$user->id.'/edit')}}"><i class="fa fa-wrench fa-fw"
                                                                               style="font-size:36px"></i></a></td>
                    <td>
                        {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}
                        {!! Form::submit('X',['class'=>'btn btn-danger']) !!}
                        {{--<i class="fa fa-ban" style="font-size:36px"></i>--}}
                        {!! Form::close() !!}
                    </td>

                    {{--                    <td><a height="50" href="{{route('admin.users.edit',$user->id)}}"><i class="fa fa-wrench fa-fw"></i></a></td>--}}
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
