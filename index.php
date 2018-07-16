<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>oxjam - stitch-stitch records</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Steven Brett" />
	<link rel="stylesheet" type="text/css" media="screen, projection" href="oxjam.css" />
	<script type="text/javascript" src="/playtagger.js"></script>
	<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="/xml/rss.xml" />
	<meta name="verify-v1" content="d1fZDcsNgwpyWRTV+DwHMooHn67lFEb4WSnCt8OutM0=" />
</head>

<body>
<div id="wrap">
	<div id="header">
	<h1>Stitch-Stitch Records - Oxjam:Bath Showcase</h1>
	<p id="homelink"><a href="/">home</a></p>
	</div>
	<div id="main">
		<div class="box">
		<a href="poster-big.jpg"><img src="poster-thumb.jpg" alt="Event Poster - Click for larger version" class="poster" /></a>
		<p>Stitch-Stitch Records has been releasing some of the best of Bristol's DIY bedroom pop 
		and experimental music since 2002. In this collaboration with Oxjam:Bath, almost the 
		entire label roster (complete with a few extra-special guests) performed in the
		beautiful surroundings of the <a href="http://www.chapelarts.org/">Chapel Arts Centre</a> in
		Bath on Sunday 25th October 2009.</p>
		<p>The Oxjam:Bath festival 2009 raised over <s>£3100</s> £3800 for Oxfam! We had a really excellent day, 
		with all the bands playing amazing sets, and a special appearance from The Lonely Ponies. 
		This site will be updated over the coming weeks with pictures, audio and video from the event.</p>
		</div>

		<div class="box" id="info">
		<img src="logo-wallpaper.jpg" alt="stitch-stitch logo" class="fleft" />
		<h2>Sunday 25th October 2009</h2>
		<p>Timetable:<br />
		4:45 - 5:10 fr&agrave;n&ccedil;ois & the atlas mountains<br />
		5:25 - 5:50 ray rumours<br />
		6:05 - 6:30 ladybird<br />
		6:45 - 7.10 my two toms<br />
		7.25 - 7:50 bucky<br />
		8:05 - 8:30 i know i have no collar<br />
		8:45 - 9:10 balky mule<br />
		9:25 - 9:50 arctic circle<br /><br />
		<a href="http://www.facebook.com/event.php?eid=133058943567" class="fb_share_link">Facebook Event</a>
		</p>
		</div>
		
		<div class="box">
		<img src="chapelarts.jpg" alt="Chapel Arts Centre" class="poster" />
		<p>Thank you to everyone who came, all the bands who played and provided equipment, Ed for 
		doing amazing sound and being a very patient engineer, everyone at the Chapel for their time
		and effort, Michal, Lisa and Rosie for running the shop and recording the show and Oxjam for
		making it happen in the first place!<br /><br /><br />
		Find your local oxjam event: <a href="http://www.oxfam.org.uk/oxjam">oxfam.org.uk/oxjam</a><br/>
		Please make a donation to Oxfam when you download these tracks: <a href="https://donate.oxfam.org.uk/give">donate.oxfam.org.uk/give</a></p>
		</div>
<?php 
function truncate($string, $max = 30, $rep = '...')
{
    if (strlen($string) <= ($max + strlen($rep)))
    {
        return $string;
    }
    $leave = $max - strlen ($rep);
    return substr_replace($string, $rep, $leave);
} 

