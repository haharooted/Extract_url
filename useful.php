<?php
#p
echo '<title>EXTRACT URL</title><form method="POST">
URL: <input name="url"><input type="submit" name="submit" value="Submit">
</form><br><pre>';
if($_POST['submit']){
system("wget -O anu ".$_POST['url']);
echo str_replace("\n\n","",str_replace("#","",system(base64_decode('Y2F0IGFudSB8IHNlZCAtbnIgJ3MvKC4qKWhyZWY9Ij8oW14gIj5dKikuKi9cMlxuXDEvOyBUOyBQ
OyBEOyc='))));
unlink("anu");
}
