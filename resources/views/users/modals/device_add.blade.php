<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Add Device?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">



   
    <form  id="addDevices" method="POST" action="{{route('device.store') }}">

    {{ csrf_field() }}
    <input type="hidden" name="zone_id" value="{{ Request::segment(3) }}">

    <div class="form-group">
    <label for="label-name" class="col-form-label">Device Name/Hardware ID:</label>
        <input type="text" class="form-control form-control-user" id="name"  name="name"  placeholder="Enter Device Name/Hardware ID:">
    </div>

    <div class="form-group">
    <label for="label-description" class="col-form-label">Description:</label>
        <input type="text" class="form-control form-control-user" id="description"  name="description" placeholder="Enter Device Description">
    </div>

  

  <div class="form-group">
  <label for="sel1">Select Sensor Type :</label>
  <select class="form-control" id="sel1" name="sensors_type">
    @foreach($sensors as $sensor)
    <option value="{{ $sensor->id }}">{{ $sensor->name}}</option>

    @endforeach
  </select>
</div>




    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <button class="btn btn-primary" onclick="event.preventDefault();document.getElementById('addDevices').submit();">Add Device</button>
    </div>
    </form>
  </div>
</div>
</div>