@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">communities</div>

                <div class="card-body">
                    @if (count($communities)===0)
                    <p>there are no communities!</p>
                    @else
                    <table id="table-communities" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Street</th>
                        </thead>
                            <tbody>
                                @foreach ($communities as $community)
                                <tr data-id="{{$community->id }}">
                                    <td>{{$community->name }}</td>
                                    <td>{{$community->street }}</td>
                                    <td>
                                        <a href="{{ route('user.communities.show', $community->id) }}" class="btn btn-primary">View</a>
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