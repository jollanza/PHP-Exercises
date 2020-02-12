<html>
<head>
  <title>Simple Loops</title>
</head>
<body>
<pre>

</pre>
<pre>
  <code>

    https://www.phpexercises.com/php-simple-loops-exercise.html

    In this PHP exercise, you will put all the loops through their paces.
    Write a script using first a while loop, then a do while loop, then two for loops.
    The script will output the following to the browser:

    abc abc abc abc abc abc abc abc abc

    xyz xyz xyz xyz xyz xyz xyz xyz xyz

    1 2 3 4 5 6 7 8 9

    Item A
    Item B
    Item C
    Item D
    Item E
    Item F
    Create the 'abc' row with a while loop, the 'xyz' row with a do while loop, and the last two sections with for loops.
    Remember to include HTML and source code line breaks in your output. No arrays allowed in this solution.
  </code>
</pre>
<hr>
<pre>
  <code>
    my code:

    $abc = 1;
    while ($abc <= 9) {
      echo "abc ";
      $abc++;
    }

    $xyz = 1;
    do {
      echo "xyz ";
      $xyz++;
    } while ($xyz <= 9);

    for ($i=1; $i <= 9; $i++) {
      echo $i." ";
    }

    for ($i='A'; $i < 'G' ; $i++) {
      echo "Item ".$i;
    }

  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <?php

$abc = 1;
while ($abc <= 9) {
  echo "abc ";
  $abc++;
}

echo "<br>----------<br>";

$xyz = 1;
do {
  echo "xyz ";
  $xyz++;
} while ($xyz <= 9);

echo "<br>----------<br>";

for ($i=1; $i <= 9; $i++) {
  echo $i." ";
}

echo "<br>----------<br>";

for ($i='A'; $i < 'G' ; $i++) {
  echo "Item ".$i."<br>";
}

    ?>
  </code>
</body>
</html>
