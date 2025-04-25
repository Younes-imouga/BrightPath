@include('components.header')
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Add New Quiz</h2>
      <form action="{{ route('admin.storeQuiz') }}" method="POST" class="bg-white rounded-lg shadow p-8">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-gray-700">Quiz Name</label>
          <input type="text" name="name" id="name" required class="w-full p-3 border rounded" />
        </div>
        <div class="mb-4">
          <label for="course_id" class="block text-gray-700">Select Course</label>
          <select name="course_id" id="course_id" class="w-full p-3 border rounded" required>
            <option value="">Select Course</option>
            @foreach($courses as $course)
              <option value="{{ $course->id }}">{{ $course->name }}</option>
            @endforeach
          </select>
        </div>
        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <div class="mt-4 p-3 bg-red-100 text-red-700 border border-red-300 rounded-md mb-4">{{ $error }}</div>
          @endforeach
        @endif
        <button type="submit" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
          Create Quiz
        </button>
      </form>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath Admin.</p>
  </footer>
</body> 