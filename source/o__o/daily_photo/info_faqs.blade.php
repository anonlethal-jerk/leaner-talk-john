@php
	$page->title = 'Frequently Asked Questions';

	$t_series_array = $page->series_daily_photo;
	$t_slug         = $page->series_daily_photo->slug;
	$t_series       = $page->series_daily_photo->title;
	$t_js           = $page->series_daily_photo->js;

	$t_meta_description = 'Questions and comments JK’s received regarding his daily photo project.';

$d1 = new DateTime();
$d2 = new DateTime('1976-01-11');
$diff = $d2->diff($d1);
$t_age = $diff->y;

$t_faqs = [
	'prj_notes' => 'Next video: 2022',
	'faqs'      => [
		[
			'questions' => [
				'just how did you manage to keep your eye on the same level? did you use some kind of software for that?',
				'How did you manage to keep the camera in the same place each photo.',
				'I started a daily photo project, too, and only wanted to know which tool you’re using to make the photos match each other according to the position, rotation and size of the face.',
				'How did you align the photos?',
			],
			'answers'   => '<p>Adobe After Effects’ Image Stabilization Plugin.</p>',
		],
		[
			'questions' => [
				'Why?',
				'why you are taking your photos every day?',
				'I am just wondering what gave you this idea?',
			],
			'answers'   => '<p>The project began out of spite. I had just purchased a digital camera (<a href="http://www.dpreview.com/reviews/specs/Nikon/nikon_cp900.asp" title="The camera I use">Nikon CoolPix 900</a>), and it was rather expensive. My girlfriend at the time asked me why I bought it and what I was going to do with it. I explained. She seemed unconvinced and asked if I was "going to use it every day" with sarcastic inflection. I told her yes, and resolved to do so. Inception!</p>
				<p><em>* Supposedly this story is untrue. At some point Michelle explained to me that I had wanted to do this with a Polaroid prior to the digital camera but couldn’t justify the ongoing expense of the film at the time.</em></p>',
		],
		[
			'questions' => [
				'I wonder what’s the meaning of this?',
				'IS there a point or reason?',
				'Nice pictures but eh with what vision?',
				'I think that’s why you’re doing this?  To see the change?',
			],
			'answers'   => '<p>Initially, I thought of the project focusing on the differences that one can see in the self from day to day. Same person, different personas. As the project grew and grew, it became more about the process of the whole. I began to look at the long-term changes that occur parallel to the short term changes. These changes will become more and more apparent as the project ages 20-30+ years. Now I’m looking towards the end. It’s a morbid proposition, but something that must be faced.</p>',
		],
		[
			'questions' => [
				'Smile.',
				'why dont you smile?',
				'my friend wants you to smile in a photo',
				'You have the makings for a GREAT smile...where is it?',
				':)',
			],
			'answers'   => '<p>I don’t smile for this project because I want the images to be as ‘subtly objective’ as possible. I like to be able to extract a specific feeling from what should be an expressionless face. There are days when you can see a lot from the way the muscles are situated in the face. Granted, it is next to impossible to see these things when the images are so small, but trust that they are there.</p>',
		],
		[
			'questions' => [
				'Bara att h&aring;ret v&auml;xte och att du skaffat linser nu?!',
				'&iquest;por que has puesto tantas fotos?',
				'Wer ist der h&uuml;bsche Mensch?',
				'je voulais savoir quel age tu avais??',
			],
			'answers'   => '<p>I am the byproduct of the American education system. As a result, I only understand English. I regret this fact every day.</p>
				<p>Unfortunately, Babelfish only goes so far when translating text.</p>
				<p><em>* Thanks to the help of various visitors, I now know all of these questions. Much appreciated.</em></p>',
		],
		[
			'questions' => [
				'i had that idea a couple of months ago too, but didnt do it.',
				'its like something i would do',
				'I had the same idea sime weeks ago, but my webcam went broken...',
				'I did the same with a tree in front of my house but lost the data in a crash! Did not have the courage to start up again!',
				'I was planning to do something like that for a long time. But PLANNING and actualy DOING something are two very different things.',
			],
			'answers'   => '<p>The last one says it best.</p>
				<p>Or, as Michelle says, “The more you do, the more you get done.”</p>',
		],
		[
			'questions' => [
				'i want to do the same!! i must follow you!',
				'i want to do this to record for my children what i looked like every day.',
				'I had a idea to photog. my twins on a monthly basis since birth, they are now 6, too late to start? what are your thoughts',
				'If I copy you and build my own site, will I be crampin’ your style?',
			],
			'answers'   => '<p>Go for it! It’s never too late to start anything.</p>
				<p>Since the internet’s an enormous space, I doubt I’ll be cramped. In fact, here’s a link to <a href="../related_photo_projects/" title="See other daily photo projects!">other obsessive photo projects</a>.</p>',
		],
		[
			'questions' => [
				'Have you ever created an animated GIF or QT movie of all the images?',
				'Here is an animation I threw together real quick',
				'its 571 frames of your head it translated into 2megs',
				'Hey man, can i use u’r pics to do a flash-film-evolution?',
			],
			'answers'   => '<p><del>Yes, I have created a time-lapse animation of all the images. I’ve done it twice, using the original full-size photos, and output the result to video. The result was nice, but took much too much time, as I meticulously aligned the eyes in each image, so there would be a focal point. Why don’t I have a smaller version on the site? Because I can’t afford to serve out that much traffic. Plus, I only like the idea of the animation as an end result, and this project hasn’t ended.</del></p>
				<p>As far as using the images to create your own animation...Go for it. Just don’t send it to me. I’ve received enough, and they do me no good. I have the full-size images, and don’t need an animation of the web images.</p>
				<p><strong>Update</strong> (2006 Oct 01): I put together an <a href="../living_my_life_faster_2006">animation of the project</a> because a lot of the issues I had before no longer apply. I also plan to update it every eight years with the latest batch of photos.</p>
				<p><strong>Update</strong> (2014 Oct 01): Annnnd, the <a href="../living_my_life_faster_2014">2014 animation of project</a>.</p>',
		],
		[
			'questions' => [
				'WHO ARE YOU?',
				'Who’s that guy?',
				'Whats your name?',
				'And isn’t your name Mike? You look like Mike.',
			],
			'answers'   => '<p>Jonathan Keller Keller</p>',
		],
		[
			'questions' => [
				'Who had the time to take so many pictures of you?',
			],
			'answers'   => '<p>Uh, I did.</p>',
		],
		[
			'questions' => [
				'WHERE ARE YOU?',
			],
			'answers'   => '<p><del>Steel Town</del> <del >Motor City, USA</del> <del>The Big Apple</del> <del>Hamsterdam</del> <del>Halibut Capital</del> Ocean State</p>',
		],
		[
			'questions' => [
				'How are you?',
			],
			'answers'   => '<p>Doin’ fine, thanks.</p>',
		],
		[
			'questions' => [
				'How old are you?',
				'How old were you when did you start? We tip you were 17. Is it right?',
			],
			'answers'   => '<p>Started the project at age 22. Currently about '.$t_age.'. Although my birthday happens every year...hint, hint.</p>',
		],
		[
			'questions' => [
				'How long is this going to go on??',
				'did you intend for this to go on this long?',
				'Hope you live forever!',
			],
			'answers'   => '<p>The project will continue until the day I die. Only then will it be complete, and worth its true value. Hopefully the completion date is far off, but you never know, right? Unfortunately, I won’t ever see it finished. It’s really a heckuva Catch-22 I’ve set up for myself.</p>',
		],
		[
			'questions' => [
				'i dont want to count.... how many days is this?',
				'i was to lazy to count: when did you start this project?',
				'How many are they?',
			],
			'answers'   => '<p>I don’t want to count either. I started the project on 1998 October 01. During the period between 1999 September 29, and 2000 May 25, I was unable to continue with the project. Today is...do the math.</p>
						<p>I suppose since I’m a web dork, I should write a little script to automatically count the number of photos. I’ll get on that tomorrow.</p>',
		],
		[
			'questions' => [
				'You look so much like my cousin, Allen.',
				'Sometimes you are similar <a href="http://us.imdb.com/Name?Gere,+Richard" title="IMDB info">Richard Gere</a>, sometimes <a href="http://us.imdb.com/Name?Depardieu,+G%E9rard" title="IMDB info">Gerad Depardiu</a> and sometimes you look like <a href="http://us.imdb.com/Name?Hoffman,+Dustin" title="IMDB info">Dustin Hoffman</a>.',
				'Mullet makes you look a little like <a href="http://us.imdb.com/Name?Corbett,+John+(I)" title="IMDB info">the actor</a> who played Chris on Northern Exposure...',
				'you look like a Ted Bundy/Chester Molester type.',
				'You look kinda like Charles Bronson.',
				'The photos of you with the shorter hair do makes you look like a relative of the film actor <a href="http://us.imdb.com/Name?Cooper,+Chris+(I)" title="IMDB info">Chris Cooper</a>. When your hair is longer you look like the film actress <a href="http://us.imdb.com/Name?Plummer,+Amanda" title="IMDB info">Amanda Plummer</a>.',
				'The third row, second picture you remind me of my boyfriend. Scary looks like you guys are twins.',
			],
			'answers'   => '<p>As you can see, I’m a pretty average-looking fella. This leads to me looking like a lot of different folk. It also leaves me looking like no one in particular.</p>
						<p>Once, in a <a href="http://www.digitalcity.com/newyork/entertainment/venue.adp?vid=194067" title="I heart Bergen Bagels. What else? What else?">bagel shop</a> in Brooklyn, I was accosted by a woman. She stated that I looked “exactly like a perfect mix of three of her best friends.” I told her that I had no idea how to respond to such a statement. She agreed, and I bought my bagel.</p>',
		],
		[
			'questions' => [
				'you’ve been quite a nerd on the first pictures, tough ;)',
				'fucking nerd,fucking,fucking,fucking',
				'u r a fucking idiot!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!',
				'get a life u loser!',
			],
			'answers'   => '<p>This list could really go on much longer than these 4, but you get the idea. Passion of any sorts is amazing.</p>',
		],
		[
			'questions' => [
				'do you have nothing better to do?',
				'have u got many spare time ?',
				'U were boring, right?',
			],
			'answers'   => '<p>No, I don’t have anything better to do. No, I am not bored. The amount of time I devote to this project is minimal, to be honest. 1 minute a day to snap the day’s photo, and 30 minutes every 10-12 days to get the photos from the camera to the site. </p>',
		],
		[
			'questions' => [
				'Need a hair cut , maybee !!!',
				'Oh yeah, and your hair looked cooler when it was long, I think.',
				'I definitely prefer you with shorter hair & no mustache',
				'I like you better with longer hair.',
			],
			'answers'   => '<p>I’m sure my hair will start fading soon. At least I still have options.</p>',
		],
		[
			'questions' => [
				'And some other shirts, maybee !!!!!!',
				'what is that your favorite orange shirts???',
				'You must really like your red shirt :)',
				'Ur best color to wear is white.',
				'do you own any plaid or striped shirts.....dont look like you get laid much, maybe you need plaid or striped shirt',
			],
			'answers'   => '<p>Contrary to popular belief, I do own more than 3 shirts. In fact, I own 3 red shirts that are exactly the same, as well as a number of plain, white t-shirts. Now, that doesn’t mean I don’t wear the same clothes 2 (or more) days in a row, but it’s not quite as bad it seems. I just don’t care enough. If you have a serious problem with the lack of diversity in my wardrobe, I’d gladly accept clothing donations. I wear a small to medium shirt. </p>',
		],
		[
			'questions' => [
				'How do you make your photos, just holding cam in your hands and taking picture?',
				'Was your project shot with film or digital?',
				'Do you have an automatic program or something, that snaps you up daily and pushes the pic to the web??',
				'I want to make a project like yours, can you give me some tips? how do you take a pictures of yourself? do you using tripod or somthing? are you use some manage system to upload the pictures every day?',
			],
			'answers'   => '<p>Because I chose the <a href="http://www.dpreview.com/reviews/specs/Nikon/nikon_cp900.asp" title="Man, I need a new camera!">Nikon CoolPix 900</a> as my digital camera, I am able to hold the camera out in front of me to take the image. I am able to see the LCD screen as I snap the photo, which allows me to frame the image correctly. After about 10-12 photos, I copy them to my computer and rename them. I set up an action in Photoshop that resizes, sharpens, and saves the web version of the photos. Then I upload them via FTP and change the PHP document to accommodate  the new images. That’s it.</p>',
		],
		[
			'questions' => [
				'you take your photos at the same time/hour every day???',
				'when do you take the pictures?',
			],
			'answers'   => '<p>I don’t have a specific time that I take the photo each day. Usually it’s in the evening.</p>',
		],
		[
			'questions' => [
				'were those one per day or just a mad session?',
				'wondered if some of the pics are fakes ?',
				'are each and all unique photos ?',
			],
			'answers'   => '<p>It’s subtitled the Daily Photo Project, and wouldn’t really be much of a project if it was all false, would it? </p>',
		],
		[
			'questions' => [
				'maybe u also have a webcam?',
			],
			'answers'   => '<p>It’s integrated in the laptop.</p>',
		],
		[
			'questions' => [
				'are you serious?',
				'Are you crazy????',
				'are you weird or just really funny?',
			],
			'answers'   => '<p>Uh...I cannot respond to this.</p>',
		],
		[
			'questions' => [
				'Do you get a lot of email asking you the same question?',
			],
			'answers'   => '<p>Yes, which is why I made this FAQs page.</p>',
		],
		[
			'questions' => [
				'Why aren’t there any photos from 1999-09-29 to 2000-05-26 ?',
			],
			'answers'   => '<p>I was in Antarctica, working as a janitor. I didn’t know if they would have appropriate computer facilities to continue the project. There was a weight limit for the amount of stuff we could bring down with us. Also, after being on the Ice, I had planned to backpack around New Zealand for 6 weeks. I thought it was best to abandon the hassle of trying to work out all the technical details with regards to my digital camera. I do regret not working out a satisfactory alternate solution though. Never again.</p>',
		],
		[
			'questions' => [
				'By the way, in Antarctida, did you go with an organized trip or something? Or did u do it on your own?',
				'How long did you stay there? 4 months? All year? What was your job? I’ve been thinking about going for such a long time. Is there an age limit?',
			],
			'answers'   => '<p>I went to Antarctica to work for Antarctic Support Associates, a contractor that was in charge of employing the support staff for the United States’ Antarctic Program. I applied for a janitor position, which I received, for the summer 1999-2000 season. I was there from October through February, about 5 months. I believe  you must be at least 18 years old. <del>Raytheon Polar Services</a> is currently in charge of employment, if you’re interested.</del></p>',
		],
		[
			'questions' => [
				'But only half your page loads.....is that on purpose or accidentally?',
				'Infortunaltely the shots 2001-01-11 and following are not shown (broken link)',
			],
			'answers'   => '<p>The Daily Photo Project is starting to get large. Some browser/computer/ISP configurations can’t seem to handle the load. Sorry, but it’s the nature of the beast.</p>',
		],
		[
			'questions' => [
				'if you want to answer, i’m interested, what does your site’s strange name mean?',
				'Why c71123.com ?',
			],
			'answers'   => '<p>When I was 5 years old, my father asked me to remember the numbers of three cows that needed to be bred (he was a professional artificial inseminator). The numbers were 7, 11, & 23. Being the math/number dork that I was at that age, I set out to remember those numbers for as long as I possibly could. I hope to have them with me until I die.</p>',
		],
		[
			'questions' => [
				'what do you do?',
				'what do you do for a living? ',
			],
			'answers'   => '<p>I’m an aspiring artist. I do web design to make money.</p>',
		],
		[
			'questions' => [
				'do you get alot of girlfriends with this?',
				'Well are you on line looking for a gal?',
			],
			'answers'   => '<p>No.</p>',
		],
		[
			'questions' => [
				'I love your project but I prefer to see your cock...',
				'you could have more if you take pictures of some other parts of you body',
			],
			'answers'   => '<p>That’s helpful.</p>',
		],
		[
			'questions' => [
				'I like you',
				'will you be my friend?',
			],
			'answers'   => '<p>Uhhh...</p>',
		],
		[
			'questions' => [
				'do you have a significant other?  What do they think?',
			],
			'answers'   => '<p>I do, and she likes the project, but thinks I obsess over it too much. I would have to agree.</p>',
		],
		[
			'questions' => [
				'Are you gay or are you just really bored.',
			],
			'answers'   => '<p>Huh, I never knew homosexuality was a cure for boredom.</p>',
		],
		[
			'questions' => [
				'but I am sure you have already received a LOOOOOT of mails from gay guys..., don’t you?',
			],
			'answers'   => '<p>I really can’t be sure of that one. I must have missed the email header information that lists a person’s sexual orientation.</p>',
		],
		[
			'questions' => [
				'Have you ever heard of the Antichrist?',
			],
			'answers'   => '<p>This question was from a woman who thought I was a 38 year-old gay writer (who I happen to have designed a website for). She delivered me from my homosexual lifestyle after asking the question. Seriously, what century is this?</p>',
		],
		[
			'questions' => [
				'people ive showed love it, is that ok?',
			],
			'answers'   => '<p>Yes, but call me if the condition persists.</p>',
		],
		[
			'questions' => [
				'are you happy??',
			],
			'answers'   => '<p>I believe I have a healthy balance of happy, sad, angry, excited, scared, insightful, etc. days.</p>',
		],
		[
			'questions' => [
				'are u tired ya?',
			],
			'answers'   => '<p>I spend a good deal of time awake. That leads to being tired a lot of the time.</p>',
		],
		[
			'questions' => [
				'like in "<a href="http://us.imdb.com/Title?0114478" title="IMDB info">Smoke</a>" with <a href="http://us.imdb.com/Name?Keitel,%20Harvey" title="IMDB info">H.Keitel</a>',
			],
			'answers'   => '<p>So I’ve heard. I have yet to see this movie, and am thinking more and more about never seeing it.</p>',
		],
		[
			'questions' => [
				'MY FRANK’S HAIR??',
			],
			'answers'   => '<p>Some of it.</p>',
		],
		[
			'questions' => [
				'Have you ever looked at one of those pics and say that’s not what i look like?',
			],
			'answers'   => '<p>Every day.</p>',
		],
		[
			'questions' => [
				'Let me ask you...did you find yourself in any of these photos?',
			],
			'answers'   => '<p>The longer I continue, the less I feel like the project represents me as an individual.</p>',
		],
		[
			'questions' => [
				'is this a new "wheres wAldo?"',
			],
			'answers'   => '<p>I wish. I’d be traveling a lot more!</p>',
		],
		[
			'questions' => [
				'Have others copied off of your site?',
			],
			'answers'   => '<p>None that I’ve seen, but apparently some people want to copy it.</p>',
		],
		[
			'questions' => [
				'You’re not a serial killer are you?',
			],
			'answers'   => '<p>Heavens No! But I’ve read a couple books about serial killers. Seen quite a few movies as well.</p>',
		],
		[
			'questions' => [
				'BUT HOW DO YOU KEEP A STRAIGHT FACE?',
			],
			'answers'   => '<p>It gets easier as time goes on.</p>',
		],
		[
			'questions' => [
				'My friend Hermann says he took the first picture of you...Is that true?',
			],
			'answers'   => '<p>Hermann is a liar. I’ve taken every photo. I’d watch your personal belongings, because he’s probably a thief as well.</p>',
		],
		[
			'questions' => [
				'Can I ask 1 more question?',
				'How do I contact the daily photo guy?',
			],
			'answers'   => '<p>Yes. email me at jk (at-symbol) jk-keller (period) com</a></p>
						<p>Although you should check out the latest batch of questions and answers first.</p>',
		],
		[
			'questions' => [
				'Is it possible for you to answer to some questions before thursday? that would help me for my paper?',
			],
			'answers'   => '<p>Here are my Friday answers...</p>',
		],
		[
			'questions' => [
				'How many emails do you receive by day, by week?',
				'How many people watch you all day long and write you with confessions of love?',
			],
			'answers'   => '<p>From 2003 January 01 to 2003 July 11 I received 2111 emails to my website account. 613 of which were real emails from people about the site, with 35 containing ‘love’. 1498 were junk email, 10 of which were apparently sent from the future (2038), and 59 containing ‘love’.</p>',
		],
		[
			'questions' => [
				'do you love yourself?',
			],
			'answers'   => '<p>For the most part, no, although sometimes I watch myself all day long and write myself with confessions of love.</p>',
		],
		[
			'questions' => [
				'How is your art going? Do you have any of your work posted?',
				'Oh, and do you have past projects you have done? what other projects are you working on?',
			],
			'answers'   => '<p>My art’s going a little slow at the moment. I feel as though I am on the verge of a very productive period in my life. You can see a couple other projects at my <a href="http://jk-keller.com" title="The Main Site">website (http://jk-keller.com)</a>. And check back every so often to see if there’s anything new.</p>',
		],
		[
			'questions' => [
				'Did you go to school for art?',
			],
			'answers'   => '<p>I guess you could call it that. I started at the <a href="http://www.risd.edu" title="[exit site]">Rhode Island School of Design</a>, finished my unergrad at the <a href="http://www.mcad.edu" title="The Alma Matter">Minneapolis College of Art + Design</a> and got a Masters from the <a href="http://www.cranbrookart.edu" title="The Alma Matter 2">Cranbrook Academy of Art</a>.</p>',
		],
		[
			'questions' => [
				'Do you intend to continue this project outside of the web, make an exposition for example?',
				'Did you have proposals for extending this project?',
				'Have you considerd/shown this in a gallery setting?',
			],
			'answers'   => '<p>I’ve had a number of ideas to extend this project past the website. I’d like to get huge prints made of each year’s photos. Maybe a set of yearly books or videos. And yes, I would like to show the project in a gallery/exhibition setting. If you know someone who is interested, email me at jk (at-symbol) jk-keller (period) com.</p>',
		],
		[
			'questions' => [
				'As you say regarding the end of the project, ‘one never knows,’ have you arranged for a print version of the project to be published posthumously?  Have you considered it?',
			],
			'answers'   => '<p>I’ve thought about it, and mentioned ‘what I’d like to happen should I become incapacitated or die’ to a couple of close friends, but nothing has been officially arranged. I do like the idea of allowing anyone to do what they would like to with the photos. Let the photos immediately live in the public domain.</p>',
		],
		[
			'questions' => [
				'I want you to tell me if you know the artist <a href="http://www.jointadventures.de/jointadventures/opalka/" title="An amazing French artist">Roman Opalka</a>, because this man has the same project as you but since...1965 !!!!!!! So, are you a copycat, a fan or just a man who has a similar project before knowing the original?',
				'Is yours, so far as you know, the first such project?',
			],
			'answers'   => '<p>I started the project believing that someone had done this type of thing before, but I had personally never seen or heard of anyone. Throughout the time I have been working on the project I have learned of a number of people doing similar types of projects, including <a href="http://www.jointadventures.de/jointadventures/opalka/" title="An amazing French artist">Roman Opalka</a>, and have listed them on a <a href="../related_photo_projects/">related photo projects page</a>. Each is unique, like the personality that is creating the work.</p>',
		],
		[
			'questions' => [
				'how does this inspire you?. what other forms of art inspires you?',
			],
			'answers'   => '<p>My project doesn’t really inspire me beyond simple narcissism & solipsism. As far as other forms of art that inspire me, everything either stimulates me because of how amazing it is, how much I hate it, or how indifferent I am to it. All three of these reactions leave me with the feeling that I need to create work beyond my current abilities.</p>',
		],
		[
			'questions' => [
				'Are you the designer of the site? And what software did you make it in, Flash and Dreamweaver?',
				'What program do you use for your site, design wise.',
			],
			'answers'   => '<p>Yes, I am the designer of the site. I use Photoshop & Illustrator to create and optimize the images and <del>BBEdit</del> Coda to code the HTML and PHP.</p>',
		],
		[
			'questions' => [
				'Where is your site hosted? Are you happy with the service and all of that?',
			],
			'answers'   => '<p><del>The website is hosted by <a href="http://www.he.net" title="They’re electric">Hurricane Electric</a> in California. It may be more expensive than some other hosts out there, but they have been unbelievable when responding to questions. I really think they are great, and would definitely recommend them to anyone looking for a serious web host. They even send me a hand-written holiday card every year, and I think that’s very sweet.</del></p>
						<p><del>Currently hosted at <a href="http://mediatemple.net/">Media Temple</a>. We’ll see how it goes.</del></p>
						<p>Now hosted at <a href="http://dreamhost.com/">Dreamhost</a>.</p>',
		],
		[
			'questions' => [
				'Can I publish you photo in my blog?',
				'are you doing something covert with your images?',
				'I’m using that image in my blog and it currently is broken. Would you rather host it from my site?',
				'Usually I want to do that-host images on my site, but I don’t want to make it seem like I am stealing your images.',
			],
			'answers'   => '<p>Yes, you can publish my photo in your blog. If you’d like to use the photos for publication, please email me at jk (at-symbol) jk-keller (period) com for permission. I’m going to say “Yes”, but I’d like to know where they’re being used for ego’s sake.</p>',
		],
		[
			'questions' => [
				'can i add your site in my friend gallery?',
			],
			'answers'   => '<p>You do not need my permission, yes.</p>',
		],
		[
			'questions' => [
				'so could u do me a favour to add it into ur links?',
				'could you give us a link?',
			],
			'answers'   => '<p>If it’s obsessive enough, yes.</p>',
		],
		[
			'questions' => [
				'Do you know what kind of people go on your website? If they’re usually American, or strangers... Does it have a lot of success?',
			],
			'answers'   => '<p>I have a vague idea of where people are from who visit the site. I can say that they are from all over the world, which is quite exciting. Usually a certain country or area will increase quickly and then die out, and then another will increase and die. They all come in waves.</p>',
		],
		[
			'questions' => [
				'how much funding do you get from other people?',
				'could you explain more about the daily photo project and why you need donations?',
			],
			'answers'   => '<p><del>Why am I asking donations? Because I wanted a humorous way to show everyone a picture of me smiling, since that is one of the most requested actions concerning the project. And if people feel so inclined to donate a couple bucks, that just helps defray some of the personal cost of hosting the site, and I thank you.</del> No more.</p>',
		],
		[
			'questions' => [
				'There’s no advertising interest behind you’re project? Nikon?',
				'Hey man, can i have a digital camera???',
				'have you ever tried to get free stuff from camera companies? Not that you need one. But I do - can you send it to me?',
			],
			'answers'   => '<p>I’ve never received any advertising interest tied to the project. Maybe I should be hitting up <a href="http://www.nikonusa.com" title="Expensive cameras all around">Nikon</a> for free cameras and stuff, cause I could sure use a new one. If you can <a href="http://www.prnewswire.com/nikon/new_contact.htm" title="Use your influence to help me!">convince Nikon</a> (or anyone else for that matter) to give me a new camera, then I’ll send you my old one. Seriously.</p>',
		],
		[
			'questions' => [
				'what would happen if ur camera broke and u werent able to take a pic of urself that day, i hope its in good condition',
				'Since you intend for this to be a life-long project, what sort of provisions have you made for insuring that the picture data is not lost?',
			],
			'answers'   => '<p>If my camera broke, I would either go out and buy a new one (if I had the time and money) or I would use one of my phone’s camera or someone else’s. It wouldn’t really be that overwhelming of an event.</p>
							<p>As far as long-term and disaster data protection, I keep multiple backups, both online and off.</p>',
		],
		[
			'questions' => [
				'Why don’t you stamp the day and time on your photos?',
			],
			'answers'   => '<p>The date is the name of the image file, such as 20000101.jpg (New Year’s 2000). The time holds no importance to me and thus I leave it out.</p>',
		],
		[
			'questions' => [
				'No.....No holiday for you?',
				'how do you manage to make the daily picture when you are not at home?',
			],
			'answers'   => '<p>I bring my camera with me when I go away.</p>',
		],
		[
			'questions' => [
				'did someone die?',
				'were you in a period of mourning from photo 20021225 thru to photo 20030104?....you wore black almost every day....',
			],
			'answers'   => '<p>I know if I write that no one close to me has died, someone’s going to drop, so I’ll leave it alone. As for the black, I got 4 new black t-shirts.</p>',
		],
		[
			'questions' => [
				'Gone off yellow?',
			],
			'answers'   => '<p>Apparently you know better than I.</p>',
		],
		[
			'questions' => [
				'when do you plan to stop changing?',
			],
			'answers'   => '<p>I don’t think that’s possible.</p>',
		],
		[
			'questions' => [
				'but how about a - future’s so bright i have to wear shades - snap.',
			],
			'answers'   => '<p>Nah bro.</p>',
		],
		[
			'questions' => [
				'A couple of times you have been wearing different glasses....Why???',
			],
			'answers'   => '<p>Because I own different glasses.</p>',
		],
		[
			'questions' => [
				'u’re the kinda guy who’s always searchin 4 some new activities, right?',
			],
			'answers'   => '<p>I’m going to try and ignore the implications of this statement.</p>',
		],
		[
			'questions' => [
				'Have you ever taken one of these pictures butt naked, then?',
			],
			'answers'   => '<p>I’m going to try and ignore the implications of this statement.</p>',
		],
		[
			'questions' => [
				'why is your hair so fucked up in nearly every picture?',
			],
			'answers'   => '<p>That’s a matter of opinion.</p>',
		],
		[
			'questions' => [
				'Have you ever tried the bald look (from the pictures it doesn’t seem as though you have)?  Seems like it might make for some interesting pictures as the hair grew back in, at least.',
			],
			'answers'   => '<p>This question was prior to any of the many head shavings. While it’s fun to see it grow back, I’m sure it’ll start falling out on its own soon and that will really make for a disturbing set of photos.</p>',
		],
		[
			'questions' => [
				'How did you get your nose to look smaller in some photos? With womens powder?',
			],
			'answers'   => '<p>Yes, that’s it.</p>',
		],
		[
			'questions' => [
				'Do you get irritated by people thinking that they have the right to comment on how you look, dress or style your hair?',
			],
			'answers'   => '<p>If I say “yes”, will you stop emailing me?</p>',
		],
		[
			'questions' => [
				'why only putting pictures of yourself alone?',
			],
			'answers'   => '<p>I couldn’t subject anyone else to my obsession and feel right.</p>',
		],
		[
			'questions' => [
				'I want to ask you if your girlfriend of 1998 october 01 is always your girlfriend?',
				'Do you still have the same girlfriend and does your photo project spoil or do harm to your relationship?',
			],
			'answers'   => '<p><del>Yes, she is</del> No, she’s not. It really had no effect on our relationship.</p>',
		],
		[
			'questions' => [
				'if one day you "divorced"(you are not married, but I don’t know how say the exact word), will you continue this project?',
			],
			'answers'   => '<p>Yes... I am still doing the project</p>',
		],
		[
			'questions' => [
				'Where is the problem?',
			],
			'answers'   => '<p>I think it lies with the parents.</p>',
		],
		[
			'questions' => [
				'Do people around you (family, friends, neighbours) know about your project and website, and if yes, what do they think about it?',
			],
			'answers'   => '<p>The people close to me do know about the project and they all think it makes perfect sense, considering my personality.</p>',
		],
		[
			'questions' => [
				'Do you think it will have personal value?  As in of interest to those close ot you who survive you?  OR do you see it more as simply an art work.',
			],
			'answers'   => '<p>Both.</p>',
		],
		[
			'questions' => [
				'Do you think the project will have any scientific value?  Are you interested in it having any scientific value?',
			],
			'answers'   => '<p>I think it has a certain scientific quality that is interesting, but does it have scientific ‘value’? That’s probably stretching it a bit.</p>
				<p>I guess some facial recognition / age progession people think it may help them develop algorithms, maybe?</p>',
		],
		[
			'questions' => [
				'Which kind of laundry soap do you use?',
			],
			'answers'   => '<p>Usually Liquid Tide.</p>',
		],
		[
			'questions' => [
				'are you going to become a talk-show guest',
			],
			'answers'   => '<p>Tell <del>Katie Couric</del> <del>Meredith Vieira</del> <del>Ann Curry</del> <a href="mailto:today@nbc.com" title="keep’s on changing">Whoever</a>, and maybe I will...</p>',
		],
		[
			'questions' => [
				'Are you a movie fan or do you dream to be a movie-star?',
			],
			'answers'   => '<p>I am a movie fan. While I don’t dream of being a movie-star, if it happened I wouldn’t be displeased.</p>',
		],
		[
			'questions' => [
				'Do you think becoming to new "<a href="http://imdb.com/title/tt0120382/" title="IMDB info">Truman Show</a>"?',
			],
			'answers'   => '<p>Why, are you watching me?</p>',
		],
		[
			'questions' => [
				'I recommend a French film by the name of <a href="http://us.imdb.com/Title?0211915" title="IMDB info">Amelie</a>',
			],
			'answers'   => '<p>Yes, it’s an enjoyable film.</p>',
		],
		[
			'questions' => [
				'What is your favorite movie?',
			],
			'answers'   => '<p><a href="http://us.imdb.com/Title?0056218" title="IMDB info">The Manchurian Candidate</a>. And I’m absolutely appalled that ‘they’ made a <a href="http://us.imdb.com/Title?0368008" title="IMDB info">remake</a> set in the Gulf War. Though, I haven’t seen it yet, and I heard it was really good.</p>
					<p>Some other favorites:<br />
					Comedy: <a href="http://us.imdb.com/Title?0128445" title="IMDB info">Rushmore</a><br />
					Film Noir: <a href="http://us.imdb.com/Title?0052311" title="IMDB info">Touch of Evil</a><br />
					Documentary: <a href="http://us.imdb.com/Title?0116481" title="IMDB info">Hands on a Hardbody</a></p>',
		],
		[
			'questions' => [
				'I finally figured out who you kinda’ look like, <a href="http://us.imdb.com/Name?Affleck,+Ben" title="IMDB info">Ben Affleck</a>...',
				'is that you <a href="http://www.weezer.com/" title="The band’s official site">weezer</a>?',
				'Look at the photo of <a href="http://us.imdb.com/Name?Pearce,+Guy" title="IMDB info">guy pearce</a> on the left. You look very much like him.',
				'hey, do u have a twin brother?',
			],
			'answers'   => '<p>I guess I should be trying to get into more clubs and restaurants, looking like celebrities as I do. Although, <a href="http://us.imdb.com/Name?Affleck,+Ben" title="IMDB info">Ben Affleck</a>? I liked it better when I looked like <a href="http://us.imdb.com/Name?Plummer,+Amanda" title="IMDB info">Amanda Plummer</a>.</p>',
		],
		[
			'questions' => [
				'Have you ever met anybody famous?',
			],
			'answers'   => '<p>Every time I look in the mirror</p>',
		],
		[
			'questions' => [
				'Have you ever been recognized in your everyday life by people you didn’t know but who had seen your face on the website and if yes, how does it feel?',
				'do you get people stopping you on the street and saying things like "Hey, aren’t you that photo every day guy!?".',
			],
			'answers'   => '<p>Not yet.</p>',
		],
		[
			'questions' => [
				'These american guys : I can’t even know if your first name’s "website" or "c71123"?!?',
			],
			'answers'   => '<p>Sooo... apparently my old email address of website (at-symbol) c71123 (period) com confused this woman. Have you ever met someone named ‘website’ or ‘c71123’?</p>',
		],
		[
			'questions' => [
				'what are you like, i mean kind of person are you?',
			],
			'answers'   => '<p>I am who I am, and that’s all that I am. <!-- Have a look at some <a href="../../category/email-online-surveys/" title="Definitely more than anyone needs to know">surveys</a> I’ve filled out over the past years for more information. --></p>',
		],
		[
			'questions' => [
				'may I get a picture of your profil?',
			],
			'answers'   => '<p><!-- <a href="/profiles-exchanged/" title="Reversed">Here you are</a> my dear. -->Ummm</p>',
		],
		[
			'questions' => [
				'how tall are you?',
			],
			'answers'   => '<p>5 feet, 11.5 inches or 1.8161 meters.</p>',
		],
		[
			'questions' => [
				'so what is it that you’re so afraid of?',
			],
			'answers'   => '<p>Forever, or the lack thereof.</p>',
		],
		[
			'questions' => [
				'Is your project sometimes constraining and do you sometimes think you’re going to give up?',
			],
			'answers'   => '<p>It can be constraining, but I will not give up.</p>',
		],
		[
			'questions' => [
				'oh yeah and would u ever take pics of ur childs face(if and when u had them) to see how they change',
			],
			'answers'   => '<p>Well, I don’t plan on having children, so that takes care of that. But even if I did, I wouldn’t subject my son or daughter to his/her father’s compulsion.</p>',
		],
		[
			'questions' => [
				'Are you noticed in the book of guinnes world records?',
				'are you tying to make a record?',
			],
			'answers'   => '<p>No.</p>
						<p>No.</p>',
		],
		[
			'questions' => [
				'Don’t you ever have a hard night?',
			],
			'answers'   => '<p>Never, everything in my life is easy.</p>',
		],
		[
			'questions' => [
				'Why are Americans so obsessed with themselves?',
			],
			'answers'   => '<p>I’m going to blame it on the cleverness of advertising.</p>',
		],
		[
			'questions' => [
				'Why do you have a german last name?',
			],
			'answers'   => '<p>Ancestors.</p>',
		],
		[
			'questions' => [
				'Can we meet?',
			],
			'answers'   => '<p>Yes. Come by the coffee shop tomorrow.</p>',
		],
		[
			'questions' => [
				'what do you do for an encore!',
			],
			'answers'   => '<p>Reincarnation, I guess.</p>',
		],
	],
];

