<html>
<head>
  <title>Variable Content and Destruction</title>
</head>
<body>
<pre>

</pre>
<hr>
<pre>
  <code>

    https://www.phpexercises.com/php-variable-content-destruction.html

    When you are writing scripts, you will often need to see exactly what is inside your variables.
    For this PHP exercise, think of the ways you can do that, then write a script that outputs the following, using the echo statement only for line breaks.

    string(5) &quot;Harry&quot;
    Harry
    int(28)
    NULL
  </code>
</pre>
<hr>
<pre>
  <code>
    my code:
    $var = "Harry";
    var_dump($var);

    print_r($var);

    var_dump($var);

    $var=null;

    var_dump($var);
  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <?php
$var = "Harry";
$age=28;

var_dump($var);

echo "<br>";

print_r($var);
echo "<br>";

var_dump($age);
echo "<br>";

$var=null;

var_dump($var);

    ?>
  </code>
</body>
</html>
