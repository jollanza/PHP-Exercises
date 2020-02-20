<html>
<head>
  <title>Arrays from User Input</title>
</head>
<body>
<pre>

</pre>
<pre>
  <code>

    https://www.phpexercises.com/php-user-input-arrays-exercise.html

    For this PHP exercise, create a form asking the user for input about the weather the user has experienced in a month of the user's choice.
    In separate text fields, request the city, month and year in question.
    Below that, show a series of checkboxes using the same weather conditions you used in Arrays

    Ex. #1. (Those values were: rain, sunshine, clouds, hail, sleet, snow, wind.) Set up the form to create an array from the checked items.

    In the response section of your script, create an array using the city, month and year the user entered as values.
    Print the following response &quot;In $city in the month of $month $year, you observed the following weather:&quot;, where $city, $month and $year are values from the array you created.

    Next, loop through the $weather[] array you received from the user to send back a bulleted list with the user's responses.
  </code>
</pre>
<hr>
<pre>
  <code>
    my code:<br><br>
    &lt;form method=&quot;post&quot; action=&quot;3.php&quot;&gt;
      &lt;input type=&quot;text&quot; name=&quot;city&quot;&gt;
      &lt;label for=&quot;city&quot;&gt;City&lt;/label&gt;&lt;br&gt;
      &lt;input type=&quot;text&quot; name=&quot;month&quot;&gt;
      &lt;label for=&quot;month&quot;&gt;Month&lt;/label&gt;&lt;br&gt;
      &lt;input type=&quot;text&quot; name=&quot;year&quot;&gt;
      &lt;label for=&quot;year&quot;&gt;Year&lt;/label&gt;&lt;br&gt;

    &lt;span&gt;Weather type:&lt;br&gt;&lt;/span&gt;

      &lt;input type=&quot;checkbox&quot; name=&quot;meteo[]&quot; value=&quot;rain&quot;&gt;
      &lt;label for=&quot;rain&quot;&gt;rain&lt;/label&gt;&lt;br&gt;
      &lt;input type=&quot;checkbox&quot; name=&quot;meteo[]&quot; value=&quot;sunshine&quot;&gt;
      &lt;label for=&quot;sunshine&quot;&gt;sunshine&lt;/label&gt;&lt;br&gt;
      &lt;input type=&quot;checkbox&quot; name=&quot;meteo[]&quot; value=&quot;clouds&quot;&gt;
      &lt;label for=&quot;clouds&quot;&gt;clouds&lt;/label&gt;&lt;br&gt;
      &lt;input type=&quot;checkbox&quot; name=&quot;meteo[]&quot; value=&quot;hail&quot;&gt;
      &lt;label for=&quot;hail&quot;&gt;hail&lt;/label&gt;&lt;br&gt;
      &lt;input type=&quot;checkbox&quot; name=&quot;meteo[]&quot; value=&quot;sleet&quot;&gt;
      &lt;label for=&quot;sleet&quot;&gt;sleet&lt;/label&gt;&lt;br&gt;
      &lt;input type=&quot;checkbox&quot; name=&quot;meteo[]&quot; value=&quot;snow&quot;&gt;
      &lt;label for=&quot;snow&quot;&gt;snow&lt;/label&gt;&lt;br&gt;
      &lt;input type=&quot;checkbox&quot; name=&quot;meteo[]&quot; value=&quot;wind&quot;&gt;
      &lt;label for=&quot;wind&quot;&gt;wind&lt;/label&gt;&lt;br&gt;

      &lt;button type=&quot;submit&quot; name=&quot;submit&quot;&gt;Submit&lt;/button&gt;
      &lt;hr&gt;

    &lt;?php

    $baseinfo = array(
      $_POST['city'],
      $_POST['month'],
      $_POST['year']
    );

    echo &quot;In $baseinfo[0] in the month of $baseinfo[1] $baseinfo[2], you observed the following weather: &lt;br&gt;&lt;br&gt;&quot;;

    $meteo = array($_POST['weather']);
    echo &quot;&lt;ul&gt;&quot;;
    foreach ($meteo as $m) {
      echo &quot;&lt;li&gt;$m&lt;/li&gt;\n&quot;;
    }
    echo &quot;&lt;/ul&gt;&quot;;
    ?&gt;

    &lt;/form&gt;

  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

<!-- rain, sunshine, clouds, hail, sleet, snow, wind -->

<form method="post" action="3.php">
  <input type="text" name="city">
  <label for="city">City</label><br>
  <input type="text" name="month">
  <label for="month">Month</label><br>
  <input type="text" name="year">
  <label for="year">Year</label><br>

<span>Weather type:<br></span>

  <input type="checkbox" name="meteo[]" value="rain">
  <label for="rain">rain</label><br>
  <input type="checkbox" name="meteo[]" value="sunshine">
  <label for="sunshine">sunshine</label><br>
  <input type="checkbox" name="meteo[]" value="clouds">
  <label for="clouds">clouds</label><br>
  <input type="checkbox" name="meteo[]" value="hail">
  <label for="hail">hail</label><br>
  <input type="checkbox" name="meteo[]" value="sleet">
  <label for="sleet">sleet</label><br>
  <input type="checkbox" name="meteo[]" value="snow">
  <label for="snow">snow</label><br>
  <input type="checkbox" name="meteo[]" value="wind">
  <label for="wind">wind</label><br>

  <button type="submit" name="submit">Submit</button>
  <hr>

<?php

$baseinfo = array(
  $_POST['city'],
  $_POST['month'],
  $_POST['year']
);

echo "In $baseinfo[0] in the month of $baseinfo[1] $baseinfo[2], you observed the following weather: <br><br>";

$meteo = array($_POST['meteo']);
echo "<ul>";
foreach ($meteo as $m) {
  echo "<li>$m</li>\n";
}
echo "</ul>";
?>

</form>

    <hr>
  </code>
</body>
</html>
