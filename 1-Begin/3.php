<html>
<head>
  <title>Arithmetic Operators and Variables</title>
</head>
<body>
<pre>

  https://www.phpexercises.com/php-arithmetic-operators-variables.html

  PHP includes all the standard arithmetic operators. For this PHP exercise, you will use them along with variables to print equations to the browser.
  In your script, create the following variables:
  $x=10;
  $y=7;

  Write code to print out the following:

  10 + 7 = 17
  10 - 7 = 3
  10 * 7 = 70
  10 / 7 = 1.4285714285714
  10 % 7 = 3

  Use numbers only in the above variable assignments, not in the echo statements. You will need a third variable as well.

  Note: this is intended as a simple, beginning exercise, not using arrays or loops. Some of the solutions in comments include these structures.
  If you don't understand them, just keep learning, and you will.
</pre>
<hr>
<pre>
  <code>
    my code:

    $x = 10;
    $y = 7;

    $res = $x + $y;
    echo "$x + $y = $res";

    $res = $x - $y;
    echo "$x - $y = $res";

    $res = $x * $y;
    echo "$x * $y = $res";

    $res = $x / $y;
    echo "$x / $y = $res";

    $res = $x % $y;
    echo "$x % $y = $res";
  </code>
</pre>
<hr>
  <code>
    my output:<br><br>


  <?php

  $x = 10;
  $y = 7;

  $res = $x + $y;
  echo "$x + $y = $res<br>";

  $res = $x - $y;
  echo "$x - $y = $res<br>";

  $res = $x * $y;
  echo "$x * $y = $res<br>";

  $res = $x / $y;
  echo "$x / $y = $res<br>";

  $res = $x % $y;
  echo "$x % $y = $res<br>";
  ?>
  </code>
</body>
</html>
