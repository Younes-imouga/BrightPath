@include('components.header')
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Add New Category</h2>
      <form action="{{ route('admin.storeCategory') }}" method="POST" class="bg-white rounded-lg shadow p-8 w-[50%] mt-4 mx-auto">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-gray-700">Category Name</label>
          <input type="text" name="name" id="name" required class="w-full p-3 border rounded" />
        </div>
        <button type="submit" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
          Create Category
        </button>
      </form>
    </section>
  </main>
</body>