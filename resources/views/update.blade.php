@extends('layout')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Update
    </div>

    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('customers.update', $customer->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $customer->name }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $customer->email }}" />
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" name="phone" value="{{ $customer->phone }}" />
            </div>
            <div class="form-group">
                <label for="place">Phone</label>
                <input type="tel" class="form-control" name="place" value="{{ $customer->place }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Update</button>
        </form>
    </div>
</div>
@endsection