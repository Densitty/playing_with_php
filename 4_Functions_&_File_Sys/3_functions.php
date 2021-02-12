<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>
<body>
  <?php
    // supposing we are given a text in a sneak_case, create a function to write the functions in camelCase. E.g;
    // snameToCamel("my_snake_is_exotic") = mySnakeIsExotic
    // lcfirst - lowercases the first character of a word (opp ucfirst);
    // lcword - lowercase the whole word (opp ucword);
    
    function snakeToCamel (string $text, bool $sedateTheCamel = true): string {
      // 1. replace all '_' in text to ' ' (spaces)
      $words = str_replace("_", ' ', $text);
      // 2. turn all the words in the variable above to uppercase chars
      $words_in_upper = ucwords($words);
      if($sedateTheCamel) {
        // remove all spaces btw words and apply lc on text string
        return str_replace(" ", "",lcfirst($words_in_upper));
      }
      
      // remove all spaces btw words 
      return str_replace(" ", "", $words_in_upper);
    }

    $res = snakeToCamel("she_came_to_see_me", false);
    echo $res . "<br/>----------------<br/>";
    $res2 = snakeToCamel("i_am_going_to_her_house");
    echo $res2 . "<br/>----------------<br/>";

    function addNum(int $n1, int $n2): int {
      return $n1 + $n2;
    };

    echo (addNum(2,7.6));
  ?>
</body>
</html>