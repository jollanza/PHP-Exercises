<html>
<head>
  <title>Simple Array</title>
</head>
<body>
<pre>

</pre>
<pre>
  <code>

    https://www.phpexercises.com/php-simple-array-exercise.html

    Arrays allow you to assign multiple values to one variable.
    For this PHP exercise, write an array variable of weather conditions with the following values: rain, sunshine, clouds, hail, sleet, snow, wind.
    Using the array variable for all the weather conditions, echo the following statement to the browser:

    We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind.
    Then came sunshine with a few clouds and some rain. At least we didn't get any hail or sleet.

    Don't forget to include a title for your page, both in the header and on the page itself.

  </code>
</pre>
<hr>
<pre>
  <code>
    my code:<br><br>

    $meteo = array('rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind');

    echo &quot;We've seen all kinds of weather this month. At the beginning of the month, we had $meteo[5] and $meteo[6].&lt;br&gt;&quot;;
    echo &quot;Then came $meteo[1] with a few $meteo[2] and some $meteo[0]. At least we didn't get any $meteo[3] or $meteo[4].&quot;;
  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <?php

      $meteo = array('rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind');

      echo "We've seen all kinds of weather this month. At the beginning of the month, we had $meteo[5] and $meteo[6].<br>";
      echo "Then came $meteo[1] with a few $meteo[2] and some $meteo[0]. At least we didn't get any $meteo[3] or $meteo[4].";

    ?>
    <hr>
  </code>
</body>
</html>
