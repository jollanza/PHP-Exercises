<html>
<head>
  <title>Arithmetic-Assignment Operators and Variables</title>
</head>
<body>
<pre>

  https://www.phpexercises.com/php-arithmetic-assignment-operators-variables.html

  Arithmetic-assignment operators perform an arithmetic operation on the variable at the same time as assigning a new value.
  For this PHP exercise, write a script to reproduce the output below.
  Manipulate only one variable using no simple arithmetic operators to produce the values given in the statements.

  Hint: In the script each statement ends with &quot;Value is now $variable.&quot;

  Value is now 8.
  Add 2. Value is now 10.
  Subtract 4. Value is now 6.
  Multiply by 5. Value is now 30.
  Divide by 3. Value is now 10.
  Increment value by one. Value is now 11.
  Decrement value by one. Value is now 10.
</pre>
<hr>
<pre>
  <code>
    my code:<br><br>
    $value = 8;
    echo "Value is now $value";

    $value = $value + 2;
    echo "Add 2. Value is now $value";

    $value = $value - 4;
    echo "Subtract 4. Value is now $value";

    $value = $value * 5;
    echo "Multiply by 5. Value is now $value";

    $value = $value / 3;
    echo "Divide by 3. Value is now $value";

    $value++;
    echo "Increment value by one. Value is now $value";

    $value--;
    echo "Decrement value by one. Value is now $value";
  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <?php
    $value = 8;
    echo "Value is now $value<br>";

    $value = $value + 2;
    echo "Add 2. Value is now $value<br>";

    $value = $value - 4;
    echo "Subtract 4. Value is now $value<br>";

    $value = $value * 5;
    echo "Multiply by 5. Value is now $value<br>";

    $value = $value / 3;
    echo "Divide by 3. Value is now $value<br>";

    $value++;
    echo "Increment value by one. Value is now $value<br>";

    $value--;
    echo "Decrement value by one. Value is now $value<br>";
    ?>
  </code>
</body>
</html>
