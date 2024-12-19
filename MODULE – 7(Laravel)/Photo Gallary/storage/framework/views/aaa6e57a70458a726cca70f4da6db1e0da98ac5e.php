<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 pt-5">
                <form action="<?php echo e(route('update',$student->id)); ?>" method="post" enctype="multipart/form-data">

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>

                    <div class="mb-3">
                        <label for="name" class="form-label">NAME</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($student->name); ?>">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">CHOSE FILE</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <div>
                            <img src="/images/<?php echo e($student->image); ?>" height="50px" alt="">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">ADDRESS</label>
                        <input type="textarea" class="form-control" id="address" name="address" value="<?php echo e($student->address); ?>">                    
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>            
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\LARAVEL\CRUD-PRACTICE_2\resources\views/students/edit.blade.php ENDPATH**/ ?>