@extends('layouts.global')

@section('title')
    Usert List
@endsection

@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th><b>Name</b></th>
            <th><b>Username</b></th>
            <th><b>Email</b></th>
            <th><b>Avatar</b></th>
            <th><b>Action</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->username}}</td>        
                <td>{{$item->email}}</td>
                <td>
                    @if ($item->avatar)
                        <img src="{{asset('storage/'.$item->avatar)}}" width="70px">
                    @else
                        N/A
                    @endif
                </td>
                <td>
                <a href="{{route('users.edit',['id' => $item->id])}}" class="btn btn-info text-white btn-sm">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection