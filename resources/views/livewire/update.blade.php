    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="updateStudentModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                  <input type="hidden" name="id" id="" wire:model='ids'>
                  <div class="form-group">
                      <label for="firstname">First Name</label>
                      <input type="text" name="firstname" id="" class="form-control" wire:model="firstname">
                      @error('firstname') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="" class="form-control" wire:model="lastname">
                    @error('lastname') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="" class="form-control" wire:model="email">
                    @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="" class="form-control" wire:model="phone">
                    @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" wire:click.prevent="update()">Update Student</button>
            </div>
          </div>
        </div>
      </div>