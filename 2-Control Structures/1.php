<html>
<head>
  <title>If-Else Statement</title>
</head>
<body>
<pre>

</pre>
<hr>
<pre>
  <code>

    https://www.phpexercises.com/php-if-else-statement-exercise.html
    
    In this PHP exercise, you will use a conditional statement to determine what gets printed to the browser.
    Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:

    It's August, so it's really hot.
    Not August, so at least not in the peak of the heat.

    Hint: the function to get the current month is 'date('F', time())' for the month's full name.
  </code>
</pre>
<hr>
<pre>
  <code>
    my code:

    $month = date('F', time());

    if($month == 'August'){
      echo "It's August, so it's really hot.";
    }else{
      echo "Not August, so at least not in the peak of the heat";
    }

  </code>
</pre>
<hr>
  <code>
    my output:<br><br>

    <?php

$month = date('F', time());

if($month == 'August'){
  echo "It's August, so it's really hot.";
}else{
  echo "Not August, so at least not in the peak of the heat";
}

    ?>
  </code>
</body>
</html>
