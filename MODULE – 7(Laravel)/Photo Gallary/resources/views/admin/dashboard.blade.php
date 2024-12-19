@extends('admin.master');
@section('content')

@if (session('content'))

  <?php
    echo "<script>alert('" . session('content') . "')</script>";
  ?>

@endif
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card corona-gradient-card">
          <div class="card-body py-0 px-0 px-sm-3">
            <div class="row align-items-center">

              <h3>Add Photos</h3>

            </div>
          </div>
        </div>
      </div>
      <form class="row g-3" action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
          <label for="name" class="form-label">Chose Pic</label>
          <input type="file" class="form-control" id="file" name="file">
        </div>



        <div class="col-12">
          <button type="submit" class="btn btn-primary" name="submit">Add Pic</button>
        </div>

      </form>

      <div>

      </div>
    </div>
  </div>
</div>

</body>

</html>

@endsection