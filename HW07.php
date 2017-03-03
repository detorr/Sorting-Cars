<html><head><title>Sorting table</title></head>
<body>
  <h1>Brandon Reynolds - HW07</h1>
<?php
  print "We will print in this order: " . $_GET['order'] . "<br />";
  $where =  $_SERVER['PHP_SELF'];
  $filedata = file("cars.txt");
  $filedata1 = file("cars1.txt");

  foreach($filedata as $fd) {
    $fdsorted[] = $fd;
  }

  //print_r($filedata);
  print "<table border=1><tr><th><a href=\"$where?order=ID\">ID</th><th><a href=\"$where?order=make\">Make</a></th><th><a href=\"$where?order=model\">Model</th><th><a href=\"$where?order=year\">Year</th><th>Picture</th></tr>\n";
  /*if ($_GET['order']=="make"){
    fopen("cars1.txt", "r");
    $mydata[0] = array("cars1.txt");
    sort($mydata[0]);

  }
*/
  //print_r($filedata1);
  foreach($fdsorted as $fl) {
    //print $fl . "<br />";
//strlen($mydata[3]) > 0 || <>
    $mydata=explode(";",$fl);
    //$mydata[2] = rsort($mydata[2]);

    $mydata[3] = trim($mydata[3]);

    //print "Length is:" . strlen($mydata[3]) . " Year is:" . $mydata[3] . ":<br />";
if ($_GET['order'] == "ID"){
    print "<tr><td>$mydata[0]</td><td>$mydata[1]</td><td>$mydata[2]</td><td>$mydata[3]</td><td>" .
        "<img src=\"images/$mydata[4]\"/></td> ";
      }

if ($_GET['order'] == "make"){
  print "<tr><td>$mydata[5]</td><td>$mydata[6]</td><td>$mydata[7]</td><td>$mydata[8]</td><td>" .
     "<img src=\"images/$mydata[9]\"/></td> ";
}

if ($_GET['order'] == "model"){
  print "<tr><td>$mydata[10]</td><td>$mydata[11]</td><td>$mydata[12]</td><td>$mydata[13]</td><td>" .
     "<img src=\"images/$mydata[14]\"/></td> ";
}else

if (strlen($mydata[3]) > 0 || $_GET['order']<>"year"){
    print "<tr><td>$mydata[0]</td><td>$mydata[1]</td><td>$mydata[2]</td><td>$mydata[3]</td><td>" .
       "<img src=\"images/$mydata[4]\"/></td> ";
}


  }
  print "</table>";
?>
</body></html>
