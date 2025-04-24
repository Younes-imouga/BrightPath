<body class="bg-gray-100 text-gray-800">
  <!-- Header (Learner Navigation) -->
  @include('components.header')

  <!-- Main Content -->
  <main class="container mx-auto p-4">
    <section class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 my-8">
      <div class="bg-white rounded-lg shadow p-6 text-center">
        <h3 class="text-xl text-blue-500 font-semibold mb-2">Programming Basics</h3>
        <p class="text-gray-600 mb-2">Progress: 40%</p>
        <button onclick="window.location.href='course-content.html'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Continue
        </button>
      </div>
      <div class="bg-white rounded-lg shadow p-6 text-center">
        <h3 class="text-xl text-blue-500 font-semibold mb-2">Mathematics for School</h3>
        <p class="text-gray-600 mb-2">Progress: 70%</p>
        <button onclick="window.location.href='course-content.html'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Continue
        </button>
      </div>
      <!-- Additional course cards as needed -->
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath.</p>
  </footer>
</body>
</html>
