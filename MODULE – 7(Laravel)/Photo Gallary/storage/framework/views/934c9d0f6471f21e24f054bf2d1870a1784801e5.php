;
<?php $__env->startSection('content'); ?>

<?php if(session('content')): ?>

  <?php
    echo "<script>alert('" . session('content') . "')</script>";
  ?>

<?php endif; ?>
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
      <form class="row g-3" action="<?php echo e(route('store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ASSIGNMENT\MODULE – 7(Laravel)\Photo Gallery 2\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>