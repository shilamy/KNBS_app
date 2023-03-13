    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="AddExtensionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Extensions</h1>
              <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="storeExtension">
                <div class="modal-body">
                    <div class="mb-3">
                       <label>Extension </label>
                       <input type="text" wire:model.defer="extension" class="form-control">
                       @error('extension') <small class="text-danger">{{$message }} </small>@enderror
                    </div>
                    <div class="mb-3">
                        <label>Department</label>
                        <input type="text" wire:model.defer="department" class="form-control">
                        @error('department') <small class="text-danger">{{$message }} </small>@enderror

                     </div>
                     <div class="mb-3">
                        <label>UserName</label>
                        <input type="text" wire:model.defer="username" class="form-control">
                        @error('username') <small class="text-danger">{{$message }} </small>@enderror

                     </div>
                     <div class="mb-3">
                        <label>Status</label>
                        <input type="checkbox" wire:model.defer="status"/> Checked=Hidden, Un-Checked= Visible
                        @error('status') <small class="text-danger">{{$message }} </small>@enderror

                     </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button"  wire:click="closeModal"class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
            </form>

          </div>
        </div>
      </div>

          <!-- Extension Update Modal -->
    <div wire:ignore.self class="modal fade" id="updateExtensionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div  class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Update Extensions</h1>
              <button type="button" class="btn-close"  wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div wire:loading>
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>Loading...

            </div >
          <div wire:loading.remove >


            <form wire:submit.prevent="updateExtension">

                <div class="modal-body">
                    <div class="mb-3">
                       <label>Extension </label>
                       <input type="text" wire:model.defer="extension" class="form-control">
                       @error('extension') <small class="text-danger">{{$message }} </small>@enderror
                    </div>
                    <div class="mb-3">
                        <label>Department</label>
                        <input type="text" wire:model.defer="department" class="form-control">
                        @error('department') <small class="text-danger">{{$message }} </small>@enderror

                     </div>
                     <div class="mb-3">
                        <label>UserName</label>
                        <input type="text" wire:model.defer="username" class="form-control">
                        @error('username') <small class="text-danger">{{$message }} </small>@enderror

                     </div>
                     <div class="mb-3">
                        <label>Status</label>
                        <input type="checkbox" wire:model.defer="status" style="width:70px;height=70px"/> Checked=Hidden, Un-Checked= Visible
                        @error('status') <small class="text-danger">{{$message }} </small>@enderror

                     </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button"  wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
            </form>
        </div>

          </div>
        </div>
      </div>
      
      <!-- DELETE Modal -->
      <div wire:ignore.self class="modal fade" id="deleteExtensionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div  class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Extensions</h1>
              <button type="button" class="btn-close"  wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div wire:loading>
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>Loading...

            </div >
          <div wire:loading.remove >


            <form wire:submit.prevent="destroyExtension">

                <div class="modal-body">
                    <h4>Are you sure you want to delete this Data?</h4>
                </div>
                  <div class="modal-footer">
                    <button type="button"  wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes.Delete</button>
                  </div>
            </form>
        </div>

          </div>
        </div>
      </div>
