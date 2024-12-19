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
                <div>
                    <h3><a href="<?php echo e(route('students.create')); ?>" class="btn btn-success">ADD NEW</a></h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">AGE</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col">ADDRESS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $std; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($s->id); ?></td>
                            <td><?php echo e($s->name); ?></td>
                            <td><?php echo e($s->age); ?></td>
                            <td><img src="uploads/<?php echo e($s->image); ?>" height="50px" alt=""></td>
                            <td><?php echo e($s->address); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\LARAVEL\RESOURCE-CRUD-APP\resources\views/students/index.blade.php ENDPATH**/ ?>