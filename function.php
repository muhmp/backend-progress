<?php

function HelloWorld(){  //() in function means parameter
    echo "Hello World". '<br/>';
}
//function must be called in order to show the results
HelloWorld();



function sum($a , $b){ // parameter
    $total = $a + $b;
    echo $total;
}
sum(10,5);//arguments



function yourName($name){ //in this case parameter included with variable name inside
    echo "Hello, " .$name. '<br/>';
}
yourName("Matt"); // ("value"): arguments
yourName("Jo");
yourName("Adam");


function yourName1($name1 = 'Without name'){ //if value is empty the function cant be running
        echo "Hello, " .$name1. '<br/>';
}
//yourName("Matt"); // ("value"): arguments

yourName1();