$bands = array ( array ("arcticcircle", "Arctic Circle", "Arctic Circle pull out all the stops (and most available instruments) to bring you a good time, and their joyful, overpopulated songs provide catchy choruses and intricate guitar lines.",
					"stitchstitchrecords.co.uk/artist/arctic-circle/", "/mp3/arcticcircle-prancingpearlmothersruin-02-mothersruin.mp3", "Mother's Ruin","myspace.com/arcticcircle","www.last.fm/music/Arctic+Circle", "3730180341", "http://stitchstitch.bandcamp.com/album/oxjam-bath-arctic-circle"),
					array ("francois", "Frànçois &amp; the Atlas Mountains", "Frànçois has undergone another transformation: returning to his French home town he has created a beautiful, richly layered new album (Plaine Inondable), which he has since been re-interpreting live using a sampler.",
					"kidfrancois.com","/mp3/francois&amp;theatlasmountains-herriverravesrecollections-01-royan.mp3","Royan","myspace.com/francoisinbristol","last.fm/music/Fr%25C3%25A0n%25C3%25A7ois%2B%2526%2Bthe%2BAtlas%2BMountains"),
					array ("rayrumours", "Ray Rumours", "Quiet, wintry guitar and ukulele songs from the alter-ego of Ros Murray, as heard on her latest stitch-stitch album, Le Pont Suspendu.", 
					"stitchstitchrecords.co.uk/artist/ray-rumours/", "/mp3/rayrumours-lepontsuspendu-04-theturtle.mp3", "The Turtle", "myspace.com/rayrumours", "last.fm/music/Ray+Rumours"),
					array ("ikihnc", "I Know I Have No Collar", "Bristol's bedroom-pop superheroes. They've grown from a two-person keyboard sensation into a five-piece live band; new songs range from tuneful and quiet melodica phrases to crashing drums and squealing horns.", 
					"iknowihavenocollar.co.uk", "/mp3/iknowihavenocollar-alittleslowalittlelate-07-supertuesday.mp3", "Super Tuesday", "myspace.com/iknowihavenocollar", "last.fm/music/I+Know+I+Have+No+Collar"),
					array ("balkymule", "The Balky Mule", "Sam Jone's excellent collage of offbeat pop, found sounds and glitchy electronic soundscapes was released on his debut for Fat Cat this year, The Length of the Rail.", 
					"fat-cat.co.uk/fatcat/artist/the+balky+mule", "http://fat-cat.co.uk/fatcat/release.php?id=285", "Album Preview at Fat Cat", "myspace.com/thebalkymule", "last.fm/music/The+Balky+Mule", "3103815530", "http://stitchstitch.bandcamp.com/album/oxjam-bath-the-balky-mule"),
					array ("ladybird", "Ladybird", "Victor Crespi has made music his life, and has taken his sunny, youthful French pop as far afield as Chile, New Zealand, Morocco and the USA.",
					"stitchstitchrecords.co.uk/artist/ladybird/", "/mp3/ladybird-silverboat-05-letusgo.mp3", "Let Us Go", "myspace.com/ladybird00", "last.fm/music/Ladybird"),
					array ("mytwotoms2", "My Two Toms", "My Two Toms craft non-traditional instrumental folk songs out of banjo and guitar; songs with such an instant emotive pull that they have found immediate favour with the likes of Charlie Parr and Herman D&uuml;ne.",
					"mytwotoms.co.uk", "/mp3/mytwotoms-ohsewandtell-04-canoe.mp3", "Canoe", "myspace.com/mytwotoms", "last.fm/music/My+Two+Toms"),
                	array ("bucky", "Bucky", "Everyone's favourite hilarious two-piece rockabilly explosion.", 
                	"buckytheband.com", "http://buckytheband.com/media/downloadmp3.php/Bucky%20-%20Teenage%20Research.mp3","Teenage Research", "#", "last.fm/music/Bucky")
                );

shuffle($bands);
                
foreach ($bands as $band) {?>
		
		<div class="band">
		<img src="<?php echo $band[0]; ?>.jpg" alt="<?php echo $band[1]; ?>" />
			<div class="info"><h2><?php echo $band[1]; ?></h2>
			<p><?php echo $band[2]; ?></p>
			</div>
		<table class="links">
		<tr>
		<td class="right"><p>website</p></td>
		<td><p><a href="http://<?php echo $band[3]; ?>"><?php echo truncate($band[3]); ?></a></p></td>
		<td class="right"><p>sample mp3</p></td>
		<td><p><a href="<?php echo $band[4]; ?>"><?php echo $band[5]; ?></a></p></td>
		</tr>
		<tr>
		<td class="right"><p>&nbsp;</p></td>
		<td><p><?php if($band[6] != "#"){?><a href="http://<?php echo $band[6]; ?>"><?php echo $band[6]; ?></a><?php } ?></p></td>
		<td class="right"><p>last.fm</p></td>
		<td><p><a href="http://<?php echo $band[7]; ?>"><?php echo truncate($band[7]); ?></a></p></td>
		</tr>
		</table>
		<?php if ($band[8]) {?> 
		<iframe width="400" height="100" style="position: relative; display: block; width: 400px; height: 100px;" src="http://bandcamp.com/EmbeddedPlayer/v=2/album=<?php echo $band[8]; ?>/size=venti/bgcol=FFFFFF/linkcol=606090/" allowtransparency="true" frameborder="0">
		<a href="<?php echo $band[9]; ?>">Oxjam:Bath by <?php echo $band[2]; ?></a></iframe>
		<?php } ?>
		</div>
<?php } ?>
	</div>
	<div id="footer">
	<p><a href="http://www.stitchstitchrecords.co.uk/">Stitch-Stitch Records</a>
	<span class="street-address">18 Penfield Road, </span>
	<span class="region">Bristol, </span>
	<span class="postal-code">BS2 9YG</span> <span class="country-name">UK</span><br />
	&copy; all content is the copyright of stitch-stitch records unless otherwise indicated.<br />
	<a href="http://validator.w3.org/check/referer">XHTML</a>. <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://stitchstitchrecords.co.uk/oxjam/oxjam.css">CSS</a>.</p>
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3282239-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>