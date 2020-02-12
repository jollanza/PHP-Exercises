<html>
<head>
  <title>Simple Form with PHP Response</title>
</head>
<body>
<pre>

</pre>
<pre>
  <code>

  https://www.phpexercises.com/php-form-if-else-exercise.html

  One very useful thing you can do with PHP is include the request for user input and the response in the same file, using conditional statements to tell PHP which one to show.
  For this PHP exercise, rewrite the two files of the previous exercise into one file using an if-else conditional statement.

  Hint: You'll need some way to tell if the form has been submitted. The function to determine if a variable has been set and is not null is isset().
  </code>
</pre>
<hr>
<pre>
  <code>
    my code:

    &lt;form action=&quot;2.0.php&quot; method=&quot;post&quot;&gt;
      &lt;label for=&quot;city&quot;&gt;Name your city&lt;/label&gt;
      &lt;input type=&quot;text&quot; name=&quot;city&quot; id=&quot;city&quot;&gt;
      &lt;button type=&quot;submit&quot; name=&quot;submit&quot;&gt;Submit&lt;/button&gt;
      &lt;button type=&quot;reset&quot;&gt;Reset&lt;/button&gt;
    &lt;/form&gt;

    &lt;?php

      if (!isset($_POST['city'])) {
        echo &quot;fill the forms!&quot;;
      }else{
        $city = $_POST['city'];
        echo "Result: $city";
      }

    ?&gt;

  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <form action="2.0.php" method="post">
      <label for="city">Name your city</label>
      <input type="text" name="city" id="city">
      <button type="submit" name="submit">Submit</button>
      <button type="reset">Reset</button>
    </form>

    <?php

if (!isset($_POST['city'])) {
  echo "fill the forms!";
}else{
  $city = $_POST['city'];
  echo "Result: $city";
}

    ?>
    <hr>
  </code>
</body>
</html>
