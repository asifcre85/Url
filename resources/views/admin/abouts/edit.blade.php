@extends('layouts.master')

@section('title')
Abouts Edit | Funda of web IT
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
                    <form action="{{ url('update2/'.$abouts->id) }}" method="POST">
                        {{csrf_field()}}
                        {{ method_field ('PUT') }}
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" name="title" value="{{$abouts->title}}">
                          </div>
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Sub-title:</label>
                            <input type="text" name="subtitle" class="form-control" value="{{$abouts->subtitle}}">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" name="description" >{{$abouts->description}}</textarea>
                          </div>
          <button type="submit" class="btn btn-success">Update</button>
          <a href="/abouts" class="btn btn-danger">Cancel</a>
                    </form>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection