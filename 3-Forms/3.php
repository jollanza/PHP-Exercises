<html>
<head>
  <title>If-Elseif-Else Construction</title>
</head>
<body>
<pre>

</pre>
<pre>
  <code>

    https://www.phpexercises.com/php-if-elseif-else-exercise.html

    For this PHP exercise, you will use the same format as the previous exercise, requesting input in the first part, and responding in the second, through the magic of PHP's if-else statement.
    In the first section, give the user an input field and request that they enter a day of the week.

    For the second section, you'll need the following poem:

    Laugh on Monday, laugh for danger.
    Laugh on Tuesday, kiss a stranger.
    Laugh on Wednesday, laugh for a letter.
    Laugh on Thursday, something better.
    Laugh on Friday, laugh for sorrow.
    Laugh on Saturday, joy tomorrow.

    Using the else-elseif-else construction, set each line to output in response to the day the user inputs, with a general response for any input that is not in the poem.
  </code>
</pre>
<hr>
<pre>
  <code>
    my code:

    &lt;form action=&quot;3.php&quot; method=&quot;post&quot;&gt;
      &lt;label for=&quot;city&quot;&gt;Name your city&lt;/label&gt;
      &lt;select name=&quot;city&quot;&gt;
        &lt;option value=&quot;Monday&quot;&gt;Monday&lt;/option&gt;
        &lt;option value=&quot;Tuesday&quot;&gt;Tuesday&lt;/option&gt;
        &lt;option value=&quot;Wednesday&quot;&gt;Wednesday&lt;/option&gt;
        &lt;option value=&quot;Thursday&quot;&gt;Thursday&lt;/option&gt;
        &lt;option value=&quot;Friday&quot;&gt;Friday&lt;/option&gt;
        &lt;option value=&quot;Saturday&quot;&gt;Saturday&lt;/option&gt;
      &lt;/select&gt;
      &lt;button type=&quot;submit&quot; name=&quot;submit&quot;&gt;Submit&lt;/button&gt;
      &lt;button type=&quot;reset&quot;&gt;Reset&lt;/button&gt;
    &lt;/form&gt;

    &lt;?php
    $mon = &quot;Laugh on Monday, laugh for danger.&quot;;
    $tue = &quot;Laugh on Tuesday, kiss a stranger.&quot;;
    $wed = &quot;Laugh on Wednesday, laugh for a letter.&quot;;
    $thu = &quot;Laugh on Thursday, something better.&quot;;
    $fri = &quot;Laugh on Friday, laugh for sorrow.&quot;;
    $sat = &quot;Laugh on Saturday, joy tomorrow.&quot;;

    $day = $_POST['city'];
    if (!isset($_POST['city'])) {
      echo &quot;Select a day!&quot;;
    }elseif ($day == 'Monday') {
      echo $mon;
    }elseif ($day == 'Tuesday') {
      echo $tue;
    }elseif ($day == 'Wednesday') {
      echo $wed;
    }elseif ($day == 'Thursday') {
      echo $thu;
    }elseif ($day == 'Friday') {
      echo $fri;
    }elseif ($day == 'Saturday') {
      echo $sat;
    }

    ?&gt;

  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <form action="3.php" method="post">
      <label for="city">Name your city</label>
      <select name="city">
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
      </select>
      <button type="submit" name="submit">Submit</button>
      <button type="reset">Reset</button>
    </form>

    <?php
    $mon = "Laugh on Monday, laugh for danger.";
    $tue = "Laugh on Tuesday, kiss a stranger.";
    $wed = "Laugh on Wednesday, laugh for a letter.";
    $thu = "Laugh on Thursday, something better.";
    $fri = "Laugh on Friday, laugh for sorrow.";
    $sat = "Laugh on Saturday, joy tomorrow.";

    $day = $_POST['city'];
    if (!isset($_POST['city'])) {
      echo "Select a day!";
    }elseif ($day == 'Monday') {
      echo $mon;
    }elseif ($day == 'Tuesday') {
      echo $tue;
    }elseif ($day == 'Wednesday') {
      echo $wed;
    }elseif ($day == 'Thursday') {
      echo $thu;
    }elseif ($day == 'Friday') {
      echo $fri;
    }elseif ($day == 'Saturday') {
      echo $sat;
    }

    ?>
    <hr>
  </code>
</body>
</html>
