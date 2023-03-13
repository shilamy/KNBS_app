@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
               <h3>Add Directory
                <a href="{{url('admin/directory')}}" class="btn btn-primary btn-sm text-white float-end">BACK</a>
               </h3>
            </div>
            <div class="card-body">
     <form action="{{url('admin/directory')}}" method="POST">
        @csrf

        <div class="row">
        <div class="col-mb-6 mb-3">
            <label>Name</label>
        <input type="text" name="name"class="form-control"/>
        @error('name') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="col-mb-6 mb-3">
            <label>Department</label>
        <input type="text" name="department"class="form-control"/>
        @error('department') <small class="text-danger">{{$message}}</small> @enderror

        </div>
        <div class="col-mb-6 mb-3">
            <label>Status</label><br/>
        <input type="checkbox" name="status"/>
        </div>
        <div class="col-mb-6 mb-3">
            <label>Extension</label>
        <input type="text" name="extension"class="form-control"/>
        @error('extension')<small class="text-danger">{{$message}}</small> @enderror

        </div>
        <div class="col-mb-6 mb-3">
            <label>Floor</label>
        <input type="text" name="floor"class="form-control"/>
        @error('floor')<small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="col-mb-6 mb-3">
            <button type="submit" class="btn btn-primary float-end">Save</button>
        </div>

    </div>
     </form>

            </div>
        </div>


@endsection
