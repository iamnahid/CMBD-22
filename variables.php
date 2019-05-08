<?php

    echo "<h1>"."PHP Variables!"."</h1>";
    echo "<h1>"."----------------------"."</h1>";

    $intNumber = 100;
    $intNumberTwo = 50;
    $float = 10.00;
    $double = 5.00;
    $string = 'Dhaka';
    $stringDouble = "This is Bangladesh";

    // showing Variables
    echo "Number: ".$intNumber."</br>";
    echo "Number Two: ".$intNumberTwo."</br>";
    echo "Float: ".$float."</br>";
    echo "Double: ".$double."</br>";
    echo "String(Single): ".$string."</br>";    
    echo "String(Double): ".$stringDouble."</br>";

    echo "</br></br></br>";

    // Variable operations (BIDMAS:Braces_Indices_Division_Multiplication_Addition_Substraction)
    $v1 = 100;
    $v2 = 50;
    $v3 = 10;
    $v4 = 5;

    echo "Variable Values"."</br>";
    echo "-------------------"."</br>";
    echo "v1=".$v1.", v2=".$v2.", v3=".$v3.", v4=".$v4."</br>";
    echo "</br>";

    // ADDING
    $add = $v1 + $v2;
    echo "Add(v1,v2): ".$add."</br>";

    // SUBSTRACTION
    $sub = $v2 - $v3;
    echo "Sub(v2-v3): ".$sub."</br>";

    // Division
    $div = $v3 / $v4;
    echo "Div(v3/v4): ".$div."</br>";

    // Multiplication
    $mul = $v3 * $v4;
    echo "Mul(v3*v4): ".$mul."</br>";

    // Indices
    $ind = $v4 ** $v4;
    echo "Indices(v4 to the power v4): ".$ind."</br>";

    echo "</br>";

    echo "<h5 style='color:red;'>"."Variable operations (BIDMAS:Braces_Indices_Division_Multiplication_Addition_Substraction)"."</h5>";
    echo "Simple Maths:  "."</br>";
    echo "<h6>"."problem 1: "."</h6>";
    $prb1 = (10000/20)+45-33+8*3/5;
    echo "<h5 style='color:red;'>"."(10000/20)+45-33+8*3/5 = ".$prb1."</h5>";
    echo "<h6>"."problem 2: "."</h6>";
    $prb2 = 45-22+23/5*5+(100+6/3*3);
    echo "<h5 style='color:red;'>"."45-22+23/5*5+(100+6/3*3) = ".$prb2."</h5></br>";

    // DEFINE

    define('Name', "Nahid");
    define('Age', 24);
    define('Gender','Male');

    // Concat 

    $d1 = "My Name Is ";
    $d2 = "Nahid";
    $concatData = $d1 . $d2;

    $c1 = "Rony Kader";
    $data = "My Mentor Name Is" ." ". $c1;

    // Functions

    function test(){
        echo "This is Test Function";
    }
    function test1(){
        echo "we are going to call Function TEst from Here. See Below"."</br>";
        test();
    }
    function test2()
    {   
        $name = 'ABC';
        $loc = "Dhaka";
        $occ = "Nil";
        echo "My Name Is: ".$name." ";;
        echo "Location: ".$loc." ";;
        echo "Occupation: ".$occ."</br>";
    }
    function test3($name, $loc, $occ)
    {
        echo "My Name Is: ".$name." ";
        echo "Location: ".$loc." ";
        echo "Occupation: ".$occ."</br>";
        nahid();
    }
    function nahid()
    {
        echo "This is Test3 calling Nahid";
    }


?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h3 style="color:blue;">Showcasing Define Variables</h3>
        <h5>Name:  <?php echo Name?></h5>
        <h5>Age:  <?php echo Age?></h5>
        <h5>Gender:  <?php echo Gender?></h5>

        <p style="text-decoration: underline;color:red;">Concat Data</p>
        <br>
        <?php echo $concatData; ?>
        <br>
        <?php echo $data; ?>
        <p>STRLEN of $DATA = <?php echo strlen($data) ?></p>

        <h3 style="color:blue;">Functions</h3>
        <p><?php echo test() ?></p><br>
        <p><?php echo test1() ?></p>
        <br>
        <p><?php echo test2() ?></p>
        <br>
        <p><?php echo test3('Nahid','Uttara','Web Developer') ?></p>
    </body>
</html>
    