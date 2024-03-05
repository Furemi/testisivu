<?php
echo 'got here';
$subreddits = file("../Subreddits.txt");
foreach($subreddits as $f) {
	echo ('<li><a href = "https://www.reddit.com/r/'.$f.'">'.$f.'</a></li>');
}
?>