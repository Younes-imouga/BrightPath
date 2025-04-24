<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath Admin - User Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <!-- Header (Admin Navigation) -->
  <header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-blue-500 text-2xl font-bold">BrightPath Admin</h1>
    <nav>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="admin-dashboard.html">Dashboard</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="admin-users.html">Users</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="admin-courses.html">Courses</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="admin-quizzes.html">Quizzes</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="admin-reclamations.html">Reports</a>
      <a class="text-blue-500 hover:text-blue-700 mx-2" href="logout.html">Logout</a>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto p-4 flex-grow">
    <section class="bg-white rounded-lg shadow p-8 my-8">
      <h2 class="text-2xl text-blue-500 font-bold mb-4">User Management</h2>
      <table class="w-full border-collapse">
        <thead>
          <tr>
            <th class="border p-2">ID</th>
            <th class="border p-2">Name</th>
            <th class="border p-2">Email</th>
            <th class="border p-2">Role</th>
            <th class="border p-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border p-2 text-center">1</td>
            <td class="border p-2 text-center">John Doe</td>
            <td class="border p-2 text-center">john@example.com</td>
            <td class="border p-2 text-center">Learner</td>
            <td class="border p-2 text-center">
              @if($user->id !== 1)
              <form action="{{ route('admin.updateRole', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <select name="role" class="border rounded p-1">
                  <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                  <option value="agent" {{ $user->role === 'agent' ? 'selected' : '' }}>Agent</option>
                  <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                </select>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Update</button>
              </form>
              @else
              <div class="my-2">
                <span class="text-gray-900 bg-gray-300 py-1 px-2 shadow-md rounded-3xl">Cannot change role of Owner</span>
              </div>
              @endif
            </td>
            <td class="border p-2 text-center">
              @if($user->role !== 'admin')
                @if($user->is_banned)
                  <form action="{{ route('admin.unbanUser', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Unban</button>
                  </form>
                @else
                <form action="{{ route('admin.banUser', $user->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Ban</button>
                </form>
                @endif
              @else
                <span class="text-gray-900 bg-gray-300 py-1 px-2 shadow-md  rounded-3xl">Cannot ban admins</span>
              @endif
            </td>
          </tr>
          <!-- More rows as needed -->
        </tbody>
      </table>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath Admin.</p>
  </footer>
</body>
</html>
