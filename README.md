# Arma BEC chat to webpage
Pushes the BEC chat logs from arma server to be displayed on a webpage

# index.php

Put this in your webdirectory which is where your BEC chat log will be renamed and moved to (grab_move_overwrite.bat)

# grab_move_overwrite.bat

Put this in your BEC/log/config/chat folder

The "timeout 120" means every 2 minutes (120 seconds) it will move and rename the latest chat log to the webdirectory, ready for the index.php to read.

"C:\xampp\htdocs\chat\chat.txt" is the directory it goes to, it must go to where you put index.php and must stay as chat.txt (unless youre going be editing index.php
