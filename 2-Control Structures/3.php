<html>
<head>
  <title>Simple For Loops</title>
</head>
<body>
<pre>

</pre>
<pre>
  <code>

    https://www.phpexercises.com/php-simple-for-loop-exercise.html

    Loops are very useful in creating lists and tables.
    In this PHP exercise, you will use a loop to create a list of equations for squares.

    Using a for loop, write a script that will send to the browser a list of squares for the numbers 1-12.
    Use the format, &quot;1 * 1 = 1&quot;, and be sure to include code to print each formula on a different line.
  </code>
</pre>
<hr>
<pre>
  <code>
    my code:

    $val = 1;

    for ($val=1; $val <=12 ; $val++) {
      $res = $val*$val;
      echo "$val * $val = $res";
    }
  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <?php

$val = 1;

for ($val=1; $val <=12 ; $val++) {
  $res = $val*$val;
  echo "$val * $val = $res<br>";
}

    ?>
  </code>
</body>
</html>
