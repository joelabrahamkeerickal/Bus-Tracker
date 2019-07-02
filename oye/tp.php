

<form method="POST" action="send_sms.php">
Enter phone number : <input type="number" name="number">
Enter message : <textarea name="message"></textarea><br>
Sender : <input type="text" name="from">
<input type="hidden" name="submitted" value="true">
<input type="submit" name="submit" value="Send SMS">
</form>

<?php
#<input type="text" size="2" name="numberext"> - 
?>