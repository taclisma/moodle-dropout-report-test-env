<?php

$tableData = [
    'Comportamentais' => [
        'Acompanhamento ao cronograma' =>[
            1.0, 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 0.0, 5.0
        ]

    ]
];
// aluno > meses (fev a março) > etapas (q1 e q2) > 10 indicadores (numeros decimais de 0 a 10)
$tableData2 = [
    // meses
    'fev' => [
        // etapas
        'Q2' => [ //10 valores de row
            1.0, 2.4, 3.5, 4.6, 5.3, 6.9, 7.1, 8, 9, 1
        ],
    ],
    'mar' => [
        'Q1' => [ //10 valores de row
            1.0, 2.4, 3.5, 4.6, 5.3, 6.9, 7.1, 8, 9, 1
        ],
        'Q2' => [ //10 valores de row
            1.0, 2.4, 3.5, 4.6, 5.3, 6.9, 7.1, 8, 9, 1
        ]
    ]
];