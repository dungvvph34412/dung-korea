<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Dashboard
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            background-color: #0e1a2b;
            color: #fff;
        }
        .sidebar {
            background-color: #1a2b4c;
        }
        .card {
            background-color: #1a2b4c;
        }
        .highlight {
            color: #34d399;
        }
  </style>
 </head>
 <body class="flex">
  <!-- Sidebar -->
  <div class="sidebar w-64 h-screen p-4">
   <div class="flex items-center mb-8">
    <img alt="Logo" class="w-10 h-10 mr-2" height="40" src="https://storage.googleapis.com/a1aa/image/GQ-LdZexvj4gmSiSqMtHWY_d2wJM230I7xFzwME9lsY.jpg" width="40"/>
    <span class="text-xl font-bold">
     Maxton
    </span>
   </div>
   <nav>
    <ul>
     <li class="mb-4">
      <a class="flex items-center p-2 text-white hover:bg-blue-700 rounded" href="#">
       <i class="fas fa-tachometer-alt mr-2">
       </i>
       Dashboard
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2 text-white hover:bg-blue-700 rounded" href="#">
       <i class="fas fa-chart-line mr-2">
       </i>
       Analysis
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2 text-white hover:bg-blue-700 rounded" href="#">
       <i class="fas fa-shopping-cart mr-2">
       </i>
       eCommerce
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2 text-white hover:bg-blue-700 rounded" href="#">
       <i class="fas fa-th-large mr-2">
       </i>
       Widgets
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2 text-white hover:bg-blue-700 rounded" href="#">
       <i class="fas fa-cogs mr-2">
       </i>
       Apps
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2 text-white hover:bg-blue-700 rounded" href="#">
       <i class="fas fa-clone mr-2">
       </i>
       UI Elements
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2 text-white hover:bg-blue-700 rounded" href="#">
       <i class="fas fa-table mr-2">
       </i>
       Forms &amp; Tables
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2 text-white hover:bg-blue-700 rounded" href="#">
       <i class="fas fa-user mr-2">
       </i>
       Pages
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2 text-white hover:bg-blue-700 rounded" href="#">
       <i class="fas fa-chart-pie mr-2">
       </i>
       Charts &amp; Maps
      </a>
     </li>
    </ul>
   </nav>
  </div>
  <!-- Main Content -->
  <div class="flex-1 p-6">
   <!-- Top Bar -->
   <div class="flex justify-between items-center mb-6">
    <div class="relative">
     <input class="bg-gray-800 text-white rounded-full pl-10 pr-4 py-2 focus:outline-none" placeholder="Search" type="text"/>
     <i class="fas fa-search absolute left-3 top-2.5 text-gray-400">
     </i>
    </div>
    <div class="flex items-center space-x-4">
     <i class="fas fa-globe text-white">
     </i>
     <i class="fas fa-th text-white">
     </i>
     <i class="fas fa-bell text-white relative">
      <span class="absolute top-0 right-0 bg-red-500 text-xs rounded-full px-1">
       5
      </span>
     </i>
     <img alt="User Avatar" class="w-10 h-10 rounded-full" height="40" src="https://storage.googleapis.com/a1aa/image/-799dt_M4d3tl4dK_1YhIXaq1kYXbv2YXaDNvWmJS9o.jpg" width="40"/>
    </div>
   </div>
   <!-- Welcome Card -->
   <div class="card p-6 mb-6 flex justify-between items-center">
    <div>
     <h2 class="text-2xl font-bold">
      Welcome back
     </h2>
     <p class="text-xl">
      Jhon Anderson!
     </p>
     <div class="flex space-x-4 mt-4">
      <div>
       <p class="text-lg">
        $65.4K
       </p>
       <p class="text-sm text-gray-400">
        Today's Sales
       </p>
      </div>
      <div>
       <p class="text-lg">
        78.4%
       </p>
       <p class="text-sm text-gray-400">
        Growth Rate
       </p>
      </div>
     </div>
    </div>
    <img alt="Illustration of a person working at a desk" class="w-24 h-24" height="100" src="https://storage.googleapis.com/a1aa/image/1ftOE5w4-v6eTVtoAl9oEFkKrFvaSmFFEJcd2TkEpXo.jpg" width="100"/>
   </div>
   <!-- Stats Grid -->
   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Monthly Revenue -->
    <div class="card p-6">
     <h3 class="text-lg font-bold mb-4">
      Monthly Revenue
     </h3>
     <img alt="Bar chart showing monthly revenue" height="200" src="https://storage.googleapis.com/a1aa/image/GV0JUBzRKVEXX4sTh21t6-KjWJKNast_WL_FrpJTZcg.jpg" width="300"/>
     <p class="mt-4">
      Average monthly sale for every author
     </p>
     <p class="text-2xl font-bold mt-2">
      68.9%
      <span class="highlight">
       34.5% ↑
      </span>
     </p>
    </div>
    <!-- Device Type -->
    <div class="card p-6">
     <h3 class="text-lg font-bold mb-4">
      Device Type
     </h3>
     <img alt="Pie chart showing device type distribution" height="200" src="https://storage.googleapis.com/a1aa/image/LzNw4K8ZF1Cl4NZ5QDbCEdPq25CCXAoqnUgPrB7gXwU.jpg" width="300"/>
     <ul class="mt-4">
      <li>
       Desktop: 35%
      </li>
      <li>
       Tablet: 48%
      </li>
      <li>
       Mobile: 27%
      </li>
     </ul>
    </div>
    <!-- Active Users -->
    <div class="card p-6">
     <h3 class="text-lg font-bold mb-4">
      Active Users
     </h3>
     <p class="text-2xl font-bold">
      42.5K
     </p>
     <p class="text-sm text-gray-400">
      24K users increased from last month
     </p>
     <img alt="Chart showing active users" height="200" src="https://storage.googleapis.com/a1aa/image/xH7BRzrplkMEuIdtnGWxJOgVDlQe5Tk8mMttBrANgrc.jpg" width="300"/>
    </div>
    <!-- Total Users -->
    <div class="card p-6">
     <h3 class="text-lg font-bold mb-4">
      Total Users
     </h3>
     <p class="text-2xl font-bold">
      97.4K
     </p>
     <p class="text-sm text-gray-400">
      12.5% from last month
     </p>
     <img alt="Line chart showing total users" height="200" src="https://storage.googleapis.com/a1aa/image/m5tLs485x51StJOXgOGPHFxNlKcxnnAC3C6m9XqovMo.jpg" width="300"/>
    </div>
    <!-- Total Clicks -->
    <div class="card p-6">
     <h3 class="text-lg font-bold mb-4">
      Total Clicks
     </h3>
     <p class="text-2xl font-bold">
      82.7K
     </p>
     <p class="text-sm text-gray-400">
      12.5% from last month
     </p>
     <img alt="Bar chart showing total clicks" height="200" src="https://storage.googleapis.com/a1aa/image/R9V2slGc5D6o5HOm39pi7XD7788DcaVxiWbbhqpwoWY.jpg" width="300"/>
    </div>
    <!-- Total Views -->
    <div class="card p-6">
     <h3 class="text-lg font-bold mb-4">
      Total Views
     </h3>
     <p class="text-2xl font-bold">
      68.4K
     </p>
     <p class="text-sm text-gray-400">
      35K users increased from last month
     </p>
     <img alt="Line chart showing total views" height="200" src="https://storage.googleapis.com/a1aa/image/ZxDOjwKZr57xu-ikBNxoNY6vlPwf_qQp8R5hsD-H42A.jpg" width="300"/>
    </div>
    <!-- Total Accounts -->
    <div class="card p-6">
     <h3 class="text-lg font-bold mb-4">
      Total Accounts
     </h3>
     <p class="text-2xl font-bold">
      85,247
     </p>
     <p class="text-sm text-gray-400">
      23.7% from last month
     </p>
     <img alt="Area chart showing total accounts" height="200" src="https://storage.googleapis.com/a1aa/image/1ANCx68xcA8RaKbyOgK1Et541JD3UZE2YRKrSYNXuHw.jpg" width="300"/>
    </div>
    <!-- Social Leads -->
    <div class="card p-6">
     <h3 class="text-lg font-bold mb-4">
      Social Leads
     </h3>
     <ul>
      <li>
       Facebook: 55%
      </li>
      <li>
       LinkedIn: 67%
      </li>
     </ul>
     <img alt="Pie chart showing social leads" height="200" src="https://storage.googleapis.com/a1aa/image/aWs58pqGz42l8GG4nm-pDtyk3_pFIUl832qjbXmoE2s.jpg" width="300"/>
    </div>
   </div>
  </div>
 </body>
</html>
