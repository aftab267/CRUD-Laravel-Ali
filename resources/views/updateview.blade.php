@extends('welcome')
@section('content')
<div class="col-md-4 m-auto border mt-3 p-2 border-info" >
    <h2 class="text-center text-warning">Update View</h2>
  <form action="updatedata" method="GET">
      <div class="mb-2">
        <label for="">Product Name</label>
        <input type="text" name="name" value="{{$pname }}" id="" class="form-control">
      </div>
      <div class="mb-2">
        <label for="">Product Price</label>
        <input type="text" name="price" value="{{$pprice}}" id="" class="form-control">
      </div>
      <br>
      <input type="hidden" name="id" value="{{$pid}}">
      <button type="submit" class="btn btn-outline-warning rounded-pill">Update</button>



  </form>

</div>

@endsection
