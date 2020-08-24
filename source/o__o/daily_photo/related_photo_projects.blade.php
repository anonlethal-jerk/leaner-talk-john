@php
	$page->series_info = $page->series_daily_photo;

	$page->title = 'Related Photo Projects';
	$page->meta_description = 'Links to various photography projects related to JK Keller’s daily photo project.';
	$page->twitter_card_type = 'summary';
	$page->twitter_image = 'https://jk-keller.com/o__o/daily_photo/x__x/social/512x512/jk_keller-the_adaption_to_my_generation-1998_10_01-2019_12_31.jpg';
	$page->open_graph_image = 'https://jk-keller.com/o__o/daily_photo/x__x/social/1200x630/jk_keller-the_adaption_to_my_generation-1998_10_01-2019_12_31.jpg';
@endphp

@extends('_layouts.master', array('t_html_title'=>$page->title.' •__• '.$page->series_info->title))

@section('body')
<body class="body--daily_photo daily_photo--page">
	<article class="series_info">
		<table class="table--series_info table--this_page">
			<thead>
				<tr>
					<th class="td--series_home">👻</th>
					<th class="td--series_title">Title</th>
					<th class="td--series_description">Description</th>
					<th class="td--series_notes">Notes</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td data-label="👻" class="td--series_home"><a href="../">↖︎</a></td>
					<td data-label="Title" class="td--series_title"><h1>{{-- <a href="/o__o/daily_photo/related_photo_projects/"> --}}Related Photo Projects{{-- </a> --}}</h1></td>
					<td data-label="Description" class="td--series_description">Links to various photography projects related to JK Keller’s daily photo project.</td>
					<td data-label="Notes" class="td--series_notes"><p>The attrition rate is high with these projects.</p>
						<p>See also: <strong><a href="/o__o/daily_photo/info_faqs/">Frequently Asked Questions</a></strong></p></td>
				</tr>
			</tbody>
		</table>
		<section class="page_content">
			<div class="page_column">
			<h2 class="top">Other ‘Passage of Time’ Portrait Projects</h2>
			<ul>
				<li><a href="https://www.opalka1965.com/fr/autoportraits.php" title="Absolutely amazing!">OPALKA 1965/1–&infin;</a> (1965–present)<br />
					Roman Opalka, after every day of painting numbers in his studio, photographs his face. If only we could see documentation of the entire sequence.</li>
				<li><a href="https://www.artic.edu/artworks/144356/carving-a-traditional-sculpture" title="Dieting as sculpture">Carving: A Traditional Sculpture</a> (1972)<br />
					Eleanor Antin diets for 45 days. It is a performance piece, sculpture, photo project, and seminal work of feminist art.</li>
				<li><a href="https://www.nytimes.com/interactive/2014/10/03/magazine/01-brown-sisters-forty-years.html" title="Subtly influenced by, I'm sure">The Brown Sisters</a> (1975–present)<br />
					Nicholas Nixon photographs the Brown sisters.</li>
				<li><a href="http://zonezero.com/magazine/essays/diegotime/time.html" title="View the site">The Arrow of Time</a> (1976–present)<br />
					Diego Golberg and family sit down on June 17 for a family ritual.</li>
				<li><a href="https://zekesgallery.blogspot.com/2005/03/damien-hirst-does-roseanne-holland-and.html" title="View the site">Roseanne Holland</a> (1979–1989)<br />
					Damien Hirst mines Florida police photos for crack cocaine campaign.</li>
				<li><a href="https://www.tehchinghsieh.com/oneyearperformance1980-1981" title="View the site">One Year Performance</a> (1980–1981)<br />
					Tehching Hsieh punches a time clock hooked up to a camera in a gallery every hour on the hour for a year.</li>
				<li><a href="http://5b4.blogspot.com/2008/08/portrait-louise-anna-kubelka-by-friedl.html" title="View the site">Portrait of Louise Anna Kubelka</a> (1980–1998)<br />
					Friedl Kubelka documents the development of her daughter, from birth to adulthood.</li>
				<li><a href="https://identifythisgirl.blogspot.com/" title="View the site">The Downward Spiral</a> (1983?–1997?)<br />
					"Maria Ramos" as photographed by the New York City Police Department.</li>
				<li><a href="http://kbeveryday.blogspot.com/" title="View the site">Everyday</a> (1987 February 23–present)<br />
					Karl Baden is second only to Roman Opalka for the logevity and glorious perfection of his daily photo project. </li>
				<li><del datetime="2020 April 11">Time of my Life (1991 June 01–present)<br />
					Dan Hanna spins with the sun in this daily aging project.</del></li>
				<li><strong><cite>The Adaption to My Generation</cite> (1998 October 01–present)<br />
					This is where I fit into the scheme of things, case you were wondering.</strong></li>
				<li><a href="https://marctasman.wordpress.com/2009/07/24/ten-years-and-one-day/" title="View the site">daily performances</a> (1999 July 24–2009)<br />
					Marc Tasman receives a package of Polaroid film and begins a ten-year process of daily performances in Polaroid</li>
				<li><a href="http://www.marchoul.net/text-la%20photo-sculpture.htm" title="View the site">La Photo-Sculpture</a> (1999–2006)<br />
					Odile Marchoul discovers 'Photo-Vision' and decides to make identity pictures weekly.</li>
				<li><a href="http://noahkalina.com/582/597#1" title="View the site">Noah K. Everyday</a> (2000 January–present)<br />
					Noah Kalina uses his video camera to try and pinpoint the stages in his life when he's changed.</li>
				<li><a href="http://www.hectorfalcon.com/?page_id=55" title="View the site">Metabolismo alterado</a> (2000?)<br />
					H&#233;ctor Falc&#243;n seems to start bodybuilding for art's sake, though I can't be totally sure as I don't understand Spanish. </li>
				<li><del datetime="2020 April 11">Alarm Clock Self-Portaits (SnoozeButton) (2001?–2004?)<br />
					Dean Baldwin hacks his alarm clock to shoot a digital photograph when he hits the snooze button. Check out his sleeping partners!</del></li>
				<li><del datetime="2020 April 11">Hocking DPP</a> (2001 September–present)<br />
					Pete Hocking takes a daily self-portrait and posts it to the internet. He also finds that he becomes the object of the bear community's desire, as well as a few jackasses'.</del></li>
				<li><a href="http://www.ahreelee.com/film/me_film.html" title="View the site">Me</a> (2001 November–present)<br />
					Ahree Lee makes a nice video of three years of everyday photographs. </li>
				<li><a href="http://www.eyemachine.com/project/2002/konzept.htm" title="View the site">eyemachine</a> (2002 January 01–present)<br />
					Andy Luginb&#252;hl takes the portraits, and then set up a system to animate the images with the eyes lined up. I did this with a year's worth of images manually a few years ago. I'd never do it manually again...</li>
				<li><a href="http://09h09.blogspot.com/" title="View the site">09h09</a> (2002 September 18–present)<br />
					Jean-Michel Gobet takes a photo at 09:09 every day and blogs about it. What's more amazing is that he's awake at 09:09 every day!</li>
				<li><a href="http://www.bobelo.de/" title="View the site">Lebensbilder [Life Pictures]</a> (2002 December, 2003 October, 2004 April–present)<br />
					Tom, Ralf, and Michaela make the daily photo a German family affair.</li>
				<li><del datetime="2008 January 21">O's Daily Photo (2003 January 01–present)<br />
					Orin's image collection was randomly found while I was self-servingly looking at my standings in various search engines. She definitely has more interesting t-shirts than I've seen lately. And that domain name is hilarious.</del></li>
				<li><del datetime="2020 April 11">Daily Jason (2003 January 06–present)<br />
					Jason Fletcher does the 'Daily Photo Project' with goofy faces.</del></li>
				<li><del datetime="2020 April 11">John Stone Fitness (2003 January 06–present)<br />
					John Stone pasty and flabby --&#62; --&#62; --&#62; John Stone tan and cut. Quite possibly the freakest thing I have ever seen.</del></li>
				<li><del datetime="before 2020">Russian DPP (2003 August 02–present)<br />
					Vadim Malguine shaves his head and starts taking photographs.</del></li>
				<li><del datetime="2020 April 11">Daily Marqs (2003 August 27–present)<br />
					Markus does the daily photo 3/4 shot.</del></li>
				<li><del datetime="before 2020">Jeden Tag eins mehr... (2003 September 25–present)<br />
					German Stephan H. Schumann is yet another daily shot-maker.</del></li>
				<li><a href="http://www.twindex.de/" title="View the site">Twindex</a> (2003 November 23–present)<br />
					Welcome at[sic] the Daily Photo Project from Sven and Tobias Staude! Twins doing daily photos. It'll be really sad when one dies.</li>
				<li><a href="http://dailyphotoproject.50webs.com/" title="View the site">Daily Photo Project</a> (2003 November 23–2006 April 14)<br />
					Phil McCombs is another daily dude, though he has some serious lapses in documentation.</li>
				<li><del datetime="2020 April 11">Ellora Klein (2004–present)<br />
					Arno Klein's working on the full documentation of daughter Ellora. Includes video.</del></li>
				<li><del datetime="2020 April 11">Self Portrait (2004 May 14–2005 September 03)<br />
					Trey Bean documents his self portrait via Quicktime.</del></li>
				<li><del datetime="2020 April 11">:18 Project(2004 July–2006 January)<br />
					Christine Gatti takes two photos 18 minutes after every hour, every day for 18 months. She takes one self-portrait, and then one of the environment she is in at that time. Amazing work.</del></li>
				<li><del datetime="before 2020">Olivia Project (2004 July 25–2004 December 25)<br />
					Imelda's friend Olivia Juliana Lyles DeLuna gets her picture taken and her mom posts it on the web. How very cute! I think this project stopped at Christmas-time...bummer.</del></li>
				<li><del datetime="before 2020">Bent Lips (2004 July 25–2005 July 25)<br />
					Priscilla smiles, and smiles, and smiles. Let's hope she keeps it up for longer than a year!</del></li>
				<li><del datetime="before 2020">Me, Myself, and I &#62; 27up (2004 September 16–2009 April 24)<br />
					Matthias Hupp starts the craze in Germany, in Black & White.</del></li>
				<li><a href="http://www.whudat.de/daily.php" title="View the site">Daily Fratze</a> (2005 August 04–present)<br />
					MC Winkels from Germany...</li>
				<li><a href="http://www.dailyfratze.de/" title="View the site">Daily Fratze</a> (2005 August 07–present)<br />
					<del datetime="2008 January 21">Michael Simons from Germany is apparently inspired by MC Winkels from Germany...</del> Now a site that "is a small community centered around daily photo projects. You'll find a place with room for narcissism, discussion, in short: documented lives."</li>
				<li><a href="http://www.jeder-tag.de/" title="View the site">Jeder-Tag</a> (2006 January 01–present)<br />
					Anthoney from Germany is yet another white guy who looks like he's in IT doing a daily photo.</li>
				<li><a href="http://russellhiggs.shutterchance.com/archive.php" title="View the site">Russell Higgs</a> (2006 July 21–present)<br />
					Russell's only been at it for a couple months, but I am flabbergasted at the results so far. </li>
				<li><del datetime="before 2020">yyyymmdd (2006 November 10–present)<br />
					Taylor Everett's personal daily photo adventure.</del></li>
				<li><del datetime="before 2020">Jedentag (2007 January 01–present)<br />
					Dimitri comes from Germany/Berlin and he takes every day pictures. </del></li>
				<li><del datetime="2020 April 11">Everyday from Birth (2007 January 22–2008 January)<br />
					David P Craig's parents attempt to make him a daily-documented boy.</del></li>
				<li><del datetime="2020 April 11">Daily Photo Project (2007 January 31–present)<br />
					Skip Hursh adds to the daily photo milieu.</del></li>
				<li><del datetime="before 2020">everyday (2007 February 07–present)<br />
					Mark Curry's another fine young lad making his way along the daily photo journey.</del></li>
				<li><del datetime="2020 April 11">Cheri Cheri Lady (2007 March 21–present)<br />
					Kotla: “I’m imitating others, because I can't change.”</del></li>
				<li><del datetime="2020 April 11">My Maya-a-Day (2007 March 24–present)<br />
					Ben Udkow gets his Maya to be in front of the camera every day since birth.</del></li>
				<li><del datetime="2020 April 11">13 to Infinity (2007 April 07–present)<br />
					David Hinds makes it over 9 months and hopes to continue FOREVER!</del></li>
				<li><a href="http://www.flickr.com/photos/documentationofdecomposition/" title="View the site">Documentation of Decomposition</a> (2007 December 19–2008 October 02)<br />
					Sean Hunt MacLean adds his face to the growing collection of Daily photographers. </li>
				<li><a href="http://blogbeginsatforty.blogspot.com/" title="View the site">Blog Begins At Forty</a> (2009 March 26–present)<br />
					gedek! begins at forty, who knows when he'll end... </li>
				<li><del datetime="2020 April 11">Le blog de photos-tous-les-jours (2011 February 14–present)<br />
					Ganael Portet adds himself to the list.</del></li>
			</ul>
			</div>
			<div class="page_column">
			<h2 class="top">Other Obsessive Photo Projects</h2>
			<ul>
				<li><a href="http://www.exactitudes.com/" title="Exactitudes">Exactitudes</a> (1994–present)<br />
					photographer Ari Versluis and stylist Ellie Uyttenbroek work together to systematically document the striking dress codes of various social groups. Very nice. indeed. </li>
				<li><a href="http://www.tomphillips.co.uk/works/20-sites-n-years/20-slideshows" title="20 South London Sites">20 Sites <em>n</em> Years</a> (1973–present)<br />
					Tom Phillips photographs 20 South London sites annually, in order, at the same time of day. </li>
				<li><a href="http://invinciblecities.camden.rutgers.edu/intro.html" title="Ghettos change">Invincible Cities</a> (1977–present)<br />
					Along the same lines as above, Camilo Jose Vergara has been documenting America's ghettos by photographing the built environment in
		Harlem, the South Bronx, Chicago, Newark and other places since the 1970's. </li>
				<li><a href="http://photooftheday.hughcrawford.com/" title="Jamie Livingston">Photo of the Day</a> (1979 March–1997 October)<br />
					Hugh Crawford and Betsy Reid's digital version of Jamie Livingston's 'Photo of the Day' Polaroid project. </li>
				<li><a href="https://taguchiartcollection.jp/en/artists/tomoko-sawada/" title="Do you know the real Tomoko?">ID400</a> (1998?)<br />
					Tomoko Sawada gets in the photo booth for 400 different personas, including her own. [<a href="http://www.e-sawa.com/" title="She's got some other nice things happening.">her site</a>]</li>
				<li><a href="http://www.firstdayphotography.com/gallery.htm" title="Sunrise">First Day</a> (1999 january–present)<br />
					First Day Photography will sell you a photo of the sunrise on your special day.</li>
				<li><a href="http://www.eat22.com" title="Is it the original food-log?">Eat 22</a> (2001 March–2002 March)<br />
					Ellie Harrison documents everything she eats for one full year.</li>
				<li><del datetime="2020 April 11">Get In My Belly! (2002 October–present)<br />
					Adam Seifer documents everything (not really) he eats.</del></li>
				<li><del datetime="2008 January 21">Pasta-Log Yet another documentation of food, this time, only pasta, and framed beautifully.</del></li>
				<li><del datetime="2020 April 11">American Mile Markers Matt Frondorf drives across the USA (New York to San Fran) taking a photo every mile.</del></li>
				<li><a href="http://quietamerican.org/related_mnem.html" title="30 a day.">30fpd: a day, a week, a year</a> (2003 January 08–present)<br />
					Aaron Ximm is making a movie of his life, one second at a time. </li>
				<li><a href="http://www.fluxus.org/FluxusMidwest/doorknobs/" title="The Midwest rules! Not for germaphobes.">Doors I Touched Today</a> (1999 June 03)<br />
					Fluxus Midwest researches the action of doors and knobs.</li>
				<li><a href="http://2004-2040.com/" title="A case study for cybernetics.">Every Object Interaction</a> (2003 September–present)<br />
					Alberto Frigo photographs and catalogues every object he interects with. It seems like he has almost replaced one of his hands with a camera. At the time he sent me this link, there were 23'308 images entered into the database.</li>
				<li><a href="http://www.365plrds.com/" title="Polaroids are fun!">365 Polaroids</a> (1997)<br />
					Andy Walker presents a year's worth of polaroid self-portraits.</li>
				<li><del datetime="before 2020">One a Day Project (2002)<br />
					Aimee Sealfon interacts with, then photographs, 365 people.</del></li>
				<li><del datetime="2020 April 11">The Shower Project (1999)<br />
					Brian Benson's successful (?) attempt to shower with 100 different women.</del></li>
			</ul>
		</div>
		</section>
	</article>
@endsection

@section('extra-nav')
	<nav id="feralhog" class="hog"><a href="../">The Adaption to My Generation</a></nav>
@endsection
