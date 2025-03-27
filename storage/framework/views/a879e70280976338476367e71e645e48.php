<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BrightPath - SignUp</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .SignUp-background {
      position: fixed;
      top: -100%;
      left: -100%;
      width: 300%;
      height: 300vh;
      background: conic-gradient(
        from 0deg,
        rgb(255, 255, 255),
        rgba(0, 204, 255, 0.3),
        rgb(255, 255, 255),
        rgba(0, 204, 255, 0.3),
        rgb(255, 255, 255),
        rgba(0, 204, 255, 0.3),
        rgb(255, 255, 255),
        rgba(0, 204, 255, 0.3),
        rgb(255, 255, 255)
      );
      animation: rotate-lights 8s linear infinite;
    }

    .SignUp-container {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(10px);
      padding: 2.5rem;
      border-radius: 16px;
      border: 2px solid rgba(0, 217, 255, 0.253);
      box-shadow: 0 0 50px rgba(0, 123, 255, 0.589), 0 0 30px rgba(0, 123, 255, 0.2);
      width: 400px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    @keyframes rotate-lights {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
  </style>
</head>
<body class="flex justify-center items-center h-screen bg-white">
  <div class="SignUp-background"></div>
  <div class="SignUp-container">
    <h2 class="mb-6 text-2xl font-bold text-cyan-500">Welcome To Bright Path!</h2>
    <form action="/signup" method="POST">
      <?php echo csrf_field(); ?>
      <input type="text" name="name" placeholder="Username" class="w-full p-3 mb-4 border border-cyan-300 rounded-md bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-cyan-400">
      <input type="text" name="email" placeholder="Email" class="w-full p-3 mb-4 border border-cyan-300 rounded-md bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-cyan-400">
      <input type="password" name="password" placeholder="Password" class="w-full p-3 mb-4 border border-cyan-300 rounded-md bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-cyan-400">
      <button class="w-full mt-6 p-3 bg-gradient-to-r from-cyan-400 to-teal-300 text-black font-bold rounded-md transition-transform transform hover:-translate-y-1 hover:shadow-lg">
        SignUp
      </button>
    </form>
    <?php if(session('error')): ?>
      <div class="mt-4 p-3 bg-red-100 text-red-700 border border-red-300 rounded-md">
        <?php echo e(session('error')); ?>

      </div>
    <?php endif; ?>
    <p class="mt-6 text-gray-600">Already have an account? <a href="/login" class="text-cyan-500 font-bold hover:underline">Login</a></p>
  </div>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\Desktop\BrightPath\resources\views/public/Auth/signup.blade.php ENDPATH**/ ?>