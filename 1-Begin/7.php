<html>
<head>
  <title>Variable Data Types</title>
</head>
<body>
<pre>

</pre>
<hr>
<pre>
  <code>

    https://www.phpexercises.com/php-variable-data-types-exercise.html

    PHP allows several different types of variables.
    For this PHP exercise, you will create one variable and assign it different values, then test its type for each value.

    Write a script using one variable &ldquo;$whatsit&rdquo; to print the following to the browser.
    Your echo statements may include no words except &ldquo;Value is&rdquo;.
    In other words, use the function that will output the variable type to get the requested text.
    Use simple HTML to print each statement on its own line and add a relevant title to your page.
    Include line breaks in your code to produce clean, readable HTML.

    Value is string.
    Value is double.
    Value is boolean.
    Value is integer.
    Value is NULL.
  </code>
</pre>
<hr>
<pre>
  <code>
    my code:

    $whatsit = "asdf";
    echo 'Value is '.gettype($whatsit);

    $whatsit = 12.2;
    echo 'Value is '.gettype($whatsit);

    $whatsit = true;
    echo 'Value is '.gettype($whatsit);

    $whatsit = 8;
    echo 'Value is '.gettype($whatsit);

    $whatsit = NULL;
    echo 'Value is '.gettype($whatsit);
  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <?php

$whatsit = "asdf";
echo 'Value is '.gettype($whatsit);
echo "<br>";

$whatsit = 12.2;
echo 'Value is '.gettype($whatsit);
echo "<br>";

$whatsit = true;
echo 'Value is '.gettype($whatsit);
echo "<br>";

$whatsit = 8;
echo 'Value is '.gettype($whatsit);
echo "<br>";

$whatsit = NULL;
echo 'Value is '.gettype($whatsit);

    ?>
  </code>
</body>
</html>
