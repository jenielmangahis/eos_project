<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Add House?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">


    <form method="POST" action="{{ route('houses.store') }}" id="addHouse">
    {{ csrf_field() }}
    <div class="form-group">
    <label for="label-name" class="col-form-label">Name:</label>
        <input type="text" class="form-control form-control-user" id="name"  name="name"  placeholder="House name">
    </div>

    <div class="form-group">
    <label for="label-description" class="col-form-label">Description:</label>
        <input type="text" class="form-control form-control-user" id="description"  name="description" placeholder="Description">
    </div>

    <div class="form-group">
    <label for="label-location" class="col-form-label">Location:</label>
        <input type="text" class="form-control form-control-user" id="location"  name="location"  placeholder="Location">
    </div>


    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <button class="btn btn-primary" onclick="event.preventDefault();document.getElementById('addHouse').submit();">Save changes</button>
    </div>
    </form>
  </div>
</div>
</div>