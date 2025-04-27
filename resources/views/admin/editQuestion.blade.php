@include('components.header')

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <main class="container mx-auto p-4 flex-grow">
        <section class="my-8">
            <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Edit Question</h2>
            <form action="{{ route('admin.updateQuestion', $question->id) }}" method="POST" class="bg-white rounded-lg shadow p-8">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="question" class="block text-gray-700">Question Text</label>
                    <input type="text" name="question" id="question" value="{{ $question->question }}" required class="w-full p-3 border rounded" />
                    @error('question')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="answers" class="block text-gray-700">Answers (comma-separated)</label>
                    <input type="text" name="answers" id="answers" value="{{ $question->answers }}" required class="w-full p-3 border rounded" />
                    @error('answers')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="correct" class="block text-gray-700">Correct Answer Index</label>
                    <input type="number" name="correct" id="correct" value="{{ $question->correct + 1 }}" required class="w-full p-3 border rounded" />
                    @error('correct')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Question
                </button>
            </form>
        </section>
    </main>
</body>
