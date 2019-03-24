@extends('layouts.global')

@section('title')
    Edit User
@endsection

@section('content')
<div class="col-md-8">
        @if(session('status'))
            <div class="alert alert-success">
            {{session('status')}}
            </div>
        @endif
        <form 
            action="" method="post" enctype="multipart/form-data" class="bg-white shadow-sm p-3">
            @csrf
            <label for="name">Name</label>
            <input type="text" value="{{$user->name}}" class="form-control" placeholder="name" name="name" id="name"><br>
    
            <label for="username">Username</label>
            <input type="text" value="{{$user->username}}" class="form-control" placeholder="username" name="username" id="username"><br>
    
            <label for="">Roles</label>
            
            <input type="checkbox"
            {{in_array("ADMIN", json_decode($user->roles)) ? "checked" : ""}}
            name="roles[]" id="ADMIN" value="ADMIN">
            <label for="ADMIN">ADMIN</label>
    
            <input type="checkbox"
            {{in_array("STAFF", json_decode($user->roles)) ? "checked" : ""}}
            name="roles[]" id="STAFF" value="STAFF">
            <label for="STAFF">STAFF</label>
    
            <input type="checkbox"
            {{in_array("CUSTOMER", json_decode($user->roles)) ? "checked" : ""}}
            name="roles[]" id="CUSTOMER" value="CUSTOMER">
            <label for="CUSTOMER">CUSTOMER</label><br><br>
    
            <label for="phone">Phone Number</label>
            <br>
            <input type="text" value="{{$user->phone}}" name="phone" class="form-control"><br>
    
            <label for="address">Address</label><br>
            <textarea name="address"  id="address" class="form-control">{{$user->address}}</textarea><br>
    
            <label for="avatar">Avatar Image</label><br>
            Current avatar: <br>
            @if($user->avatar)
            <img
            src="{{asset('storage/'.$user->avatar)}}"
            width="120px" />
            <br>
            @else
            No avatar
            @endif
            <br>
            <input type="file" name="avatar" id="avatar" class="form-control">
            <hr class="my-3">
    
            <label for="email">Email</label><br>
            <input type="text" value="{{$user->email}}" name="email" id="email" class="form-control" placeholder="user@mail.com"><br>
    
            <label for="password">Password</label><br>
            <input type="password" value="{{$user->password}} name="password" id="password" class="form-control" placeholder="password" ><br>
            
            <label for="password_confirmation">Password Confirmation</label><br>
            <input type="password" value="{{$user->password}} name="password_confirmation" id="password_confirmation" class="form-control"><br>
            
            <input type="submit" value="save" class="btn btn-primary">
        </form>
    </div>
@endsection