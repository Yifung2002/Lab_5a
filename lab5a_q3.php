<?php
    function calculateArea($length, $width) {
        return $length * $width;
    }

    $length = 4;  
    $width = 2;   

    
    $area = calculateArea($length, $width);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    <p><strong>The area of a rectangle with a width of <?php echo $length;?> and <?php echo $width;?> is <?php echo $area;?> </strong></p>
</body>
</html>
