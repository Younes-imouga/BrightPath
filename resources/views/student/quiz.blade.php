<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath - Quiz</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <!-- Header (Learner Navigation) -->
  <header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-blue-500 text-2xl font-bold">BrightPath</h1>
    <nav>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="learner-dashboard.html">Dashboard</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="my-courses.html">My Courses</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="profile.html">Profile</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="support.html">Support</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="logout.html">Logout</a>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto p-4">
    <section class="bg-white rounded-lg shadow p-8 my-8">
      <h2 class="text-2xl text-blue-500 font-bold mb-4">Quiz: Programming Basics</h2>
      <div class="mb-6">
        <p class="text-lg mb-2"><strong>Q1:</strong> What does HTML stand for?</p>
        <div class="space-y-2">
          <button onclick="alert('Answer recorded!')" class="w-full border rounded p-3 hover:bg-gray-100">
            Hyper Text Markup Language
          </button>
          <button onclick="alert('Answer recorded!')" class="w-full border rounded p-3 hover:bg-gray-100">
            Home Tool Markup Language
          </button>
          <button onclick="alert('Answer recorded!')" class="w-full border rounded p-3 hover:bg-gray-100">
            Hyperlinks and Text Markup Language
          </button>
        </div>
      </div>
      <!-- Add more questions as needed -->
      <button onclick="window.location.href='quiz-results.html'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Submit Quiz
      </button>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath.</p>
  </footer>
</body>
</html>
