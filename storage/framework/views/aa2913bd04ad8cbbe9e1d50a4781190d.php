<?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <div class="bg-white rounded-lg shadow p-8 text-center mb-8 flex items-around justify-between px-10">
        <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Course Management</h2>
        <a href="<?php echo e(route('admin.createCourse')); ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add New Course</a>
      </div>  
      <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="bg-white rounded-lg shadow p-6 flex items-center justify-between mb-6">
        <div>        
          <h3 class="text-xl text-blue-500 font-semibold">
            <a href="<?php echo e(route('admin.showCourse', $course->id)); ?>" class="hover:underline"><?php echo e($course->name); ?></a>
          </h3>
          <p class="text-gray-600">Finish Score: <?php echo e($course->score); ?></p>
        </div>
        <div class="mt-4">
          <a href="<?php echo e(route('admin.editCourse', $course->id)); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
          <form action="<?php echo e(route('admin.deleteCourse', $course->id)); ?>" method="POST" style="display:inline;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
          </form>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
  </main>
</body><?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/admin/courses.blade.php ENDPATH**/ ?>