@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
           
                <div class="card-header">Data Company</div>
                <div class="row">
                    <div class="col-2">
                       <a href="{{url('addcompany')}}"> <button type="button" class="btn btn-primary">Add Data</button></a>
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
      <th scope="col">Nama Perusahaan</th>
      <th scope="col">Email</th>
      <th scope="col">Logo</th>
      <th scope="col">Website</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @foreach($company as $key =>$value)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$value->name}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->logo}}</td>
      <td>{{$value->website}}</td>
      <td>
        <a href="{{url('editcompany/'.$value->companies_id)}}"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>edit</button></a>
        <a href="{{url('deletecompany/'.$value->companies_id)}}"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>delete</button></a>
        <a href="{{url('employees/'.$value->companies_id)}}"><button class="btn btn-warning btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>Karyawan</button></a>

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
            {!! $company->links() !!}
    </div>
@endsection
