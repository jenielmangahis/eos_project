@foreach($houses as $house)
<div class="modal fade" id="EditModal{{ $house->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit {{$house->name }}</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">


    <form method="POST" action="{{ route('houses.update',['id'=> $house->id]) }}" id="updateHouse{{ $house->id }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
    <label for="label-name" class="col-form-label">Name:</label>
        <input type="text" class="form-control form-control-user" id="name"  name="name"  placeholder="House name" value="{{ $house->name }}">
    </div>

    <div class="form-group">
    <label for="label-description" class="col-form-label">Description:</label>
        <input type="text" class="form-control form-control-user" id="description"  name="description" placeholder="Description" value="{{ $house->description }}">
    </div>

    <div class="form-group">
    <label for="label-location" class="col-form-label">Location:</label>
        <input type="text" class="form-control form-control-user" id="location"  name="location"  placeholder="Location" value="{{ $house->location }}">
    </div>


    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <button class="btn btn-primary" onclick="event.preventDefault();document.getElementById('updateHouse{{ $house->id }}').submit();">Update</button>
    </div>
    </form>
  </div>
</div>
</div>

@endforeach