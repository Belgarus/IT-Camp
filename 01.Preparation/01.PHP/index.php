<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-test</title>
</head>
<body>
    <?php                                       #php = Hypertext Preprocessor
    echo "My first PHP script!";
    echo "<br>"; //new line
    $php = "PHP is fun!";
    echo $php;
    echo "<br>"; 

    //Data Types
    //Integer (Whole Numbers)
    $Integer = 5; 
    echo "Integer: " . $Integer;
    echo "<br>"; 
    //Float (Decimal Numbers)
    $float = 3.141;
    echo $float;
    echo "<br>"; 
    //Strings (text)
    $string = "I'm a String!";
    echo $string;
    echo "<br>";
    //Boolean (True/False)
    $boolean = true;
    echo $boolean;
    $boolean = false;
    echo $boolean;
    echo "<br>";

    //Arrays (Group of Values)
    $arrays = array(1, 2, "Three");
    echo $arrays[0]; //Output: 1
    echo "<br>";
    //Assosiative Array
    $arrays = array("Name" => "Noah", "Age" => 99);
    echo $arrays['Name'];
    echo "<br>";
    ?>
</body>
</html>