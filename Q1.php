<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Question 1</h1>
    <?php
    function removeVowels($str) {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $result = '';
      
        foreach (str_split($str) as $char) {
            if (!in_array(strtolower($char), $vowels)) {
                $result .= $char;
            }
        }
      
        return $result;
      }
      
      $result = removeVowels("The quick brown fox");
      echo $result;
    ?>
</body>
</html>