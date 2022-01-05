@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
           
                <div class="card-header">Add Company</div>
               
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <form action="{{url('createemployees')}}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="employeesname" class="form-control" placeholder="Nama">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
            </div>
            <div class="form-group">
            <label>Nama Perusahaan</label></br>
            <select id="dropdown" name="company">
                @foreach($company as $key =>$value)
                <option value="{{$value->companies_id}}">{{$value->name}}</option>
                @endforeach
              
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection