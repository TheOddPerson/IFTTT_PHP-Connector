<?php
/*
	IFTTT Connector Dictionary
	Provides human wording for hardcoded commands
	Author: Nick Bolhuis
*/

/*
	The first word in each sub-array is the actual command that gets sent to the 'switch' statement.
	Each sub-array is scanned individually for key words/phrases to identify the command the phrase is for
*/

$dictionary = array (
	array ('next','next track','next video','skip'),
	array ('prev','previous','skip back','last track'),
	array ('volup','volume up','louder'),
	array ('voldown','volume down','softer','quieter'),
	//array ('volfull','full volume','max volume','loudest'), not an option in mpc unfortunately
	array ('mute','quiet','hush','be quiet','volume off','minimum volume','unmute'), //mute is a toggle
	array ('subs','subtitles','no subtitles','next subtitles','remove subtitles'),
	array ('audio','next audio track','change language','change audio language'),
	array ('skipfwd','skip forward','fast forward'),
	array ('skipback','skip back','rewind','replay'),
	array ('restart','skip to beginning','start from the beginning','start at the beginning','restart playback'),
	array ('play','begin playback','resume playback','resume','unpause'),
	array ('pause','stop','paws','still'),
	array ('exit','quit','shutdown','close'),
	array ('fullscreen','full screen','maximize'),
	array ('ontop','always on top','bring to front','bring the video to the front','on top')
);

?>