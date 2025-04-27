@include('components.header')
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <div class="bg-white rounded-lg shadow p-8 text-center mb-8 flex items-around justify-between px-10">
        <h2 class="text-3xl text-blue-500 font-bold text-center">Course Management</h2>
        <a href="{{ route('admin.createCourse') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add New Course</a>
      </div>  
      @foreach($courses as $course)
      <div class="bg-white rounded-lg shadow p-6 flex items-center justify-between mb-6">
        <div>        
          <h3 class="text-xl text-blue-500 font-semibold">
            <a href="{{ route('admin.showCourse', $course->id) }}" class="hover:underline">{{ $course->name }}</a>
          </h3>
          <p class="text-gray-600">Finish Score: {{ $course->score }}</p>
        </div>
        <div class="mt-4">
          <a href="{{ route('admin.editCourse', $course->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
          <form action="{{ route('admin.deleteCourse', $course->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
          </form>
        </div>
      </div>
      @endforeach
    </section>
  </main>
</body>