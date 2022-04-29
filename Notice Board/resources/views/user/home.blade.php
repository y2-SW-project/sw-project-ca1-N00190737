@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="display-5 text-center mt-5">You are logged in as an Ordinary User!</div>
                   
                   <a href= 'http://127.0.0.1:8000/user/communities' type="button" class="btn btn-primary mt-5 me-auto btn-lg">All Communities</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

