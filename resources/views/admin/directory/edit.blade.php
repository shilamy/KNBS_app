@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
               <h3>Edit Directory

                <a href="{{ url('admin/directory') }}" class="btn btn-danger btn-sm text-white float-end">BACK</a>

               </h3>
            </div>
            <div class="card-body">
     <form action="{{ url('admin/directory/'.$directory->id) }}" method="POST">
        @csrf
@method('PUT')

        <div class="row">
        <div class="col-mb-6 mb-3">
            <label>Name</label>
        <input type="text" name="name" value="{{$directory->name}}" class="form-control"/>
        @error('name') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="col-mb-6 mb-3">
            <label>Department</label>
        <input type="text" name="department" value="{{$directory->department}}" class="form-control"/>
        @error('department') <small class="text-danger">{{$message}}</small> @enderror

        </div>
        <div class="col-mb-6 mb-3">
            <label>Status</label><br/>
        <input type="checkbox" name="status" {{$directory->status == '1' ? 'checked':''}}/>
        </div>
        <div class="col-mb-6 mb-3">
            <label>Extension</label>
        <input type="text" name="extension"value="{{$directory->extension}}"class="form-control"/>
        @error('extension')<small class="text-danger">{{$message}}</small> @enderror

        </div>
        <div class="col-mb-6 mb-3">
            <label>Floor</label>
        <input type="text" name="floor" value="{{$directory->floor}}"class="form-control"/>
        @error('floor')<small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="col-mb-6 mb-3">
            <button type="submit" class="btn btn-primary float-end">Update</button>
        </div>

    </div>
     </form>

            </div>
        </div>


@endsection
