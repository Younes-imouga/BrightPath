<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath - Courses Catalog</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
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
    <section class="grid md:grid-cols-3 gap-6 my-8">
      <div class="bg-white rounded-lg shadow p-6 text-center">
        <h3 class="text-xl text-blue-500 font-semibold mb-2">Programming Basics</h3>
        <p class="text-gray-600 mb-4">Learn the fundamentals of programming with interactive lessons.</p>
        <button onclick="window.location.href='course-details.html'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          View Details
        </button>
      </div>
      <div class="bg-white rounded-lg shadow p-6 text-center">
        <h3 class="text-xl text-blue-500 font-semibold mb-2">Mathematics for School</h3>
        <p class="text-gray-600 mb-4">Master essential math skills aligned to the Moroccan curriculum.</p>
        <button onclick="window.location.href='course-details.html'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          View Details
        </button>
      </div>
      <div class="bg-white rounded-lg shadow p-6 text-center">
        <h3 class="text-xl text-blue-500 font-semibold mb-2">Science Essentials</h3>
        <p class="text-gray-600 mb-4">Explore core scientific concepts in a fun and engaging way.</p>
        <button onclick="window.location.href='course-details.html'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          View Details
        </button>
      </div>
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
