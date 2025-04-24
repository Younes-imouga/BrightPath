<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath - Leaderboard</title>
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
      <h2 class="text-2xl text-blue-500 font-bold text-center mb-4">Leaderboard</h2>
      <table class="w-full border-collapse">
        <thead>
          <tr>
            <th class="border p-2">Rank</th>
            <th class="border p-2">Name</th>
            <th class="border p-2">Points</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border p-2 text-center">1</td>
            <td class="border p-2 text-center">Alice</td>
            <td class="border p-2 text-center">1500</td>
          </tr>
          <tr>
            <td class="border p-2 text-center">2</td>
            <td class="border p-2 text-center">Bob</td>
            <td class="border p-2 text-center">1450</td>
          </tr>
          <tr>
            <td class="border p-2 text-center">3</td>
            <td class="border p-2 text-center">Charlie</td>
            <td class="border p-2 text-center">1400</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath.</p>
  </footer>
</body>
</html>
