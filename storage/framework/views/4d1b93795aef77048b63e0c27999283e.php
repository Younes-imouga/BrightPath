<?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Add New Course</h2>
      <form action="<?php echo e(route('admin.storeCourse')); ?>" method="POST" class="bg-white rounded-lg shadow p-8 w-[50%] mt-4 mx-auto">
        
        <?php echo csrf_field(); ?>
        <div class="mb-4">
          <label for="title" class="block text-gray-700 mb-2">Course Title</label>
          <input type="text" name="title" id="title" required class="w-full p-3 border rounded" />
        </div>
        <div class="mb-4">
          <label for="description" class="block text-gray-700 mb-2">Course Description</label>
          <textarea name="description" id="description" rows="4" required class="w-full p-3 border rounded"></textarea>
        </div>
        <div class="mb-4">
          <label for="score" class="block text-gray-700 mb-2">Finishing Score</label>
          <input type="number" name="score" id="score" required class="w-full p-3 border rounded" />
        </div>
        <div class="mb-4">
          <label for="category_id" class="block text-gray-700 mb-2">Category</label>
          <select name="category" id="category" class="w-full p-3 border rounded mb-4">
            <option value="">Select Category</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <?php if($errors->any()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mt-4 p-3 bg-red-100 text-red-700 border border-red-300 rounded-md mb-4"><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <button type="submit" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
          Create Course
        </button>
      </form>
    </section>
  </main>
</div> <?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/admin/createCourse.blade.php ENDPATH**/ ?>