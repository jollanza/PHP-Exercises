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

    &lt;form action=&quot;1.1.php&quot; method=&quot;post&quot;&gt;
      &lt;label for=&quot;city&quot;&gt;Name your city&lt;/label&gt;
      &lt;input type=&quot;text&quot; name=&quot;city&quot; id=&quot;city&quot;&gt;
      &lt;button type=&quot;submit&quot; name=&quot;submit&quot;&gt;Submit&lt;/button&gt;
      &lt;button type=&quot;reset&quot;&gt;Reset&lt;/button&gt;
    &lt;/form&gt;

  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

<form action="1.1.php" method="post">
  <label for="city">Name your city</label>
  <input type="text" name="city" id="city">
  <button type="submit" name="submit">Submit</button>
  <button type="reset">Reset</button>
</form>

  </code>
</body>
</html>
