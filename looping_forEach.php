<?php

$fruit = ['apple','banana','orange'];
foreach ($fruit as $value){ //foreach in php. 
    echo $value . '<br/>'; // print the value
}

//using key to check the information of the array
//key to check the number of the array
//var_dump($fruit);
foreach ($fruit as $key => $value){
    echo $value . '<br/>';
}

foreach ($fruit as $key => $value){
    echo $key . '<br/>'; // check the key
}

