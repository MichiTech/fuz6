<?php

echo "Please sign the guest book.";
echo "<form action='guestbook.php' method='POST'>";
echo "Name: <input type='text' name='guest' maxlength='15'><br>";
echo "Date Visted: <input type='text' name='date'><br>";
echo "<input type='submit' name='submit' value='Submit'>";
echo "</form><br>";

?>
