<?php $events = $eventstatscontroller->getEventInfo($stats[0]['id'])?>
<!DOCTYPE html>
<html>
<head>
	<title>{{$events[0]['team1']}}  VS {{$events[0]['team2']}}  {{$events[0]['date']}} - {{config('app.name')}}</title>
	<meta charset="utf-8">
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/cdnbye@latest/dist/hlsjs-p2p-engine.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/cdnbye@latest/dist/clappr-plugin.min.js"></script>
<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="javascript" src="http://revolunet.github.com/VLCcontrols/src/jquery-vlc.js"></script>
<link rel="stylesheet" type="text/css" href="http://revolunet.github.com/VLCcontrols/src/styles.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr-responsive-container-plugin@1.0.0/dist/clappr-responsive-container-plugin.min.js"></script>
<script type="text/javascript"src="//cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/sport.css')}}">
    <script src="//cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js" type="text/javascript"></script>
    <script src="./js/js.js"></script>
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3930417,4,111,175,25,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3930417&101" alt="web page hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
<!-- another website analystics -- >
	<script type="text/javascript">
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '5a90c6b70b35910efa00003e');
    t.setAttribute('data-track-path', 'https://track.gaug.es/track.gif');
    t.src = 'https://d2fuc4clr7gvcn.cloudfront.net/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>
<!--ends here -->

</head>
<body>
@extends('header')


<section class="container">

			<center>
				<div class="ads">

				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- large ads -->
				<ins class="adsbygoogle hors-ad"
				     style=""
				     data-ad-client="ca-pub-4731714652432777"
				     data-ad-slot="1286633303"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>

				</div>
			</center>


				<div class="table-ads">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 tbl">

					<div class="sport_new">
						<div class="new_pic">
							<img src="{{$events[0]['newsphoto']}}" width="100%" />
						</div>
						<div class="pr-new-result">
							<p>{{$events[0]['team1']}} {{$events[0]['result1']}} {{$events[0]['result2']}}-{{$events[0]['team2']}} <br />- Goals & Highlights</p>

						</div>
					</div>

					<table class="table table-striped table-bordered table-hover">
							  <tr >
							    <td style=" text-align: left;">Teams:</td>
							    <td>{{$events[0]['team1']}}</td>
							    <td style="color :blue">VS</td>
							    <td>{{$events[0]['team2']}}</td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Possession %:</td>
							    <td>{{$stats[0]['possession1']}}</td>
							    <td style="color :blue"> - </td>
							    <td>{{$stats[0]['possession2']}}</td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Total Shots :</td>
							    <td>{{$stats[0]['totalShots1']}}</td>
							    <td style="color :blue"> - </td>
							    <td>{{$stats[0]['totalShots2']}}</td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Target Shots :</td>
							    <td>{{$stats[0]['onTarget1']}}</td>
							    <td style="color :blue"> - </td>
							    <td>{{$stats[0]['onTarget2']}}</td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Corners:</td>
							    <td>{{$stats[0]['corners1']}}</td>
							    <td style="color :blue"> - </td>
							    <td>{{$stats[0]['corners2']}}</td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Offsides:</td>
							    <td>{{$stats[0]['offsides1']}}</td>
							    <td style="color :blue"> - </td>
							    <td>{{$stats[0]['offsides2']}}</td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Fouls Commited:</td>
							    <td>{{$stats[0]['foolsCommited1']}}</td>
							    <td style="color :blue"> - </td>
							    <td>{{$stats[0]['foolsCommited2']}}</td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Fouls Won:</td>
							    <td>{{$stats[0]['foolsWon1']}}</td>
							    <td style="color :blue"> - </td>
							    <td>{{$stats[0]['foolsWon2']}}</td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Yellow Cards:</td>
							    <td>{{$stats[0]['yellowCards1']}}</td>
							    <td style="color :blue"> - </td>
							    <td>{{$stats[0]['yellowCards2']}}</td>
							  </tr>
							  <tr>
							    <td style=" text-align: left;">Red Cards:</td>
							    <td>{{$stats[0]['redCards1']}}</td>
							    <td style="color :blue"> - </td>
							    <td>{{$stats[0]['redCards2']}}</td>
							  </tr>
						</table>
					</div>


			<div class="second-add">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- 336x280ads -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:300px;height:600px"
				     data-ad-client="ca-pub-4731714652432777"
				     data-ad-slot="1187039887"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>


					<div class="goals">
						<center>
							<div style="margin-top:-25px"><br><br>
								<font style="font-family:'Baloo Chettan', cursive;color:#207291;"></font><br>
								<iframe src="" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling="no" class="the_frame"></iframe><br><br>
							</div>
						</center>
					</div>

		</div>
	</section>

    </body>

</html>
