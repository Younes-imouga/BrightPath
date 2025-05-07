<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath Admin - Quiz Management</title>
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
      <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Quiz Management</h2>
      <a href="{{ route('admin.createQuiz') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add New Quiz</a>
      <table class="w-full border-collapse mt-4">
        <thead>
          <tr>
            <th class="border p-2">ID</th>
            <th class="border p-2">Name</th>
            <th class="border p-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($quizzes as $quiz)
          <tr>
            <td class="border p-2 text-center">{{ $quiz->id }}</td>
            <td class="border p-2 text-center">{{ $quiz->name }}</td>
            <td class="border p-2 text-center">
              <a href="{{ route('admin.editQuiz', $quiz->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
              <form action="{{ route('admin.deleteQuiz', $quiz->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath Admin.</p>
  </footer>
</body>
</html>
