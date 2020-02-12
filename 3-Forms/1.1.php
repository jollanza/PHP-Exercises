<html>
<head>
  <title>Simple Form with PHP Response</title>
</head>
<body>
<pre>

</pre>
<pre>
  <code>

  https://www.phpexercises.com/php-simple-form-response.html

  In the next PHP exercise, you will request input from the user, then move the user's response from one file to another and do something with it.
  Create two separate files. The first will contain a form with one input field asking for the user's favorite city.
  Use the post method for the form.
  Although this file contains no PHP code, on my localhost, it needs the .php extension to successfully call the second file.
  The second file will contain PHP code to process the user's response.

  (In this case, something very simple.) After the user clicks the submit button, echo back Your favorite city is $city., where $city is the input from the form.
  Hint: the variable that contains the user's input is an array. Arrays will be addressed in future exercises, but this particular array needs to come into play here.
  The array variable is $_POST['name'], where 'name' is the name of your input field.
  </code>
</pre>
<hr>
<pre>
  <code>
    my code:

    $city = $_POST['city'];

    echo $city;

  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <?php

$city = $_POST['city'];

echo $city;

    ?>
<hr>

    <a href="1.0.php">Go back</a>
  </code>
</body>
</html>
