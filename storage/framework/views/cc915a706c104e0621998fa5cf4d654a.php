<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath Admin - Reclamation Oversight</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">
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
    <section class="space-y-6 my-8">
      <h2 class="text-2xl text-blue-500 font-bold text-center">Reclamation Oversight</h2>
      <div class="bg-white rounded-lg shadow p-6">
        <p class="text-gray-600"><strong>John Doe:</strong> Unable to access course content.</p>
        <button onclick="alert('Take action')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">
          Take Action
        </button>
      </div>
      <!-- More reclamation entries as needed -->
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath Admin.</p>
  </footer>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/admin/reclamations.blade.php ENDPATH**/ ?>