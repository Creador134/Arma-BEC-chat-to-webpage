<body bgcolor="#494949">
<?php
$file = array_reverse( file( 'chat.txt' ) );
//chat file
$stage2 = preg_grep("/Direct/",$file,PREG_GREP_INVERT );
//removes direct chat....private info/locations may be displayed otherwise
$stage3 = preg_grep("/Vehicle/",$stage2,PREG_GREP_INVERT );
//removes vehicle chat, for reasons same as above
$start = strlen('00:00:00 : Side: ');
//02:41:16 : Side:
foreach ( $stage3 as $line ){
    $content = substr($line, $start);
    echo "<font size='5'><font face='verdana'><font color='#1af5fb'>$content</font><br />";
}
?>