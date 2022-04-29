@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Community: {{ $communities->name }}
                </div>

                <div class="card-body">
                    <table id="table-communities" class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$communities->name }}</td>
                                </tr>
                                <tr>
                                    <td>Street</td>
                                    <td>{{$communities->street }}</td>
                                </tr>
                                <tr>
                                    <td>Manager</td>
                                    <td>{{$communities->manager_name }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>{{$communities->phone_number }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('admin.communities.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection