<!-- PHP  -->

<!DOCTYPE html>

<html>
<head>
  <title> PHP Arrays, Strings, and File </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Lab7.css" type="text/css">
</head>
<body>
  <?php    # This code only needs to be used once and will provide some help in error reporting.
           # If your webpage is completely empty, please try the VirtualBox commandline PHP.
           # Alternatively you can try: https://tinyurl.com/phpsandbox


    ini_set('display_errors', 1); # only need to call these functions
    error_reporting(E_ALL);       # one time
  ?>

  
  <h1> <span style="color: red;"> Superman </span> </h1>
  <hr>

  <!-- TASK 1 -- Write your PHP code in in the space provided below.   -->
  <div class="task">
    <h2> Task 1: While loop </h2>
      <p> Simulate multiple dice rolls until a 6 is reached.  Print out the results of each roll. </p>
  <div class="output">
      <?php
        $dice=-1;/* Task 1: Put code here */
        while ($dice <= 5) {
           if ($dice >0) {
               print "<p> Dice roll (".$dice.")"."</p>\n";
          }
           $dice=rand(1,6);
           if ($dice == 6) {
               print "<p> Dice roll (".$dice.")"."</p>\n";
               break;
          }
        }
  ?>
  </div>
</div>

  <!-- TASK 2 -- Write PHP code in in the space provided below.   -->
  <div class="task">
    <h2> Task 2: Array, for-loop, string function </h2>
      <p> Create an array of strings that is made up of 10 words with the first letter capitalized.
      Your strings can be of any words you want.  Print out these words in a table, where the first
      column is the word in the array and the second column are the same words in all uppercase. You should use a
      the rows of the table.  </p>
   <div class="output">
      <?php
        /* Task 2: Put your code here */
        $list = array("One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Deaner");
        echo "<table>\n";
        echo "<tr><th>String</th><th>Upper</th></tr>\n";
        for ($i=0; $i <10 ; $i++) {
            $uppercase= strtoupper($list[$i]);
            echo "<tr><td>$list[$i] </td> <td>$uppercase</td> </tr>\n";
                }
            echo "</table> \n";
  ?>

  </div>
  </div>

  <!-- TASK 3 -- Write PHP code in in the space provided below.   -->

  <div class="task">
  <h2> Task 3: Files, arrays, and for-loops </h2>
  <p> This task is to read in the contents of the file <code>classList.txt</code> in to PHP.  Then, you should print out each line
      from the file as a paragraph element.  If the line contains the string "EECS", print this out using highlight.
      See the CSS file for the class name for highlight (you can also view the source of this document to see example of the HTML output).  </p>

  <div class="output">
      <?php
        /* Task 3: Put your code here */
        $lines= file("classlist.txt");

        for ($k=0; $k < count($lines); $k++) {
            $line = trim($lines[$k]);
            $words=explode(",",$line);

            $highlight=" ";
            $bold=" ";

            if (in_array("EECS",$words)) {
               //print "<p class=\"highlight\">".$eachline[k]."</p>\n";
               $highlight="highlight";
            }
            if (in_array("1st year",$words)) {
               $bold="bold";
               //print "<p class=\"bold\">".$eachline[k]."</p>\n";
            }
              $style = $highlight." ".$bold;
              print "<p class=\"$style\">".$line."</p>\n";
      }
        ?>
        <?php
             $arr = array('Hello','World!','Beautiful','Day!');
             echo implode(" ",$arr);
             //Hello World! Beautiful Day!
?>
     </div>
  </div>

<body>

</html>
