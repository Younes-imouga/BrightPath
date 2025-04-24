<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath Admin - Course Management</title>
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
    <section class="my-8">
      <div class="bg-white rounded-lg shadow p-8 text-center mb-8 flex items-around justify-between px-10">
        <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Course Management</h2>
        <a href="{{ route('admin.createCourse') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-4 px-4 rounded">Add New Course</a>
      </div>  
      @foreach($courses as $course)
      <div class="bg-white rounded-lg shadow p-6 flex items-center justify-between mb-6">
        <div>        
          <h3 class="text-xl text-blue-500 font-semibold"> Course Name: {{ $course->name }}</h3>
          <p class="text-gray-600">Finish Score: {{ $course->score }}</p>
        </div>
        <div class="mt-4">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Edit</button>
          <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
        </div>
      </div>
      @endforeach
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath Admin.</p>
  </footer>
</body>
</html>
