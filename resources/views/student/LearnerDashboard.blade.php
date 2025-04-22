@include('components.header')
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Welcome, [Student Name]!</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow p-6 text-center">
          <h3 class="text-xl text-blue-500 font-semibold mb-2">Courses</h3>
          <p class="text-gray-600 mb-4">View your enrolled courses and track progress.</p>
          <button onclick="window.location.href='my-courses.html'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            My Courses
          </button>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
          <h3 class="text-xl text-blue-500 font-semibold mb-2">Quizzes</h3>
          <p class="text-gray-600 mb-4">Attempt quizzes and see your results.</p>
          <button onclick="window.location.href='quiz-instructions.html'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Start Quiz
          </button>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
          <h3 class="text-xl text-blue-500 font-semibold mb-2">Progress</h3>
          <p class="text-gray-600 mb-4">Track your learning milestones.</p>
          <button onclick="window.location.href='progress-tracker.html'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            View Progress
          </button>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath.</p>
  </footer>
</body>
</html>
