<?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <main class="container mx-auto p-4 flex-grow">
        <section class="my-8">
            <h2 class="text-3xl text-blue-500 font-bold mb-4 text-center">Edit Question</h2>
            <form action="<?php echo e(route('admin.updateQuestion', $question->id)); ?>" method="POST" class="bg-white rounded-lg shadow p-8">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-4">
                    <label for="question" class="block text-gray-700">Question Text</label>
                    <input type="text" name="question" id="question" value="<?php echo e($question->question); ?>" required class="w-full p-3 border rounded" />
                    <?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="mt-2 text-red-600"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-4">
                    <label for="answers" class="block text-gray-700">Answers (comma-separated)</label>
                    <input type="text" name="answers" id="answers" value="<?php echo e($question->answers); ?>" required class="w-full p-3 border rounded" />
                    <?php $__errorArgs = ['answers'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="mt-2 text-red-600"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-4">
                    <label for="correct" class="block text-gray-700">Correct Answer Index</label>
                    <input type="number" name="correct" id="correct" value="<?php echo e($question->correct + 1); ?>" required class="w-full p-3 border rounded" />
                    <?php $__errorArgs = ['correct'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="mt-2 text-red-600"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Question
                </button>
            </form>
        </section>
    </main>
</body>
<?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/admin/editQuestion.blade.php ENDPATH**/ ?>