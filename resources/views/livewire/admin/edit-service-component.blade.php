<div>
    <style>
        .card {
         height: auto !important;
     }



         </style>
    <div class="col-md-12">
        <div class="card" style="height: 970.688px;">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Category Info</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <form class="form" wire:submit="edit_service" >
                <div class="form-body">
                  <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Name Service</label>
                        <input type="text" id="projectinput1" class="form-control" placeholder="name service" name="fname" wire:model="name_service">
                      </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="projectinput1">icon</label>
                          <input type="text" id="projectinput1" class="form-control" placeholder="name service" name="fname" wire:model="icon">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="projectinput1">Tag</label>
                          <input type="text" id="projectinput1" class="form-control" placeholder="name service" name="fname" wire:model="tag">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="projectinput1">small descripation</label>
                          <input type="text" id="projectinput1" class="form-control" placeholder="name service" name="fname" wire:model="small_desc">
                        </div>
                      </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput2"> desc 1</label>
                        <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname" wire:model="desc1">
                      </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="projectinput2"> desc 2</label>
                          <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname" wire:model="desc2">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="photoInput">Photo</label>
                            <input type="file" id="photoInput" class="form-control" wire:model="newphoto">
                            @if($this->photo)
                                <img  src="{{ asset('user/photos/' . $this->photo) }}" width="250" height="300">
                            @endif
                            @if($this->newphoto)
                            <img src="{{ $this->newphoto->temporaryUrl() }}" width="250" height="300">
                             @endif

                        </div>
                    </div>
                  </div>

                <div class="form-actions">
                  <button type="button" class="btn btn-warning mr-1">
                    <i class="ft-x"></i> Cancel
                  </button>
                  <button type="submit" class="btn btn-primary">
                    <i class="la la-check-square-o"></i> Save
                  </button>
                </div>
              </form>

            </div>




        </div>
            </div>
          </div>
        </div>
      </div>
</div>
