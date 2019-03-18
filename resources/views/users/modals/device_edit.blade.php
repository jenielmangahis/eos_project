@foreach($devices as $device)
<div class="modal fade" id="EditModal{{ $device->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit {{$device->name }}</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">


    <form method="POST" action="{{ route('device.update',['id'=> $device->id]) }}" id="updateDevice{{ $device->id }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
    <label for="label-name" class="col-form-label">Name:</label>
        <input type="text" class="form-control form-control-user" id="name"  name="name"  placeholder="Enter Device Name/Hardware ID" value="{{ $device->name }}">
    </div>

    <div class="form-group">
    <label for="label-description" class="col-form-label">Description:</label>
        <input type="text" class="form-control form-control-user" id="description"  name="description" placeholder="Description" value="{{ $device->description }}">
    </div>

    <div class="form-group">
  <label for="sel1">Select Sensor Type : <small style="font-color:red;">Current({{ \Helper::SensorName($device->sensor_type_id) }}) </small></label>
  <select class="form-control" id="sel1" name="sensors_type">
    @foreach($sensors as $sensor)
    <option value="{{ $sensor->id }}">{{ $sensor->name}}</option>

    @endforeach
  </select>
</div>




    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <button class="btn btn-primary" onclick="event.preventDefault();document.getElementById('updateDevice{{ $device->id }}').submit();">Update</button>
    </div>
    </form>
  </div>
</div>
</div>

@endforeach