<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Question 3</h1>
    <?php
    function countOnes($arr) {
        $count = 0;
        foreach ($arr as $subArr) {
            foreach ($subArr as $num) {
                if ($num === 1) {
                    $count++;
                }
            }
        }
        return $count;
    }
    
    $numArr = [
        [1, 2, 1, 1],
        [2, 3, 5, 1, 5, 6],
        [6, 20, 1, 5]
    ];
    
    $result = countOnes($numArr);
    echo $result;
    ?>
</body>
</html>