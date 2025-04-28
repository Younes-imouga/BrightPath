@include('components.header')
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen flex flex-col text-gray-800">
  <main class="container mx-auto p-4 flex-grow">
    <section class="max-w-2xl mx-auto my-12 bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-3xl text-blue-600 font-extrabold mb-6 text-center drop-shadow">Add New Course</h2>
      @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
          @foreach($errors->all() as $error)
            <div>{{ $error }}</div>
          @endforeach
        </div>
      @endif
      <form action="{{ route('admin.storeCourse') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
          <label class="block text-gray-700 font-semibold mb-2">Course Name</label>
          <input type="text" name="name" value="{{ old('name') }}" required class="w-full p-3 border rounded focus:ring-2 focus:ring-blue-200" />
        </div>

        <div>
          <label class="block text-gray-700 font-semibold mb-2">Description</label>
          <textarea name="description" rows="4" required class="w-full p-3 border rounded focus:ring-2 focus:ring-blue-200">{{ old('description') }}</textarea>
        </div>

        <div>
          <label class="block text-gray-700 font-semibold mb-2">Score</label>
          <input type="number" name="score" value="{{ old('score') }}" required class="w-full p-3 border rounded focus:ring-2 focus:ring-blue-200" />
        </div>

        @if(isset($categories))
        <div>
          <label class="block text-gray-700 font-semibold mb-2">Category</label>
          <select name="category_id" class="w-full p-3 border rounded focus:ring-2 focus:ring-blue-200">
            <option value="">Select Category</option>
            @foreach($categories as $category)
              <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
              </option>
            @endforeach
          </select>
        </div>
        @endif

        <div>
          <label class="block text-gray-700 font-semibold mb-2">Course Image</label>
          <input type="file" name="image" class="w-full p-3 border rounded focus:ring-2 focus:ring-blue-200" />
        </div>

        {{-- Add any other fields you have, just keep the styling consistent --}}

        <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-bold py-3 px-6 rounded-lg shadow transition duration-200">
          Save
        </button>
      </form>
    </section>
  </main>
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath Admin.</p>
  </footer>
</body>
</html> 