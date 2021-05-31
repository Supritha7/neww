@extends('layout')

@section('content')

<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <h1 style="text-align:center">User Details</h1>
  <a style="float:right" href="http://127.0.0.1:8000/home"><button class="btn btn-primary">New User</button></a><br>
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>S No.</td>
          <td>Name</td>
          <td>Contact Info</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usermaster as $usermaster)
        <tr>
            <td>{{$usermaster->id}}</td>
            <td>{{$usermaster->name}}</td>
            <td>{{$usermaster->phone}}</td>
            <td class="text-center">
                
                <form action="{{ route('usermasters.destroy', $usermaster->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-warning btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
