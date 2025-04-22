@include('components.header')
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <h2 class="text-3xl text-blue-500 font-bold mb-10 text-center">User Management</h2>
      <table class="w-[90%] mx-auto border-collapse bg-white shadow-lg rounded-lg overflow-hidden">
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
          @foreach($users as $user)
          <tr>
            <td class="border p-2 text-center">{{ $user->id }}</td>
            <td class="border p-2 text-center">{{ $user->username }}</td>
            <td class="border p-2 text-center">{{ $user->email }}</td>
            <td class="border p-2 text-center">
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
            </td>
            <td class="border p-2 text-center">
              <form action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Ban</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
  </main>
</body>