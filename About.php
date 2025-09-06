<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Personal Website</title>
     <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="About.css">
</head>

<body class="bg-gray-100">
  <!-- Navbar -->
  <nav class="bg-white shadow-md fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        
        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="#" class="text-2xl font-bold text-600">My Porfolio</a>
        </div>

        <!-- Links (Desktop) -->
        <div class="hidden md:flex space-x-8">
          <a href="Home.php" class="text-gray-700 hover:text-indigo-600 transition">Home</a>
          <a href="About.php" class="text-gray-700 hover:text-indigo-600 transition">About Me</a>
          <a href="Project.php" class="text-gray-700 hover:text-indigo-600 transition">Projects</a>
          
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


  <!-- Grid: 1 column on small screens, 3 on md+ -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6">


<!-- Card 1 -->
<article class="bg-white rounded-2xl shadow-md overflow-hidden flex flex-col">
<img src="https://via.placeholder.com/600x300" alt="Placeholder" class="w-full h-40 object-cover">
<div class="p-6 flex-1 flex flex-col">
<h2 class="text-lg font-semibold mb-2">Card title one</h2>
<p class="text-gray-600 mb-4 flex-1">Short description for the first card. Use this space to briefly describe the content or purpose of the card.</p>
<div class="mt-4">
<a href="#" class="inline-block px-4 py-2 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700">Action</a>
</div>
</div>
</article>


<!-- Card 2 -->
<article class="bg-white rounded-2xl shadow-md overflow-hidden flex flex-col">
<img src="https://via.placeholder.com/600x300" alt="Placeholder" class="w-full h-40 object-cover">
<div class="p-6 flex-1 flex flex-col">
<h2 class="text-lg font-semibold mb-2">Card title two</h2>
<p class="text-gray-600 mb-4 flex-1">A second card with a different blurb. Keep text concise and helpful for users scanning quickly.</p>
<div class="mt-4">
<a href="#" class="inline-block px-4 py-2 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700">Action</a>
</div>
</div>
</article>


<!-- Card 3 -->
<article class="bg-white rounded-2xl shadow-md overflow-hidden flex flex-col">
<img src="https://via.placeholder.com/600x300" alt="Placeholder" class="w-full h-40 object-cover">
<div class="p-6 flex-1 flex flex-col">
<h2 class="text-lg font-semibold mb-2">Card title three</h2>
<p class="text-gray-600 mb-4 flex-1">Third card text. You can replace the image and text with your real content. Buttons are optional.</p>
<div class="mt-4">
<a href="#" class="inline-block px-4 py-2 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700">Action</a>
</div>
</div>
</article>


</section>

  
             


    









 
</body>
</html>
