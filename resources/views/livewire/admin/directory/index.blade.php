<div>
    <div>
        <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Directory Delete</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyDirectory">

                <div class="modal-body">
                <h6>Are you sure you want to delete this item?</h6>
                </div>
                 <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Yes.Delete</button>
                </div>
                </form>

                     </div>
                     </div>
                    </div>


                <div class="row">
                    <div class="col-md-12 ">
                        @if(session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                        <div class="card">
                            <div class="card-hearder">
                            <h3>Directory
                                <a href="{{url('admin/directory/create')}}"class="btn btn-primary btn-sm float-end">Add Directory</a>
                            </h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($directories as $directory)
                                        <tr>
                                            <td>{{$directory->id}}</td>
                                            <td>{{$directory->name}}</td>
                                            <td>{{$directory->status == '1' ? 'Hidden':'visible'}}</td>
                                            <td> <a href="{{url('admin/directory/'.$directory->id.'/edit')}}" class="btn btn-success">Edit</a>
                                                    <a href="#"wire:click ="deleteDirectory({{$directory->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <div>
                                    {{$directories->links()}}
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
                {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
                 </div>
</div>

@push('script')
<script>
    window.addEventListener('close-modal', event => {
    $('#deleteModal').modal('hide');
    });
</script>

@endpush
