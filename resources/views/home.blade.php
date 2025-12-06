@extends('layout')

@section('title', 'Md. Mahedi Hassan Hridoy - Data Analyst')

@section('content')

    <section id="home" class="bg-white border-b border-slate-200 overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 py-20 md:py-28 flex flex-col-reverse md:flex-row items-center gap-12">
            
            <div class="flex-1 text-center md:text-left">
                
                <span class="inline-block py-1 px-3 rounded-full bg-blue-100 text-blue-700 text-sm font-semibold mb-6">
                    <i class="fa-solid fa-circle text-xs mr-2 animate-pulse"></i>Available for Remote Work
                </span>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 mb-6 leading-tight">
                    Hi, I'm <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">
                        Md. Mahedi Hassan Hridoy
                    </span>
                </h1>
                
                <h2 class="text-2xl text-slate-700 font-medium mb-6">
                    Data Analyst & Strategist
                </h2>

                <p class="text-lg text-slate-600 max-w-xl mx-auto md:mx-0 mb-8 leading-relaxed">
                    I specialize in transforming complex datasets into actionable business insights. My expertise lies in 
                    <strong>data cleaning, advanced SQL querying,</strong> and creating interactive dashboards using 
                    <strong>Power BI & Excel</strong> to drive data-informed decisions.
                </p>

                <div class="flex justify-center md:justify-start gap-4">
                    <a href="#projects" class="bg-blue-600 text-white px-8 py-3.5 rounded-lg font-semibold hover:bg-blue-700 transition shadow-lg shadow-blue-200/50">
                        See My Projects
                    </a>
                    <a href="#contact" class="px-8 py-3.5 rounded-lg font-semibold text-slate-700 hover:bg-slate-100 transition border border-slate-300">
                        Contact Me
                    </a>
                </div>
            </div>

            <div class="relative z-10 py-5 pl-5">
                <div class="absolute top-0 right-0 w-full h-full bg-blue-50 rounded-3xl transform translate-x-4 translate-y-4 z-0"></div>
                
                <div class="relative w-72 md:w-80 h-96 md:h-[450px] rounded-3xl overflow-hidden border-4 border-white shadow-xl z-10 bg-slate-100">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Md. Mahedi Hassan Hridoy" class="w-full h-full object-cover object-center transform hover:scale-105 transition duration-500">
                </div>
            </div>

        </div>
    </section>


    <div class="bg-slate-50 border-b border-slate-200 py-10">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <span class="text-slate-500 font-bold uppercase tracking-wider text-sm">Technical Proficiency:</span>
            
            <div class="flex flex-wrap justify-center gap-8 items-center text-3xl text-slate-400">
                <i class="fa-brands fa-python hover:text-blue-600 transition" title="Python"></i>
                <i class="fa-solid fa-database hover:text-blue-800 transition" title="SQL"></i>
                <i class="fa-solid fa-file-excel hover:text-green-600 transition" title="Excel"></i>
                <i class="fa-solid fa-chart-simple hover:text-yellow-500 transition" title="Power BI"></i>
                <i class="fa-brands fa-git-alt hover:text-red-500 transition" title="Git"></i>
            </div>
        </div>
    </div>


    <section id="about" class="bg-white py-20 border-b border-slate-100">
        <div class="max-w-4xl mx-auto px-6">
            
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-slate-900">About Me</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">My Mission</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        I am a detail-oriented Data Analyst with a passion for helping businesses make sense of their numbers. 
                        I don't just write code; I look for the "Why" behind the data. My goal is to bridge the gap between 
                        raw complex data and strategic business decisions.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Currently, I am focusing on building predictive models and automating reporting systems to save time and increase accuracy.
                    </p>
                </div>

                <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100">
                    <h3 class="text-xl font-bold text-slate-800 mb-4">What I Bring</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-blue-600 mt-1 mr-3"></i>
                            <span class="text-slate-600 text-sm">Problem-Solving Mindset</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-blue-600 mt-1 mr-3"></i>
                            <span class="text-slate-600 text-sm">Strong Statistical Foundation</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-blue-600 mt-1 mr-3"></i>
                            <span class="text-slate-600 text-sm">Business Communication</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-blue-600 mt-1 mr-3"></i>
                            <span class="text-slate-600 text-sm">Data Storytelling & Visualization</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section id="projects" class="max-w-6xl mx-auto px-6 py-24">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Featured Projects</h2>
                <p class="text-slate-600 max-w-2xl">
                    A selection of case studies demonstrating my data analysis capabilities.
                </p>
            </div>
            <a href="#" class="hidden md:flex items-center gap-2 text-blue-600 font-semibold hover:underline mt-4 md:mt-0">
                View GitHub Profile <i class="fa-brands fa-github"></i>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @foreach($projects as $project)
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col h-full group">
                
                <div class="h-48 bg-slate-100 flex items-center justify-center text-slate-300 group-hover:bg-blue-50 transition">
                    <i class="fa-solid fa-chart-pie text-5xl group-hover:text-blue-200 transition"></i>
                </div>

                <div class="p-8 flex flex-col flex-grow">
                    <div class="mb-4">
                        <span class="text-xs font-bold text-blue-700 bg-blue-50 px-3 py-1.5 rounded-full tracking-wide">
                            {{ $project['category'] }}
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition">
                        {{ $project['title'] }}
                    </h3>

                    <p class="text-slate-600 text-sm mb-6 leading-relaxed flex-grow">
                        {{ $project['description'] }}
                    </p>

                    <a href="{{ $project['link'] }}" target="_blank" class="inline-flex items-center font-semibold text-sm text-blue-600 hover:text-blue-800 transition">
                        View Analysis <i class="fa-solid fa-arrow-right-long ml-2"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center">
            <a href="#" class="inline-block border border-slate-300 text-slate-700 px-6 py-3 rounded-full font-medium hover:bg-blue-50 hover:text-blue-600 hover:border-blue-600 transition duration-300">
               View All Projects &rarr;
            </a>
        </div>

    </section>

@endsection