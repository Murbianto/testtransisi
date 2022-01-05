@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
           
                <div class="card-header">Edit Employees</div>
               
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <form action="{{url('updateemployees')}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="employeesid" value = "{{$employees->employees_id}}">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" value = "{{$employees->employees_name}}" class="form-control" placeholder="Nama">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" value = "{{$employees->employees_email}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
            </div>

          
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection