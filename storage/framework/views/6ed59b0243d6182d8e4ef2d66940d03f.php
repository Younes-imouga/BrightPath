<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath Admin - Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <!-- Header (Admin Navigation) -->
  <header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-blue-500 text-2xl font-bold">BrightPath Admin</h1>
    <nav>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="admin-dashboard.html">Dashboard</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="admin-users.html">Users</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="admin-courses.html">Courses</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="admin-quizzes.html">Quizzes</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="admin-reclamations.html">Reports</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="logout.html">Logout</a>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto p-4 flex-grow">
    <section class="grid md:grid-cols-3 gap-6 my-8">
      <div class="bg-white rounded-lg shadow p-6 text-center">
        <h3 class="text-xl text-blue-500 font-semibold mb-2">Total Users</h3>
        <p class="text-2xl text-gray-600">1200</p>
      </div>
      <div class="bg-white rounded-lg shadow p-6 text-center">
        <h3 class="text-xl text-blue-500 font-semibold mb-2">Active Courses</h3>
        <p class="text-2xl text-gray-600">35</p>
      </div>
      <div class="bg-white rounded-lg shadow p-6 text-center">
        <h3 class="text-xl text-blue-500 font-semibold mb-2">Quizzes Taken</h3>
        <p class="text-2xl text-gray-600">480</p>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath Admin.</p>
  </footer>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/admin/admin-dashboard.blade.php ENDPATH**/ ?>