<?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <div class="bg-white rounded-lg shadow p-8 text-center mb-8 flex items-around justify-between px-10">
        <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Category Management</h2>
        <a href="<?php echo e(route('admin.createCategory')); ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-4 px-4 rounded">Add New Category</a>
      </div>  
      <table class="w-[90%] mx-auto border-collapse bg-white shadow-lg rounded-lg overflow-hidden">
        <thead>
          <tr>
            <th class="border p-2">ID</th>
            <th class="border p-2">Name</th>
            <th class="border p-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td class="border p-2 text-center"><?php echo e($category->id); ?></td>
            <td class="border p-2 text-center"><?php echo e($category->name); ?></td>
            <td class="border p-2 text-center">
              <a href="<?php echo e(route('admin.editCategory', $category->id)); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
              <form action="<?php echo e(route('admin.deleteCategory', $category->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
              </form>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </section>
  </main>
</body> <?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/admin/categories.blade.php ENDPATH**/ ?>