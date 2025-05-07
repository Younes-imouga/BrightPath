@include('components.header')
<div class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Add New Course</h2>
      <form action="{{ route('admin.storeCourse') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow p-8 w-[50%] mt-4 mx-auto">
        @csrf
        <div class="mb-4">
          <label for="title" class="block text-gray-700 mb-2">Course Title</label>
          <input type="text" name="title" id="title" required class="w-full p-3 border rounded" />
        </div>
        <div class="mb-4">
          <label for="description" class="block text-gray-700 mb-2">Course Description</label>
          <textarea name="description" id="description" rows="4" required class="w-full p-3 border rounded"></textarea>
        </div>
        <div class="mb-4">
          <label for="score" class="block text-gray-700 mb-2">Finishing Score</label>
          <input type="number" name="score" id="score" required class="w-full p-3 border rounded" />
        </div>
        <div class="mb-4">
          <label for="category" class="block text-gray-700 mb-2">Category</label>
          <select name="category" id="category" class="w-full p-3 border rounded mb-4">
            <option value="">Select Category</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-4">
          <label for="content_type" class="block text-gray-700">Content Type</label>
          <select name="content_type" id="content_type" class="w-full p-3 border rounded mb-4" onchange="toggleContentInputs()">
            <option value="">Select Content Type</option>
            <option value="pdf">PDF</option>
            <option value="youtube">YouTube Video</option>
          </select>
        </div>
        <div id="pdf_input" class="hidden mb-4">
          <label for="pdf_file" class="block text-gray-700">Upload PDF</label>
          <input type="file" name="pdf_file" id="pdf_file" class="w-full p-3 border rounded" />
        </div>
        <div id="youtube_input" class="hidden mb-4">
          <label for="youtube_link" class="block text-gray-700">YouTube Video Link</label>
          <input type="text" name="youtube_link" id="youtube_link" class="w-full p-3 border rounded" placeholder="Enter YouTube video link" />
        </div>
        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <div class="mt-4 p-3 bg-red-100 text-red-700 border border-red-300 rounded-md mb-4">{{ $error }}</div>
          @endforeach
        @endif
        <button type="submit" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
          Create Course
        </button>
      </form>
    </section>
  </main>

  <script>
    function toggleContentInputs() {
      const contentType = document.getElementById('content_type').value;
      const pdfInput = document.getElementById('pdf_input');
      const youtubeInput = document.getElementById('youtube_input');

      if (contentType === 'pdf') {
        pdfInput.classList.remove('hidden');
        youtubeInput.classList.add('hidden');
      } else if (contentType === 'youtube') {
        youtubeInput.classList.remove('hidden');
        pdfInput.classList.add('hidden');
      } else {
        pdfInput.classList.add('hidden');
        youtubeInput.classList.add('hidden');
      }
    }
  </script>

  <!-- Footer -->
  <footer class="bg-white border-t p-4 text-center">
    <p class="text-gray-600">&copy; 2023 BrightPath Admin.</p>
  </footer>
</div> 