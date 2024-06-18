<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first</title>
</head>
<body>
    <h3>My first php page.</h3>
    <?php
    // echo "hello world";

    //* PHP Case Sensitivity
    
    //* keywords are not sensitive

    // ECHO "hello world <br>"; 
    // echo "hello world <br>"; 
    // Echo "hello world <br>";

    //* Variables are case sensitive.

    // $color = "red";
    // echo "my car is " .$color. "<br>";
    // echo "my boat is " .$COLOR. "<br>";
    // echo "my house is " .$coLOR. "<br>";

    //* Comments in Php
    // This is single line comment
    #This is also a single line comment
    /* 
    This
    is
    multiple
    line
    comment
    */
    
    //* Creating (Declaring) PHP Variables
    // $txt ="hello world";
    // $x = 5;
    // $y =10.5;

    // *Output Variables
    // $a = "Php";
    // echo "welcome to $a";
    
    //* Adding two variables
    // $x = 11;
    // $y = 10;
    // echo $x + $y;

    /*$x = 5; //*Global scope
    function myTest(){
    // using x inside this function will generate an error
    $x = 6; //*Local scope
    echo "<p>variable x inside this function $x <p>";
    }
    myTest();
    echo "<p>variable x inside this function $x <p>";*/
    // $x = 8;
    // $y = 7;
    // function myFunction(){
    //     global $x, $y;
    //     $y = $x+ $y;
    // }
    // myFunction();
    // echo $y; //Output 15

    // $x = 5;
    // $y = 2;
    // function myTest(){
    //     $GLOBALS['y'] = $GLOBALS['y'] +$GLOBALS['x']; 
    // }
    // myTest();
    // echo $y; //Output 7

    //? Static keyword stores the previous value in the variable
    // function sayHello(){
    //     static $x = "Hi";
    //     echo $x;
    //     $x++;

    //     sayHello();
    //     sayHello();
    //     sayHello();
    // }

    // echo "<h2> Php is fun! <h2>"; 
    // echo "Hello world !<br>" ;
    // echo "I am about to learn !<br>" ;
    // echo "This ","is ","multi ","string ","parameter"; 
    
    // $txt1 = "Learn php" ;
    // $txt2 = "Tech Centre"; 
    // $x = 5;
    // $y = 4;
    
    // echo "<h2>$txt1<h2>";
    // echo "Study php at $txt2 <br>";
    // echo "$x+$y";
    
    // print "<h2> Php is fun! <h2>"; 
    // print "Hello world !<br>" ;
    // print "I am about to learn !<br>" ;
    
    //* Php Data Types:
    // 1. Strings
    // $x = "String";
    // $y = "Another string";

    // echo $x;
    // echo $y;

    //* 2.Integers
    // $a = 59889;
    // $b = "Etta Pearson";
    // var_dump($a);

    // var_dump($b);
    
    //* 3.Float
    // $n = 10.29647;
    // var_dump($n);
    
    //* 4.Boolean
    // $t = true;
    // $f = false;
    // var_dump($t);
    // var_dump($f);
    
    //* 5.Arrays
    // $cars = array ("Volvo","BMW","Mercedes","Toyota");
    // var_dump($cars);

    //* Php String Function
    // echo strlen("unusual ship angle baseball stairs ");
    // echo str_word_count("unusual ship angle baseball stairs ");
    // echo strrev("unusual ship angle baseball stairs ");
    // echo strpos("unusual ship angle baseball stairs ","ship");
    // Todo: Ask doubt
    // echo str_replace("ship", "unusual ship angle baseball stairs ", "cricket");
    
    //* Php Integers:
    // $x = 32781;
    // var_dump(is_int($x));
    //! This is int
    // $y = 96.845;
    // var_dump(is_int($y));
    //! This is not an int
    
    //* Php Float:
    // $z = 16.2288;
    // var_dump(is_float($z));
    
    //* Php Infinity:
    // $a = 276e1760;
    // var_dump(is_infinite($a));

    //* Php Nan:
    // $n =acos(8);
    // var_dump($n);

    //* Php Numerical Strings:
    // $a = 5941;
    // var_dump(is_numeric($a));
    // $b = 6949;
    // var_dump(is_numeric($b));
    // $c = 852.699 + 1000;
    // var_dump(is_numeric($c));
    // $d = "Hey!";
    // var_dump(is_numeric($d));

    //*Php casting strings and floats to Integers:


    //! Cast float to Integer:
    
    // $i = 22897.1289;
    // $int_cast =(int)$i;
    // echo $int_cast;
    
    //! Cast string to int:
   
    // $h = "53128.4616";
    // $int_cast= (int)$h;
    // echo $int_cast;

    //* PHP min() and max()
    // echo (min(45,65,985,-745,-32,8557,55)); 
    // echo (max(45,65,985,-745,-32,8557,55)); 

    //* PHP abs()
    // echo (abs(-47.014));

    //*Php sqrt()
    // echo (sqrt(81));

    //*PHP round()
    // echo (round(0.6049));
    // echo (round(0.16274));
    
    //* Random Numbers 
    // echo (rand(100000, 999999));
    //! Set Range:(min,max)
    
    //*PHP Operators:

    //* 1• Arithmetic operators
        // $x=10;
        // $y=6;

        // echo $x + $y;
        // echo $x - $y;
        // echo $x * $y;
        // echo $x / $y;
        // echo $x % $y;
        // echo $y ** $x;
        
    //* 2• Assignment operators 
        /*$a =2;
        echo $a;
        $b=20;
        $b +=100;
        echo $b;
        $c=50;
        $c-=30;
        echo $c;
        $d = 5;
        $d *=6;
        echo $d;
        $e = 10;
        $e /= 5;
        echo $e;
        $f = 15; 
        $f %=4;
        echo $f;*/
    
    //* 3• Comparison operators
    
    /*
    $x = 100;
    $y = "100";
    var_dump($x == $y);
    var_dump($x === $y);
    var_dump($x != $y);
    var_dump($x <> $y);
    var_dump($x !== $y);
    
    $a = 100; 
    $b = 50;
    var_dump($a < $b);
    var_dump($a > $b);
    var_dump($a <= $b);
    var_dump($a >= $b);
    var_dump($a <=> $b);
    */

    
    //* 4• Increment/Decrement operators 
    /*
    $r =10;
    echo ++$r;
    echo $r++;
    echo $r--;
    echo --$r;
    */

    //* 5• Logical operators
    /*
    $m = 43;
    $n = 78;
    
    if($m == 43 and $n == 78){
        echo "Both the conditions are true";
    }    
    if($m == 43 or $n == 78){
        echo "Either of the condition is true";
    }    
    if($m == 43 xor $n == 51){
        echo "One of the condition is true but not both";
    }
    if($m == 43 && $n == 78){
        echo "Both conditions are true";
    }
    if ($m == 89 || $n == 78){
        echo "At least one of the condition is true";
    }
    if (!($m == 43)){
        echo "This message will be printed if condition is NOT true";
    }
    */
    //* 6• String operators
    // $txt1 = "Hello";
    // $txt2 = "World!";
    
    //? Concatenation
    // echo $txt1.$txt2;
    
    //? Concatenation assignment
    // echo $txt1 .= $txt2;

    //* 7• Array operators 
    // $x = array("a" => "red", "c" => "blue");
    // $y =array("b" => "green" , "d" => "yellow");
    // print_r($x + $y);
    // var_dump($x == $y);
    // var_dump($x === $y);
    // var_dump($x != $y);
    // var_dump($x <br> $y);
    // var_dump($y !== $x);
    
    //? 8• Conditional assignment operators 
    
    
    //* If Statement

    // Syntax
    // if(condition){
    //code to be executed if statement if true
    // }
    
    // Example 1:
    // if(5>3){
    //     echo "Have A Good Day!";
    // }
        
    // Example 2:
    // $t = date("H");
    // echo "</br>";
    // if($t <= "20"){
    //     echo "Have A Nice Day!";
    // }
    // -------------------------------------------
    
    // If Else Statement
        
    // Syntax
    // if(condition){
    //  statement is true;
    // }else{
    //  statement is false;
    // }
                
    // Example 3 :
    // $t = date("H");
    // if($t <= 20){
    //     echo "Have a Good Day!";
    // }else{
    //     echo "Have a Good Night";
    // }
    // -------------------------------------------
    

    // If Elseif Else Statement
    
    // Syntax:
    // if (condition){
    // code to be executed if this condition is true;
    // }elseif(condition){
    // code to be executed if condition is false then this is true;
    // }else{
    // code to be executed if all the conditions are false;
    // }

    // Example 4:
    $t = date("H");
    if ($t < 10){
        echo "Have a Good Morning!";
    }elseif($t < 20){
        echo "Have a Good Afternoon!";
    }else{
        echo "Have a Good Night!";
    }
    // Till page no. 37
    //*Php For Each Loop
    /*
    // Example 1:
    // $color = array("Red", "Green" , "Blue" , "Yellow");
    // foreach ($color as $value){
    //     echo "value <br>";
    // }

    // $age = array(" Petter" =>"35", "Ben" => "27", "Joe" =>"42");
    // foreach($age as $x => $val){
    //     echo " $x = $val<br>";
    // } */

    //*Php Break
    
    // for ($x = 0; $x < 10; $x++){
    //     if($x==4){
    //         break;
    //     }
    //     echo "The number is $x <br>";
    // }
    
    //*Php Continue







    ?>
</body>
</html>