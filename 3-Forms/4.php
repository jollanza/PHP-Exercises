<html>
<head>
  <title>Switch Statement</title>
</head>
<body>
<pre>

</pre>
<pre>
  <code>

    https://www.phpexercises.com/php-switch-statement-exercise.html

    You probably noticed that the if-elseif-else construction was repetitive and cumbersome in the last exercise.
    It works best with only one or two choices.
    A more appropriate construction for this exercise is the switch statement, combined with a select field in the form for the days of the week.
    So your assignment in this PHP exercise is to rewrite the previous exercise using a select field for the user input and the switch statement to process the response.

    Once again, here's the poem:

    Laugh on Monday, laugh for danger.
    Laugh on Tuesday, kiss a stranger.
    Laugh on Wednesday, laugh for a letter.
    Laugh on Thursday, something better.
    Laugh on Friday, laugh for sorrow.
    Laugh on Saturday, joy tomorrow.

    Remember to include a general response for any input that is not in the poem.
    To make things a little more interesting, include a 'Back' button on the response so that the user can go back and try different days.
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



    switch ($day = $_POST['city'];) {
      case 'Monday':
        echo $mon;
        break;
      case 'Tuesday':
        echo $tue;
        break;
      case 'Wednesday':
        echo $wed;
        break;
      case 'Thursday':
        echo $thu;
        break;
      case 'Friday':
        echo $fri;
        break;
      case 'Saturday':
        echo $sat;
        break;
      default:
        echo &quot;select something!&quot;;
        break;
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



    switch ($day = $_POST['city']) {
      case 'Monday':
        echo $mon;
        break;
      case 'Tuesday':
        echo $tue;
        break;
      case 'Wednesday':
        echo $wed;
        break;
      case 'Thursday':
        echo $thu;
        break;
      case 'Friday':
        echo $fri;
        break;
      case 'Saturday':
        echo $sat;
        break;
      default:
        echo "select something!";
        break;
    }

    ?>
    <hr>
  </code>
</body>
</html>
