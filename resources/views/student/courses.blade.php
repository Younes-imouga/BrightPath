<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BrightPath - Courses Catalog</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  @include('components.header')
  <main class="container mx-auto p-4 flex-grow">
    <section class="my-8">
      <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Available Courses</h2>
      @if($courses->isEmpty())
        <p class="text-gray-600 text-center">No courses available at the moment.</p>
      @else
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach($courses as $course)
          <div class="bg-white rounded-lg shadow p-6 text-center">
            <h3 class="text-xl text-blue-500 font-semibold">{{ $course->name }}</h3>
            <p class="text-gray-600 mb-2">{{ $course->description }}</p>
            <p class="text-gray-600 mb-2">score: {{ $course->score }} Pt</p>
            <a href="{{ route('student.showCourse', $course->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              View Course
            </a>
          </div>
          @endforeach
        </div>
      @endif
    </section>
  </main>
</body>
</html>
