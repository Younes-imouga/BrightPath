<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath - Agent Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <!-- Header (Agent Navigation) -->
  <header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-blue-500 text-2xl font-bold">BrightPath Admin</h1>
    <nav>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="agent-dashboard.html">Dashboard</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="agent-reclamations.html">Reclamations</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="agent-activity.html">Activity</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="logout.html">Logout</a>
    </nav>
  </header>

  <!-- Main Content -->
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
