@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    community: {{ $community->name }}
                </div>

                <div class="card-body">
                    <table id="table-communities" class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$community->name }}</td>
                                </tr>
                                <tr>
                                    <td>Street</td>
                                    <td>{{$community->street }}</td>
                                </tr>
                                <tr>
                                    <td>Manager</td>
                                    <td>{{$community->manager_name }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>{{$community->phone_number }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('user.communities.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection