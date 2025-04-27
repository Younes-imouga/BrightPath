<?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <main class="container mx-auto p-4 flex-grow">
        <section class="my-8">
            <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Add Question</h2>
            <form action="<?php echo e(route('admin.storeQuestion', $quizId)); ?>" method="POST" class="bg-white rounded-lg shadow p-8">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="question" class="block text-gray-700">Question Text</label>
                    <input type="text" name="question" id="question" required class="w-full p-3 border rounded" />
                </div>
                <div class="mb-4">
                    <label for="answers" class="block text-gray-700">Answers (comma-separated)</label>
                    <input type="text" name="answers" id="answers" required class="w-full p-3 border rounded" />
                </div>
                <div class="mb-4">
                    <label for="correct" class="block text-gray-700">Correct Answer Index</label>
                    <input type="number" name="correct" id="correct" required class="w-full p-3 border rounded" />
                </div>
                <button type="submit" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Add Question
                </button>
            </form>
        </section>
    </main>
</body><?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/admin/createQuestion.blade.php ENDPATH**/ ?>