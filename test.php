<?php

/**
 * Created by PhpStorm.
 * User: MGZ2018051117B
 * Date: 2018/8/24
 * Time: 15:26
 */

/** 学习数组 */
$records = [
    [
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ],
    [
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ],
    [
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ],
    [
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ]
];

$first_names = array_column($records, 'first_name');
var_dump($first_names);
/**  连接,逗号隔开*/
echo join(",",$first_names);
