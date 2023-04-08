@extends('layouts.admin')
@section('content')

<div>
    <div class="row">
        <div class="col-md-12 ">
            @if(session('message'))
            <div class = 'alert alert-success'>{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                   <h3>DEPARTMENT
                    <a href="{{url('admin/department/create')}}" class="btn btn-primary btn-sm text-white float-end">Add Department</a>
                   </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Directory</th>
                                <th>Extension</th>
                                <th>Department</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($department as $department)
                            <tr>
                                <td>{{$department->id}}</td>
                                <td>
                                    @if($department->directory)
                                    {{$department->directory->name}}
                                    @else
                                        No Directory
                                    @endif
                                </td>
                                <td>{{$department->name}}</td>
                                <td>{{$department->extension}}</td>
                                <td>{{$department->status =='1'? 'Hidden':'Visible'}}</td>
                                <td>
                                    <a href ="{{url('admin/department/'.$department->id.'/edit') }}" class="btn btn sm btn-success">Edit</a>
                                    <a href ="{{url('admin/department/'.$department->id.'/delete')}}" onclick="return confirm('Are you sure you want to delete this data?')" class="btn btn sm btn-danger">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan ="6">No Department Available</td>
                            </tr>
                            @endforelse

                        </tbody>

                    </table>

                      </div>

</div>
</div>
</div>
</div>

@endsection
