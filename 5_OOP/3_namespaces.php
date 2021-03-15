<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Namespaces</title>
</head>
<body>
  <?php
    use \HTML as Web;
    use \Table as TT;

    require("./3_1_namespace_page.php");
    require("./3_2_namespace_table.php");

    $html = new Web\Page();

    echo $html -> createPage();
    echo "<br/>";
    echo TT\make_table();
    echo "<br/>";
    echo \HTML\make_table();

  ?>
</body>
</html>