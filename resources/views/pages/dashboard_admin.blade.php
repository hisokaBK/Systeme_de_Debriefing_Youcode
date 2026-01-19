<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Dashboard - Pedagogical Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0d59f2",
                        "background-light": "#fafafa", // RGB(250,250,250)
                        "background-dark": "#101622",
                        "secondary-light": "#f2f2f2", // RGB(242,242,242)
                    },
                    fontFamily: {
                        "display": ["Lexend"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Lexend', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-nav {
            background-color: #0d59f2;
            color: white !important;
        }
        .active-nav span {
            color: white !important;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111318] dark:text-white min-h-screen">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar Navigation -->
<aside class="w-64 bg-secondary-light dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 flex flex-col">
<div class="p-6 flex items-center gap-3">
<div class="bg-primary rounded-lg p-2 flex items-center justify-center text-white">
<span class="material-symbols-outlined">school</span>
</div>
<div>
<h1 class="text-base font-bold leading-tight">Admin Panel</h1>
<p class="text-xs text-gray-500 dark:text-gray-400">Pedagogical Mgmt</p>
</div>
</div>
<nav class="flex-1 px-4 py-4 space-y-1 overflow-y-auto">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg active-nav transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">Users</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">class</span>
<span class="text-sm font-medium">Classes</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">rocket_launch</span>
<span class="text-sm font-medium">Sprints</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">psychology</span>
<span class="text-sm font-medium">Competencies</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">bar_chart</span>
<span class="text-sm font-medium">Statistics</span>
</a>
</nav>
<div class="p-4 border-t border-gray-200 dark:border-gray-800">
<div class="flex items-center gap-3 p-2">
<div class="w-10 h-10 rounded-full bg-cover bg-center" data-alt="Admin user profile headshot" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBWpabHRTUwS7R6wjv-RdCf9ZPdz1l3dNiX2wfCj4G7a443PkVPcEBFDKQ7UE3TWS9gQh9xaNgU3Ytfc9OwFaSqMz19ugUkGbdmLujMZWZ4qfQV50cRdJKu6WuirE2AkAQe1MDMc6TmNrkchA8s5p3bDT_4IEtervAy5we46M0e7nPQAkFI0oSby_0Y7kZB5uZnGW7PDXCD7qju4T_8OqgRYFQwPaXb8ETQ-R_eirfSd04b-0H26X1o2o5qSbQQvafKvh_MzKi5Qg');"></div>
<div class="flex-1 overflow-hidden">
<p class="text-sm font-semibold truncate">Alex Rivera</p>
<p class="text-xs text-gray-500 truncate">System Admin</p>
</div>
<button class="text-gray-400 hover:text-gray-600">
<span class="material-symbols-outlined">logout</span>
</button>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col overflow-hidden">
<!-- Top Navigation Bar -->
<header class="h-16 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800 px-8 flex items-center justify-between z-10">
<div class="flex items-center gap-4">
<div class="flex items-center text-sm font-medium text-gray-500">
<span class="hover:text-primary cursor-pointer">Admin</span>
<span class="material-symbols-outlined mx-1 text-base">chevron_right</span>
<span class="text-[#111318] dark:text-white font-semibold">Dashboard</span>
</div>
</div>
<div class="flex items-center gap-6">
<div class="relative w-64">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xl">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-background-light dark:bg-gray-800 border-none rounded-lg text-sm focus:ring-2 focus:ring-primary" placeholder="Search data..." type="text"/>
</div>
<div class="flex items-center gap-3">
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-background-light dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-gray-200">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-background-light dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-gray-200">
<span class="material-symbols-outlined">settings</span>
</button>
</div>
</div>
</header>
<!-- Content Scrollable Area -->
<div class="flex-1 overflow-y-auto p-8 space-y-8">
<!-- Welcome Section -->
<div>
<h2 class="text-2xl font-bold tracking-tight">System Overview</h2>
<p class="text-gray-500 dark:text-gray-400">Monitoring real-time pedagogical performance across all cohorts.</p>
</div>
<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<p class="text-gray-500 text-sm font-medium">Total Students</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">groups</span>
</div>
<p class="text-3xl font-bold">1,284</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-green-500 text-sm">trending_up</span>
<span class="text-green-500 text-xs font-semibold">+12% this month</span>
</div>
</div>
<div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<p class="text-gray-500 text-sm font-medium">Active Classes</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">school</span>
</div>
<p class="text-3xl font-bold">42</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-green-500 text-sm">trending_up</span>
<span class="text-green-500 text-xs font-semibold">+2 new cohorts</span>
</div>
</div>
<div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<p class="text-gray-500 text-sm font-medium">Pending Briefs</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">assignment_late</span>
</div>
<p class="text-3xl font-bold">18</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-orange-500 text-sm">priority_high</span>
<span class="text-orange-500 text-xs font-semibold">Requires attention</span>
</div>
</div>
<div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<p class="text-gray-500 text-sm font-medium">Competencies Tracked</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">task_alt</span>
</div>
<p class="text-3xl font-bold">256</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-primary text-sm">verified</span>
<span class="text-primary text-xs font-semibold">Across 12 sectors</span>
</div>
</div>
</div>
<!-- Recent Activity Table -->
<div class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm overflow-hidden">
<div class="px-6 py-5 border-b border-gray-200 dark:border-gray-800 flex justify-between items-center">
<h3 class="text-lg font-bold">Recent Activity</h3>
<button class="text-sm text-primary font-medium hover:underline">View all reports</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-background-light dark:bg-gray-800/50">
<th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Date</th>
<th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">User</th>
<th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Action</th>
<th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
<th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-200 dark:divide-gray-800">
<tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
<td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Oct 24, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-xs font-bold text-blue-600">JD</div>
<span class="text-sm font-medium">Jane Doe</span>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">Submitted Sprint 4 Evaluation</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Review Pending</span>
</td>
<td class="px-6 py-4">
<button class="text-primary hover:text-blue-700 text-sm font-semibold">View Details</button>
</td>
</tr>
<tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
<td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Oct 23, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center text-xs font-bold text-purple-600">ML</div>
<span class="text-sm font-medium">Marc Lucas</span>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">Competency Validated: React JS</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Completed</span>
</td>
<td class="px-6 py-4">
<button class="text-primary hover:text-blue-700 text-sm font-semibold">View Details</button>
</td>
</tr>
<tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
<td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Oct 23, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center text-xs font-bold text-orange-600">SM</div>
<span class="text-sm font-medium">Sarah Miller</span>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">New Class Registered: UI/UX 2024</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Active</span>
</td>
<td class="px-6 py-4">
<button class="text-primary hover:text-blue-700 text-sm font-semibold">View Details</button>
</td>
</tr>
<tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
<td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Oct 22, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-xs font-bold text-red-600">RK</div>
<span class="text-sm font-medium">Robert King</span>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">Brief Deadline Missed</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Overdue</span>
</td>
<td class="px-6 py-4">
<button class="text-primary hover:text-blue-700 text-sm font-semibold">Notify User</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Secondary Content Grid (Placeholder for extra dashboard data) -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pb-8">
<div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800">
<h4 class="font-bold mb-4">Class Distribution</h4>
<div class="flex flex-col gap-4">
<div class="space-y-1">
<div class="flex justify-between text-xs font-medium">
<span>Fullstack Development</span>
<span>78%</span>
</div>
<div class="w-full bg-gray-100 rounded-full h-2">
<div class="bg-primary h-2 rounded-full" style="width: 78%"></div>
</div>
</div>
<div class="space-y-1">
<div class="flex justify-between text-xs font-medium">
<span>Data Science</span>
<span>62%</span>
</div>
<div class="w-full bg-gray-100 rounded-full h-2">
<div class="bg-primary h-2 rounded-full" style="width: 62%"></div>
</div>
</div>
<div class="space-y-1">
<div class="flex justify-between text-xs font-medium">
<span>Digital Marketing</span>
<span>45%</span>
</div>
<div class="w-full bg-gray-100 rounded-full h-2">
<div class="bg-primary h-2 rounded-full" style="width: 45%"></div>
</div>
</div>
</div>
</div>
<div class="bg-primary/5 dark:bg-primary/10 p-6 rounded-xl border border-primary/20 flex flex-col items-center justify-center text-center">
<div class="w-16 h-16 bg-primary/20 rounded-full flex items-center justify-center text-primary mb-4">
<span class="material-symbols-outlined text-4xl">add_chart</span>
</div>
<h4 class="font-bold text-[#111318] dark:text-white">Create New Report</h4>
<p class="text-sm text-gray-600 dark:text-gray-400 mt-2 mb-4">Generate custom pedagogical statistics for stakeholders.</p>
<button class="bg-primary text-white px-6 py-2 rounded-lg text-sm font-bold shadow-lg shadow-primary/30 hover:bg-blue-700 transition-all">
                            Open Builder
                        </button>
</div>
</div>
</div>
</main>
</div>
</body></html>