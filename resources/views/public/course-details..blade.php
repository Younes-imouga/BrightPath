<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath - Course Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen dark">
  <!-- Header -->
  <header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-blue-500 text-2xl font-bold">BrightPath</h1>
    <nav>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="index.html">Home</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="courses.html">Courses</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="about.html">About</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="contact.html">Contact</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="login.html">Login</a>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto p-4 flex-grow">
    <section class="bg-white rounded-lg shadow p-8 my-8">
      <h2 class="text-3xl text-blue-500 font-bold mb-4">Programming Basics</h2>
      <p class="text-gray-600 mb-4">
        This course introduces you to the fundamentals of programming with interactive lessons, real-world projects, and quizzes.
      </p>
      <ul class="list-disc list-inside mb-4">
        <li>Duration: 8 weeks</li>
        <li>Languages: English / Arabic / French</li>
        <li>Level: Beginner</li>
      </ul>
      <button onclick="alert('Enroll functionality coming soon!')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Enroll Now
      </button>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">
      &copy; 2023 BrightPath.
      <a class="text-blue-500 hover:underline" href="privacy.html">Privacy Policy</a>
    </p>
  </footer>
</body>
</html>
