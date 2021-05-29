<?php

//Array
    //Indexed Array
    $a = ['BMW', 'Lambo','Lexus'];
    //print array
    echo $a[1] . '<br/>'; //print the value of the second value

    //Associative Array
    $b = [
        'Japan' =>'Sushi', 
        'America' => 'Steak'
     ];
    //print array
    echo $b['Japan'] . '<br/>';


    //Multidimentional Array
    $c = [
        'a' => $a, 
        'b' => $b
    ];
    
    $d = [
        'c' => $c,
        'other' => [1,2,3,4,5]
    ];

    //print specific value
    echo $c['a'][0] . '<br/>'; //access BMW
    //var_dump($d); //display array

    //print specific value from d
    echo $d['c']['b']['America'];