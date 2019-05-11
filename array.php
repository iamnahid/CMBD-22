<?php 
    echo "<h1 style='color: #0d60e5;text-decoration: underline;'>"."Array"."</h1>";
    echo "<h3 style='color:blue;'>"."Index Based Array"."</h3>";

    $array = [1, 2, 3];
    echo "<pre>";
    print_r ($array);

    $array1 = ["Nahid", "Uttara", "Male"];
    $array2 = ["Nihaan", "Mirpur", "Male"];

    echo "<h4 style='color: #f7133d;'> Array1 Values: </h4>"."<h4>".$array1[0]."  ".$array1[1]."  ".$array1[2]."</h4>";
    echo "<h4 style='color: #f7133d;'> Array2 Values: </h4>"."<h4>".$array2[0]."  ".$array2[1]."  ".$array2[2]."</h4>";

    echo "</br>";
    echo "<h3 style='color: blue;'>Merged Array</h3>";
    $mergedArray = array_merge ($array1, $array2);
    echo "<pre>";
    print_r ($mergedArray);

    echo "<h3 style='color:blue;'>"."Associative Array"."</h3>";
    $assocArray = [
        'name' => "Md. Nahidul Islam",
        'occ' => "Web Developer",
        'birDate' => "5/12/96"
    ];
    echo "<p>";
    print_r ($assocArray);

    echo "<h3 style='color:blue;'>"."For Loop"."</h3>";
    echo "Print 0-10</br>";
    for ($i = 0; $i<=10; $i++)
    {
        echo "$i ";
    }




?>