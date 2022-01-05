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
        <form action="{{url('createcompany')}}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
            </div>

            <div class="form-group">
                <label>Logo</label>
                <input type="text" name="logo" class="form-control" placeholder="Logo">
                
            </div>

            <div class="form-group">
                <label>Nama Website</label>
                <input type="text" name="website" class="form-control" placeholder="Nama Website">
            </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection