@extends('admin.master')
@section('mainContent')
<h1> Add item </h1>
<hr>
{!!Form::open(['url'=>'/save-item','method'=>'POST','class'=>'form-horizontal'])!!}
  <div class="form-group">
    <label class="control-label col-sm-2" for="itemname">Item Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="itemname" placeholder="Enter item name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="itemdescription">Item Description</label>
    <div class="col-sm-10"> 
      <textarea class="form-control" id="itemdescription" placeholder="Enter Item Description" name="itemdescription"></textarea>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="selectitemtype">Select Item Time</label>
    <div class="col-sm-10">
      <select class="form-control" id="selectitemtype" name="selectitemtype">
      <option>Select Option</option>
      <option value='1'>Launch</option>
      <option value='0'>Dinner</option>
      <option></option>
      <option></option>
  </select>

    </div>
  </div>
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success btn-block">Submit</button>
    </div>
  </div>
{!!Form::close()!!}
@endsection