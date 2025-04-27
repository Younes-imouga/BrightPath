@include('components.header')
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <main class="container mx-auto p-4 flex-grow">
        <section class="my-8">
            <div class="bg-white rounded-lg shadow p-8 text-center mb-8 flex items-around justify-between px-10">
                <h2 class="text-3xl text-blue-500 font-bold text-center">{{ $quiz->name }} - Questions</h2>
                <a href="{{ route('admin.createQuestion', $quiz->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Question</a>
            </div>
            <table class="w-[90%] mx-auto text-center border-collapse mt-4 bg-white shadow-lg">
                <thead>
                    <tr>
                        <th class="border p-2">Question</th>
                        <th class="border p-2">Answers</th>
                        <th class="border p-2">Correct Answer</th>
                        <th class="border p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($quiz->questions->isEmpty())
                        <tr>
                            <td colspan="4" class="border p-2 text-center">No questions available.</td>
                        </tr>
                    @endif
                    @foreach($quiz->questions as $question)
                    <tr>
                        <td class="border p-2">{{ $question->question }}</td>
                        <td class="border p-2">{{ $question->answers }}</td>
                        <td class="border p-2">
                            @php
                                $answers = explode(',', $question->answers);
                                $correctIndex = $question->correct ;
                            @endphp
                            {{ $answers[$correctIndex] ?? 'N/A' }}
                        </td>
                        <td class="border p-2">
                            <a href="{{ route('admin.editQuestion', $question->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                            <form action="{{ route('admin.deleteQuestion', $question->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
</body>