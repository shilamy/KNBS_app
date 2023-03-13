<div>
      @include('livewire.admin.extension.modal-form')

 <div class="row">
    <div class-"col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Extension List
                    <a href="#"data-bs-toggle="modal" data-bs-target="#AddExtensionModal"class="btn btn-primary btn-sm float-end">Add Exentions</a>
                </h4>
            </div>
           <div class="card-body">
            <table class="table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th>Id </th>
                        <th>Extension </th>
                        <th>Department</th>
                        <th>UserName</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($extensions as $extension)
                    <tr>

                            <td>{{$extension->id}}</td>
                            <td>{{$extension->extension}}</td>
                            <td>{{$extension->department}}</td>
                            <td>{{$extension->UserName}}</td>

                            <td>{{$extension->status == '1' ? 'hidden':'visible'}}</td>
                            <td>
                               <a href="#" wire:click="editExtension({{$extension->id}})" data-bs-toggle="modal" data-bs-target="#updateExtensionModal" class="btn btn-sm btn-success">Edit</a>
                               <a href="#" wire:click="deleteExtension({{$extension->id}})" data-bs-toggle="modal" data-bs-target="#deleteExtensionModal" class="btn btn-sm btn-danger">Delete</a>
                            </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">No Extensions Found</td>
                    </tr>

                    @endforelse

                </tbody>
            </table>
            <div>
                {{$extensions->links()}}
            </div>
           </div>
        </div>
    </div>
 </div>
</div>

@push('script')

<script>
    window.addEventListener('close-modal', event => {
    $('#addExtensionModal').modal('hide');
    $('#updateExtensionModal').modal('hide');
    $('#deleteExtensionModal').modal('hide');
    });
</script>

@endpush

