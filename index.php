<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Order food & drinks</title>
</head>

<body>
    <?php echo "Hello, Echo!<br/>\n"; ?> 
    <?php print "Hello print!<br/>\n"; ?>
    <?php printf ("Hi, printfunction!<br/>\n"); ?>
    <?php echo "Hi, I am learning php from scratch you mofo!<br/>\n"?>
    <?php 
    $str = "I will be back by ";
    $num = 5;   
        echo $str; echo " ";
        echo $num;
        echo "<br/>\n"; 
    ?>
   <!---boolean-->
    <?php
    $bar = true;
    if ($bar) 
    {
        echo "true"; 
    }
    else "fals";
    echo "<br/>\n"; 
    ?>
    <!---integer_//use_vardump-->
    <?php
    $negative = -3 ; //negative
    $zero = 0 ; //can be null or fals (boolean)
    $positive = 123; //pos dec
    $zeroPos = 0132 ; //zero positive is used for octal value = 8number (0-7)value (83decimal)
    $hex = 0xAB ; //0x pefix is used in hexidecimal values = 171 decimal (16diffrentsymbols)
    $bin = 01010 ; //bin prifix used for binary values (decimal)
    ///////////////////////////////floats (decimal numbers)
    $foo1 = 1.23;
    $foo2 = 10.0;
    $bar1 = -INF;
    $bar2 = NAN;
    var_dump($foo1,$foo2,$bar1,$bar2);
    echo "<br/>\n"; 
    var_dump ($negative,$zero,$positive,$zeroPos,$hex,$bin);
    echo "<br/>\n"; 
    ?>
<?php
    ///////////////////////////////array
    $products = array(1,2,3); //array of integers
    $bar = ["Jeej",true,123 => 5]; //short array syntax
    echo $bar [0]; //returns the first value of the array
    echo "<br/>\n"; 
    echo $bar[1]; //returns the second value of the array
    echo "<br/>\n";  //new line
    echo $bar[123]; //returns 5
    //echo $products; //will only call the named array but not the integers unless you define it?
    #echo $bar[1234]; //  will give an error because 1234 is inaccessable
    //associative array (contains one or more key's that arnt any integers)
    $bar = array();
    $array ["foo"] = "bar";
    $array ["bar"] = "cool";
    $array [42]="hello";
    echo $array["bar"]; // will give guux
    echo "<br/>\n"; 
    echo $array[42]; //will give hello
    echo "<br/>\n"; 
    //////string (array of characters that can return an individual character out of the string)
    $joo = "To cool for school";
    echo $joo;
    echo "<br/>\n";
    echo $joo[3]; //print 3th character from array

?>

    
     



   
   



<!--
    1.create input field for products
    2.create drobdown for foodproducts & drink products
    3.create a search loop to place products???
    4.form validation'your email has been send'
    //from here we do small exercises 
    //Get-method ===== --> 
     
<section class="container">
    <h4 class="center">Order food in restaurant "the Personal Ham Processors"</h4>
</section>

</body>
</html>
