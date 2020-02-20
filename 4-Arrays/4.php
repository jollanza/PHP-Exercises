<html>
<head>
  <title>Arrays from User Input</title>
</head>
<body>
<pre>

</pre>
<pre>
  <code>

    https://www.phpexercises.com/php-add-user-input-array-exercise.html

    In this PHP exercise, you will create an array, print it to the browser, then ask the user to add to it.

    Create an array of modes of transportation, including Automobile, Jet, Ferry, Subway.
    Print the following statement to the browser: &quot;Travel takes many forms, whether across town, across the country, or around the world.
    Here is a list of some common modes of transportation:&quot; Follow this with an unordered list created by iterating through the array variable you created.

    Next, give the user a text box and ask the user to add other modes of transportation to the list, separated by commas.
    When the user clicks 'Go', process the input with array functions to send back the original list with the user's additions.
    Include another text box with the text &quot;Add more?&quot; and another submit button.
    When the user clicks this button, the page should reload with the new additions added to the previously expanded list.
    Your code should allow the user to add items as many times as they like.
  </code>
</pre>
<hr>
<pre>
  <code>
    my code:<br><br>


  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

<!-- Automobile, Jet, Ferry, Subway -->
<?php

 $transport = array('Automobile', 'Jet', 'Ferry', 'Subway');

 echo "Travel takes many forms, whether across town, across the country, or around the world.<br>";
 echo "Here is a list of some common modes of transportation:<br><br>";

?>

<ul>
  <?php
  foreach ($transport as $t) {
    echo "<li>$t</li>";
  }
  ?>
</ul>
<form method="post" action="4.php">
  <label for="newtransport">Name of the transport you want to add: </label>
  <input type="text" name="newtransport">
  <button type="submit" name="submit">Submit</button>
  <?php
  if (isset($_POST['submit'])) {
    $newtransport = $_POST['newtransport'];
    array_push($transport, $newtransport);
    var_dump($transport);
  }
  ?>
</form>

    <hr>
  </code>
</body>
</html>
