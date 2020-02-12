<html>
<head>
  <title>Nested For Loops</title>
</head>
<body>
<pre>

  https://www.phpexercises.com/php-nested-for-loops-exercise.html
  
  HTML tables involve a lot of repetitive coding - a perfect place to use for loops.
  You can do even more if you nest the for loops.

  In this PHP exercise, use two for loops, one nested inside another.
  Create the following multiplication table:

  1	2	3	4	5	6	7
  2	4	6	8	10	12	14
  3	6	9	12	15	18	21
  4	8	12	16	20	24	28
  5	10	15	20	25	30	35
  6	12	18	24	30	36	42
  7	14	21	28	35	42	49


  Unless you want to try your hand at CSS styling, don't be concerned about the appearance of the table, its borders and text alignment.
  The point of the exercise it to create the data and the table tags using the for loops.
</pre>
<pre>
  <code>


  </code>
</pre>
<hr>
<pre>
  <code>
    my code:

    echo &quot;&lt;table&gt;&quot;;
    for ($x=1; $x &lt;=7 ; $x++) {
      echo &quot;&lt;tr&gt;&quot;;
      for ($y=1; $y &lt;=7 ; $y++) {
        $res = $x * $y;
          echo &quot;&lt;td&gt;$res&lt;/td&gt;&quot;;
      }
      echo &quot;&lt;/tr&gt;&quot;;
    }
    echo &quot;&lt;/table&gt;&quot;;

  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <?php

    echo "<table>";
    for ($x=1; $x <=7 ; $x++) {
      echo "<tr>";
      for ($y=1; $y <=7 ; $y++) {
        $res = $x * $y;
          echo "<td>$res</td>";
      }
      echo "</tr>";
    }
    echo "</table>";

    ?>
  </code>
</body>
</html>
