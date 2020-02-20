<html>
<head>
  <title>Simple Array Loop</title>
</head>
<body>
<pre>

</pre>
<pre>
  <code>

    https://www.phpexercises.com/php-simple-array-loop-exercise.html

    For this exercise, you will use a list of ten of the largest cities in the world.
    (Please note, these are not the ten largest, just a selection of ten from the largest cities.)
    Create an array with the following values: Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London.

    Print these values to the browser separated by commas, using a loop to iterate over the array.
    Sort the array, then print the values to the browser in an unordered list, again using a loop.

    Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing.
    Sort the array again, and print it once more to the browser in an unordered list.

  </code>
</pre>
<hr>
<pre>
  <code>
    my code:<br><br>

    $capitals = array('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');

    foreach ($capitals as $cap) {
      echo &quot;$cap, &quot;;
    }

    echo &quot;&lt;hr&gt;&quot;;

    sort($capitals);

    echo &quot;&lt;ul&gt;&quot;;
    foreach ($capitals as $cap) {
      echo &quot;&lt;li&gt;$cap&lt;/li&gt;&quot;;
    }
    echo &quot;&lt;/ul&gt;&quot;;

    echo &quot;&lt;hr&gt;&quot;;

    array_push($capitals, &quot;Los Angeles&quot;, &quot;Calcutta&quot;, &quot;Osaka&quot;, &quot;Beijing&quot;);

    sort($capitals);
    echo &quot;\n&lt;ul&gt;\n&quot;;
    foreach($capitals as $cap){
      echo &quot;&lt;li&gt;$cap&lt;/li&gt;\n&quot;;
    }
    echo &quot;&lt;/ul&gt;&quot;;
  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <?php

      $capitals = array('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');

      foreach ($capitals as $cap) {
        echo "$cap, ";
      }

      echo "<hr>";

      sort($capitals);

      echo "<ul>";
      foreach ($capitals as $cap) {
        echo "<li>$cap</li>";
      }
      echo "</ul>";

      echo "<hr>";

      array_push($capitals, "Los Angeles", "Calcutta", "Osaka", "Beijing");

      sort($capitals);
      echo "\n<ul>\n";
      foreach($capitals as $cap){
        echo "<li>$cap</li>\n";
      }
      echo "</ul>";
    ?>
    <hr>
  </code>
</body>
</html>
