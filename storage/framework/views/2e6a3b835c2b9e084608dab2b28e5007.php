<?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8 bg-white p-8 rounded-lg shadow-lg">
      <h2 class="text-4xl text-blue-600 font-extrabold mb-6 text-center"><?php echo e($course->name); ?></h2>

      <div class="text-lg text-gray-700 space-y-2 mb-6 text-center">
        <p><?php echo e($course->description); ?></p>
        <p><span class="font-semibold text-gray-900">Finishing Score:</span> <?php echo e($course->score); ?></p>
      </div>

      <h3 class="text-2xl text-blue-500 font-bold mb-4 border-b border-blue-200 pb-2">Course Content</h3>

      <div class="space-y-6">
        <?php $__currentLoopData = $course->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="bg-gray-50 border border-gray-200 p-4 rounded-lg shadow-sm">
            <?php if($content->type === 'pdf'): ?>
              <h4 class="text-xl font-semibold text-gray-800 mb-2">PDF Document</h4>
              <iframe
                src="<?php echo e(asset('storage/' . $content->file)); ?>"
                class="w-full h-[750px] border rounded"
                frameborder="0">
              </iframe>
              <p class="text-sm text-gray-500 mt-2">
                <a href="<?php echo e(asset('storage/' . $content->file)); ?>" class="text-blue-500 hover:underline" target="_blank">Download PDF</a>
              </p>
            <?php elseif($content->type === 'youtube'): ?>
              <h4 class="text-xl font-semibold text-gray-800 mb-2">YouTube Video</h4>
              <div class="aspect-w-16 aspect-h-9">
                <iframe
                  src="<?php echo e($content->file); ?>"
                  class="w-full h-full rounded border"
                  frameborder="0"
                  allowfullscreen>
                </iframe>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

      <div class="mt-10 text-center flex justify-between">
        <a href="<?php echo e(route('student.courses')); ?>"
           class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
          ← Back to Courses
        </a>
        <a href="<?php echo e(route('student.quiz')); ?>"
           class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
          Take Quiz →
        </a>
      </div>
    </section>
  </main>
</body>
<?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/student/courseDetails.blade.php ENDPATH**/ ?>