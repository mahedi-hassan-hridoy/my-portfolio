<!DOCTYPE html>
<html lang="en" class="scroll-smooth"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Data Analyst Portfolio')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="/" class="text-xl font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-database text-blue-600"></i> <span>Analytics<span class="text-blue-600">Pro</span></span>
            </a>

            <ul class="hidden md:flex space-x-8 text-sm font-medium text-slate-600">
                <li><a href="#home" class="hover:text-blue-600 transition">Home</a></li>
                <li><a href="#about" class="hover:text-blue-600 transition">About Me</a></li>
                <li><a href="#projects" class="hover:text-blue-600 transition">Projects</a></li>
                <li><a href="javascript:void(0)" class="text-slate-400 cursor-default flex items-center gap-1" title="Coming Soon">
                      Resume <i class="fa-solid fa-arrow-up-right-from-square text-xs opacity-50"></i>
                     </a>
                </li>
                <li><a href="#contact" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Contact</a></li>
            </ul>

            <button class="md:hidden text-slate-600">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer id="contact" class="bg-slate-900 text-slate-400 py-12 mt-auto">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            <div>
                <h3 class="text-white text-lg font-semibold mb-4">About</h3>
                <p class="text-sm leading-relaxed">
                    Focused on transforming raw data into actionable business insights through statistical analysis and visualization.
                </p>
            </div>
            <div>
                <h3 class="text-white text-lg font-semibold mb-4">Quick Links</h3>
                 <ul class="text-sm space-y-2">
                    <li><a href="#projects" class="hover:text-white transition">Projects</a></li>
                    <li><a href="#" class="hover:text-white transition">Resume</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white text-lg font-semibold mb-4">Connect</h3>
                <div class="flex justify-center md:justify-start gap-4">
                    <a href="#" class="text-2xl hover:text-white transition"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" class="text-2xl hover:text-white transition"><i class="fa-brands fa-github"></i></a>
                    <a href="mailto:your@email.com" class="text-2xl hover:text-white transition"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>
       <div class="text-center text-xs mt-12 pt-8 border-t border-slate-800 text-slate-500">
    &copy; {{ date('Y') }} All Rights Reserved to <span class="text-slate-300 font-semibold">Md. Mahedi Hasan Hridoy</span>.
</div>
    </footer>

</body>
</html>