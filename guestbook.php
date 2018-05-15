<?php

if(isset($_POST['submit'])){
    $myfile = "/tmp/jbgb.txt";
    $fh = fopen($myfile,'a');
    $guest = $_POST['guest'];
    $date = $_POST['date'];
    fwrite($fh, "<td>".$guest."<td>".$date."\n");
    fclose($fh);
    $data = NULL;
}

echo "Jason's Guestbook<br>";
echo "<table border=1>";

$file = fopen("/tmp/jbgb.txt","r") or exit("Unable to open file!");
while(!feof($file))
    {
    echo "<tr>";
    echo fgets($file);
    echo "</tr>";
    }
fclose($file);
echo "</table>";
?>
