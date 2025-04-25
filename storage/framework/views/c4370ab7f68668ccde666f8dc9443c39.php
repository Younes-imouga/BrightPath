<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath - Courses Catalog</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Available Courses</h2>
      <?php if($courses->isEmpty()): ?>
        <p class="text-gray-600 text-center">No courses available at the moment.</p>
      <?php else: ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="bg-white rounded-lg shadow p-6 text-center">
            <h3 class="text-xl text-blue-500 font-semibold"><?php echo e($course->name); ?></h3>
            <p class="text-gray-600 mb-2"><?php echo e($course->description); ?></p>
            <p class="text-gray-600 mb-2">score: <?php echo e($course->score); ?> Pt</p>
            <a href="<?php echo e(route('student.showCourse', $course->id)); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              View Course
            </a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endif; ?>
    </section>
  </main>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/student/courses.blade.php ENDPATH**/ ?>