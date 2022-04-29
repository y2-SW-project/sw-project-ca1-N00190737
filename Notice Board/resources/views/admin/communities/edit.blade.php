@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Edit communities
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif


            <form method="POST" action="{{ route('admin.communities.update', $community->id)}}">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <input type="hidden" name="_method" value="PUT">

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('title', $community->name) }}" />
              </div>
              <div class="form-group">
                <label for="street">Street</label>
                <input type="text" class="form-control" id="street" name="street" value="{{ old('street', $community->street) }}" />
              </div>
              <div class="form-group">
                <label for="manager_name">Manager</label>
                <input type="text" class="form-control" id="manager_name" name="manager_name" value="{{ old('manager_name', $community->manager_name) }}" />
              </div>
              <div class="form-group">
                <label for="phone_number">Phone</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone', $community->phone_number) }}" />
              </div>
              <a href="{{ route('admin.communities.index') }}" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection