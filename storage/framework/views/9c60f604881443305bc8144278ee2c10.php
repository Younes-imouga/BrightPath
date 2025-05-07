<?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <h2 class="text-3xl text-blue-500 font-bold mb-10 text-center">User Management</h2>
      <table class="w-[90%] mx-auto border-collapse bg-white shadow-lg rounded-lg overflow-hidden">
        <thead>
          <tr>
            <th class="border p-2">ID</th>
            <th class="border p-2">Name</th>
            <th class="border p-2">Email</th>
            <th class="border p-2">Role</th>
            <th class="border p-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td class="border p-2 text-center"><?php echo e($user->id); ?></td>
            <td class="border p-2 text-center"><?php echo e($user->username); ?></td>
            <td class="border p-2 text-center"><?php echo e($user->email); ?></td>
            <td class="border p-2 text-center">
              <?php if($user->id !== 1): ?>
              <form action="<?php echo e(route('admin.updateRole', $user->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <select name="role" class="border rounded p-1">
                  <option value="admin" <?php echo e($user->role === 'admin' ? 'selected' : ''); ?>>Admin</option>
                  <option value="agent" <?php echo e($user->role === 'agent' ? 'selected' : ''); ?>>Agent</option>
                  <option value="user" <?php echo e($user->role === 'user' ? 'selected' : ''); ?>>User</option>
                </select>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Update</button>
              </form>
              <?php else: ?>
              <div class="my-2">
                <span class="text-gray-900 bg-gray-300 py-1 px-2 shadow-md rounded-3xl">Cannot change role of Owner</span>
              </div>
              <?php endif; ?>
            </td>
            <td class="border p-2 text-center">
              <?php if($user->role !== 'admin'): ?>
                <?php if($user->is_banned): ?>
                  <form action="<?php echo e(route('admin.unbanUser', $user->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Unban</button>
                  </form>
                <?php else: ?>
                <form action="<?php echo e(route('admin.banUser', $user->id)); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                  <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Ban</button>
                </form>
                <?php endif; ?>
              <?php else: ?>
                <span class="text-gray-900 bg-gray-300 py-1 px-2 shadow-md  rounded-3xl">Cannot ban admins</span>
              <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </section>
  </main>
</body><?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/admin/users.blade.php ENDPATH**/ ?>