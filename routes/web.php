<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    
    
    
    $projects = [
        [
            'title' => 'Superstore Sales Dashboard',
            'category' => 'Power BI & Excel',
            'description' => 'Designed an interactive Power BI dashboard to track KPI metrics like monthly sales, profit margins, and regional performance, helping stakeholders identify top-selling products.',
            'link' => '#', // Link to GitHub or Project Image
        ],
        [
            'title' => 'Customer Segmentation (RFM)',
            'category' => 'Advanced SQL',
            'description' => 'Analyzed 50,000+ customer records using SQL window functions and CTEs. Performed RFM (Recency, Frequency, Monetary) analysis to identify high-value and at-risk customers.',
            'link' => '#',
        ],
        [
            'title' => 'Supply Chain Optimization',
            'category' => 'Python (Pandas) & Cleaning',
            'description' => 'Cleaned and processed raw inventory data using Python (Pandas). Identified bottlenecks in the supply chain and visualized stock levels to reduce overstocking by 15%.',
            'link' => '#',
        ]
    ];

    // --- RELEVANT SKILLS FOR ANALYST ---
    $skills = [
        'SQL (Advanced)', 
        'Microsoft Excel', 
        'Power BI', 
        'Python (Pandas)', 
        'Data Cleaning', 
        'Data Visualization'
    ];

    // Passing data to the home view
    return view('home', compact('projects', 'skills'));
});