@extends('layouts.master')

@section('title')
Register | Funda of web IT
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Register Table</h4>
        </div>
        <div class="card-body">
          
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

           
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Name
                </th>
                <th>
                  Phone
                </th>
                <th>
                  Email
                </th>
                <th>
                    Usertype
                  </th>
                <th >
                  Edit
                </th>
                <th >
                    Delete
                  </th>
              </thead>
              <tbody>
                  @foreach ($users as $a)
                 
                <tr>
                  <td>
                   {{$a->name}}
                  </td>
                  <td>
                    {{$a->phone}}
                  </td>
                  <td>
                    {{$a->email}}
                  </td>
                  <td>
                    {{$a->usertype}}
                  </td>
                  <td >
                  <a href="/edit/{{ $a->id }}" class="btn btn-success"> Edit</a>
                  </td>
                  <td >
                    <form action="/delete/{{ $a->id }}" method="post">
                      {{csrf_field()}}
                        {{ method_field ('DELETE') }}
                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger"> Delete</button>
                    </form>
                   </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection

@section('scripts')
@endsection