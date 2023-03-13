@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
               <h3>EDIT DEPARTMENT
                <a href="{{url('admin/department')}}" class="btn btn-danger btn-sm text-white float-end">BACK</a>
               </h3>
            </div>
            <div class="card-body">

            @if($errors->any())
            <div class ="alert alert-warning">
                @foreach($errors->all() as $error)
                <div>{{ $error}}</div>
                @endforeach
            </div>
            @endif

                <form action=" {{url('admin/department/'.$department->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                        Home
                        </button>
                    </li>
                </ul>

                   <div class="tab-content" id="myTabContent">


                  <div class="mb-3">
                    <label >Directory</label>
                    <select name="directory_id" class ="form-control">
                        @foreach($directories as $directory)
                        <option value="{{$directory->id}}"{{ $directory->id == $department->directory_id ?'selected':''}}>
                            {{ $directory->name }}
                        </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                     <label>Department</label>
                        <input type ="text" name ="name" value="{{$department->name}}" class ="form-control"/>

                  </div>
                  <div class="mb-3">
                    <label >Extension</label>
                    <select name="extension" class ="form-control">
                        @foreach($extensions as $extension)
                        <option value="{{$extension->extension}}"{{ $extension->extension == $department->extension ?'selected':''}}>
                            {{ $extension->extension }}
                        </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="col-mb-6 mb-3">
                    <label>Status</label><br/>
                <input type="checkbox" name="status" {{$department->status == '1' ? 'checked' :''}}/>
                </div>
                  <div>
                    <button type ="submit"class = "btn btn-primary">Update</button>
                  </div>
                </form>

            </div>

            </div>
        </div>


@endsection
