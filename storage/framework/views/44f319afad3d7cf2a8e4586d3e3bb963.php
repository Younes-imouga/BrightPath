<?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen flex flex-col text-gray-800">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-12">
      <h2 class="text-4xl text-blue-600 font-extrabold mb-10 text-center drop-shadow">Admin Dashboard</h2>
      <div class="grid md:grid-cols-3 gap-10">
        <div class="bg-white rounded-xl shadow-lg p-8 text-center border-l-4 border-blue-400">
          <h3 class="text-xl text-blue-500 font-semibold mb-2">Total Users</h3>
          <p class="text-3xl text-gray-700 font-bold">1200</p>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 text-center border-l-4 border-blue-400">
          <h3 class="text-xl text-blue-500 font-semibold mb-2">Active Courses</h3>
          <p class="text-3xl text-gray-700 font-bold">35</p>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 text-center border-l-4 border-blue-400">
          <h3 class="text-xl text-blue-500 font-semibold mb-2">Quizzes Taken</h3>
          <p class="text-3xl text-gray-700 font-bold">480</p>
        </div>
      </div>
    </section>
  </main>
</body><?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>