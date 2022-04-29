@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">communities</div>

                <div class="card-body">
                    @if (count($communities)===0)
                    <p>These aren't the communities your looking for!</p>
                    @else
                    <table id="table-communities" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Street</th>
                            <th>Manager Name</th>
                        </thead>
                            <div>
                                <a href="{{ route('admin.communities.create') }}" class="btn btn-primary justify-content-end">Add</a>
                            </div>
                            <tbody>
                                @foreach ($communities as $community)
                                <tr data-id="{{$community->id }}">
                                    <td>{{$community->name }}</td>
                                    <td>{{$community->street }}</td>
                                    <td>{{$community->manager_name }}</td>
                                    <td>
                                        <a href="{{ route('admin.communities.show', $community->id) }}" class="btn btn-default">View</a>
                                        <a href="{{ route('admin.communities.edit', $community->id) }}" class="btn btn-warning">Edit</a>
                                        <form style="display:inline-block" method="POST" action="{{ route('admin.communities.destroy', $community->id) }}">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token"  value="{{ csrf_token() }}">
                                          <button type="submit" class="form-cotrol btn btn-danger">Delete</a>
                                        </form>
                                      </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection