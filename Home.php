<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Personal Website</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="profile.css">
</head>
<body class="bg-gray-100">
  <!-- Navbar -->
  <nav class="bg-white shadow-md fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        
        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="#" class=" text-red-600 text-2xl  font-bold text-600">My Personal Web</a>
        </div>

        <!-- Links (Desktop) -->
        <div class="hidden md:flex space-x-8">
          <a href="Home.php" class="text-red-700 hover:text-indigo-600 transition">Home</a>
          <a href="About.php" class="text-red-700 hover:text-indigo-600 transition">About Me</a>
          <a href="Project.php" class="text-red-700 hover:text-indigo-600 transition">Projects</a>
          
        </div>

        <!-- Hamburger Button -->
        <div class="md:hidden">
          <button id="menu-btn" class="text-gray-700 focus:outline-none">
            <!-- Icon -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-100">Home</a>
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-100">About</a>
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-100">Services</a>
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-100">Contact</a>
    </div>
  </nav>
              
<section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-8 items-center">
    <div>
      <img src="profile.jpg" alt="Profile Photo" class="rounded-full w-80 h-80 object-cover mx-auto shadow-lg">
    </div>
    <div>
      <h1 class="text-4xl font-bold text-600 mb-5">Carlos Miguel B. Bermejo</h1>
      <p class="text-lg mb-10">
        I am an educator who is deeply passionate about the meaningful integration of education and technology.
      </p>
      <a href="About.php" class="bg-red-500 text-white px-6 py-3 rounded-lg shadow hover:bg-700 transition">View My Information</a>
    </div>
  </section>















  <script>

    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  
  </script>
</body>
</html>
