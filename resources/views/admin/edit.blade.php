@extends('layouts.master')

@section('title')
Register | Funda of web IT
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="class-header">
                    <h3>Edit</h3>
                </div>
                <div class="card-body">
                    <form action="/update/{{$users->id}}" method="POST">
                        {{csrf_field()}}
                        {{ method_field ('PUT') }}
    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control" name="username" value="{{$users->name}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Give role</label>
            <select class="form-control" name="usertype" >
              <option value="admin">Admin</option>
              <option value="vendor">Vendor</option>
              <option value="">None</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success">Update</button>
          <a href="/roleRegister" class="btn btn-danger">Cancel</a>
                    </form>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection