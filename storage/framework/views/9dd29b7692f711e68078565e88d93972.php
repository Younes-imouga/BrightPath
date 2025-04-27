<?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <main class="container mx-auto p-4 flex-grow">
        <section class="my-8">
            <div class="bg-white rounded-lg shadow p-8 text-center mb-8 flex items-around justify-between px-10">
                <h2 class="text-3xl text-blue-500 font-bold text-center"><?php echo e($quiz->name); ?> - Questions</h2>
                <a href="<?php echo e(route('admin.createQuestion', $quiz->id)); ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Question</a>
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
                    <?php if($quiz->questions->isEmpty()): ?>
                        <tr>
                            <td colspan="4" class="border p-2 text-center">No questions available.</td>
                        </tr>
                    <?php endif; ?>
                    <?php $__currentLoopData = $quiz->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border p-2"><?php echo e($question->question); ?></td>
                        <td class="border p-2"><?php echo e($question->answers); ?></td>
                        <td class="border p-2">
                            <?php
                                $answers = explode(',', $question->answers);
                                $correctIndex = $question->correct ;
                            ?>
                            <?php echo e($answers[$correctIndex] ?? 'N/A'); ?>

                        </td>
                        <td class="border p-2">
                            <a href="<?php echo e(route('admin.editQuestion', $question->id)); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                            <form action="<?php echo e(route('admin.deleteQuestion', $question->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </section>
    </main>
</body><?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/admin/quizQuestions.blade.php ENDPATH**/ ?>