<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath - Profile</title>
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
    <section class="max-w-md mx-auto bg-white rounded-lg shadow p-8 my-8">
      <h2 class="text-2xl text-blue-500 font-bold mb-4 text-center">My Profile</h2>
      <form action="#" method="post" class="space-y-4">
        <input type="text" name="name" placeholder="Full Name" value="John Doe" required class="w-full p-3 border rounded" />
        <input type="email" name="email" placeholder="Email" value="john@example.com" required class="w-full p-3 border rounded" />
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Update Profile
        </button>
      </form>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath.</p>
  </footer>
</body>
</html>
