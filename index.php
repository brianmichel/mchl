
<html>
<head>
<title>BRN/MCHL</title>
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
</head> 
	
<body>
<h1>TSKTSKTSKTSKTSK</h1>
<div id="c" align="center" >
<div id="x" align="center" >
<h2>Twitter</h2>
<?php
	require 'class.twitter.php';
	$t = new twitter();
	$t->user_agent = 'mchl.me';
	$t->type = 'xml';
	
	$results = $t->userTimeline($id='7821812');
	
	foreach($results as $tweets){
		foreach($tweets as $var => $val){
			if ($var == 'text'){
				print "<tweet>$val<br><br></tweet>";
			}//end if
		}//end foreach
	}//end foreach
	?>
</div>
<div id="x"align="center">
 <h2>Where I am</h2>
 <a href="http://brianmichel.tumblr.com/">tumblr</a>
 <a href="http://www.last.fm/user/brianmichel/">last.fm</a>
 <a href="http://www.flickr.com/photos/brianmichel/">flickr</a>
</div>
<div id="x" class="digg" align="center">
	<h2>DIGG</h2>
 	 <?php
 		require 'digg.php';
 		$DIGG = new Digg("http://mchl.me/brn");@
 		
 		$stories = $DIGG->stories(5);
 		
 		foreach ($stories->stories as $story){
 			echo "$story->title<br>";
	}
	?>
</div>
</div>

 <script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
 </script>
 <script type="text/javascript">
  try 
  {
   var pageTracker = _gat._getTracker("UA-7282986-1");
   pageTracker._trackPageview();
  } catch(err) {}
 </script>

</body>
</html> 