$t_faq_count = 0;

@endphp

@extends('_layouts.master')

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
					<td data-label="Title" class="td--series_title"><h1>Frequently Asked Questions</h1></td>
					<td data-label="Description" class="td--series_description">Questions and comments JK’s received regarding his daily photo project.</td>
					<td data-label="Notes" class="td--series_notes"><p>See also: <strong><a href="/o__o/daily_photo/related_photo_projects/">Related Photo Projects</a></strong></p></td>
				</tr>
			</tbody>
		</table>
		<section class="faqs_tables">
			<table class="table--faqs">
				<thead>
					<tr>
						<th class="td--questions">Questions & Comments</th>
						<th class="td--answers">Answers & Replies</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th class="td--questions">Questions & Comments</th>
						<th class="td--answers">Answers & Replies</th>
					</tr>
				</tfoot>
				<tbody>
				@foreach ($t_faqs['faqs'] as $faq)

					@if (ceil(count($t_faqs['faqs'])/2)-5 == $t_faq_count)
				</tbody>
			</table>
			<table class="table--faqs">
				<thead>
					<tr>
						<th class="td--questions">Questions & Comments</th>
						<th class="td--answers">Answers & Replies</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th class="td--questions">Questions & Comments</th>
						<th class="td--answers">Answers & Replies</th>
					</tr>
				</tfoot>
				<tbody>
					@endif

					<tr>
						<td class="td--questions">
							<ul>
							@foreach ($faq['questions'] as $question)
								<li>{!! $question !!}</li>
							@endforeach
							</ul>
						</td>
						<td class="td--answers">{!! $faq['answers'] !!}</td>
					</tr>
					@php
						$t_faq_count++;
					@endphp
				@endforeach
				</tbody>
			</table>
		</section>
	</article>
@endsection

@section('extra-nav')
	<nav id="feralhog" class="hog"><a href="../">The Adaption to My Generation</a></nav>
@endsection
