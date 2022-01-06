@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
           
                <div class="card-header">Data Company</div>
                <div class="row">
                    <div class="col-2">
                       <a href="{{url('addemployees')}}"> <button type="button" class="btn btn-primary">Add Data</button></a>
                    </div>
                    
                    <div class="col-4">
                    <form action="{{ url('importexcel') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="file" name="file" class="form-control">
                    </div>
                    <div class="col-2">
                    
                      
                            <button class="btn btn-success">Import Data</button>
                     
                    </form>
                    </div>
                    
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Karyawan</th>
      <th scope="col">Nama Perusahaan</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @foreach($employees as $key =>$value)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$value->employees_name}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->employees_email}}</td>
      <td>
        <a href="{{url('editemployees/'.$value->employees_id)}}"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>edit</button></a>
        <a href="{{url('deleteemployees/'.$value->employees_id)}}"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>delete</button></a>
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
<div class="d-flex justify-content-center">
            {!! $employees->links() !!}
    </div>
@endsection
