<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
      <a href="#" class="text-2xl font-bold">Job Search</a>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="#" class="hover:text-gray-300">Home</a></li>
          <li><a href="#" class="hover:text-gray-300">Jobs</a></li>
          <li><a href="#" class="hover:text-gray-300">Companies</a></li>
          <li><a href="#" class="hover:text-gray-300">About</a></li>
          <li><a href="#" class="hover:text-gray-300">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="py-8">
    <section class="bg-gray-100 py-12">
      <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Find Your Dream Job</h1>
        <p class="text-lg mb-8">Search for the perfect job opportunity and take the next step in your career.</p>
        <form class="flex justify-center">

   
        <div class="relative w-48">
          <select class="appearance-none bg-white border-gray-300 rounded-md px-4 py-3 pr-8 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <option value="" class="flex items-center hover:bg-blue-500 hover:text-white transition-colors duration-300">
              <span class="mr-2">🌍</span>
              Select a country
            </option>
            <option value="us" class="flex items-center hover:bg-blue-500 hover:text-white transition-colors duration-300">
              <span class="mr-2">🇺🇸</span>
              United States
            </option>
            <option value="uk" class="flex items-center hover:bg-blue-500 hover:text-white transition-colors duration-300">
              <span class="mr-2">🇬🇧</span>
              United Kingdom
            </option>
            <option value="ca" class="flex items-center hover:bg-blue-500 hover:text-white transition-colors duration-300">
              <span class="mr-2">🇨🇦</span>
              Canada
            </option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>
        </div>
        <input type="text" placeholder="Search jobs, companies, or keywords" class="border-gray-300 px-4 py-3 w-full max-w-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        <button class="bg-blue-500 text-white rounded-r-md px-4 py-3 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Search</button>
      </form>
      </div>
    </section>

    <section class="container mx-auto py-8">
      <h2 class="text-3xl font-bold mb-8">Featured Job Categories</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
          <img src="https://t3.ftcdn.net/jpg/06/59/38/36/360_F_659383653_2zoFQOSpZh9wAlodoyKbgSmEnRCIyUrV.jpg" alt="IT" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-bold mb-2">IT</h3>
            <p class="text-gray-600">Explore job opportunities in the tech industry.</p>
          </div>
        </a>
        <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
          <img src="https://images.pexels.com/photos/443446/pexels-photo-443446.jpeg?cs=srgb&dl=pexels-eberhard-grossgasteiger-443446.jpg&fm=jpg" alt="Healthcare" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-bold mb-2">Healthcare</h3>
            <p class="text-gray-600">Find job openings in the healthcare sector.</p>
          </div>
        </a>
        <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
          <img src="https://t4.ftcdn.net/jpg/05/50/33/47/360_F_550334715_0d2cdaljV4Xd3x7yVUhRxfmLLEUyMdXr.jpg" alt="Finance" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-bold mb-2">Finance</h3>
            <p class="text-gray-600">Explore finance and accounting job opportunities.</p>
          </div>
        </a>
        <a href="#" class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
          <img src="https://i.pinimg.com/originals/64/b7/35/64b735fe92c580cad36351a26d4b13c9.jpg" alt="Marketing" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-bold mb-2">Marketing</h3>
            <p class="text-gray-600">Find job openings in marketing and advertising.</p>
          </div>
        </a>
      </div>
    </section>
  </main>

  <footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto flex justify-between items-center">
      <p>&copy; 2023 Job Search. All rights reserved.</p>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="#" class="hover:text-gray-300">Privacy Policy</a></li>
          <li><a href="#" class="hover:text-gray-300">Terms of Use</a></li>
          <li><a href="#" class="hover:text-gray-300">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </footer>
</body>
</html>
