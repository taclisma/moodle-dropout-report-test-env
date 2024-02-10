<?php


require __DIR__ . '/vendor/autoload.php';
require __DIR__. '/functions.php';
// Create a Mustache instance
$mustache = new Mustache_Engine();


// script for charts
$script = file_get_contents('gcharts.html');


$student = [
    'name'=> 'aluno',
    'course' => 'curso',
    'class' => 'turma',
    
    'semesters' => [
        '2023' => [         // year
            '1' => [        // period
                'comportamentais' => [
                    [2, 2, 7, 2, 0, 2, 2, 2, 2, 2],
                    [1, 1, 2, 2, 2, 2, 1, 2, 6, 2],
                    [6, 6, 0, 2, 1, 2, 3, 3, 0, 4],
                    [0, 6, 8, 2, 1, 0, 3, 3, 0, 4]
                ],
                'sociais' => [
                    [2, 2, 6, 2, 2, 2, 2, 2, 2, 2],
                    [2, 2, 2, 2, 2, 2, 2, 2, 2, 2],
                    [2, 6, 8, 2, 1, 0, 3, 3, 0, 4],
                ],
                'cognitivos' => [
                    [2, 2, 6, 2, 2, 2, 2, 2, 2, 2],
                    [2, 2, 2, 2, 2, 2, 2, 2, 2, 2],
                    [2, 6, 8, 2, 1, 0, 3, 3, 0, 4],
                ]
            ],  
            '2' => ['etc']
        ],
        '2024' => ['1' => ['etc'], '2' => ['etc']]
    ]
];
             
// this div goes when we need a chart, the 
// <div id="chartContainer" style="width: 100%; height: 400px;"></div>
// the generate table goes when we need the table (or on open, its the default)
$table = generate_table($student['semesters'], ['year'=>'2023', 'period'=> '1']);
$lineChart = generate_linechart($student['semesters'], ['year'=>'2023', 'period'=> '1']);
$lineChart = generate_linechart($student['semesters'], ['year'=>'2023', 'period'=> '1']);

// Data to be passed to the template
$data = [
    'student' => $student,
    'script' => $lineChart,
    'table' => $table,
];

// Render the template
$output = $mustache->render(file_get_contents('main.mustache'), $data);

// Output the result
echo $output;