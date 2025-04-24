@include('components.header')
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Agent Dashboard</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow p-6 text-center">
          <h3 class="text-xl text-blue-500 font-semibold mb-2">Pending Reclamations</h3>
          <p class="text-2xl text-gray-600">5</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
          <h3 class="text-xl text-blue-500 font-semibold mb-2">User Reports</h3>
          <p class="text-2xl text-gray-600">3 New</p>
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
