<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Add Zone?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">



    @foreach($house as $h)
    <form method="POST" action="{{route('zones.store',['house_id'=> $h->id]) }}" id="addZone">
    @endforeach
    {{ csrf_field() }}
    <div class="form-group">
    <label for="label-name" class="col-form-label">Name:</label>
        <input type="text" class="form-control form-control-user" id="name"  name="name"  placeholder="Zone name">
    </div>

    <div class="form-group">
    <label for="label-description" class="col-form-label">Description:</label>
        <input type="text" class="form-control form-control-user" id="description"  name="description" placeholder="Zone Description">
    </div>




    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <button class="btn btn-primary" onclick="event.preventDefault();document.getElementById('addZone').submit();">Save changes</button>
    </div>
    </form>
  </div>
</div>
</div>