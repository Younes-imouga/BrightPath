@include('components.header')
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
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
