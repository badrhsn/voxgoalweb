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
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/sport.css')}}">
    <script src="./js/js.js"></script>
	<script type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js">
  </script>

</head>
<body>




@extends('header')

	<section class="container">

		<div class="matches-schedule">
			<div class="team">
				<img src="{{$events[0]['team1logo']}}" class="team-img">
			</div>
			<div class="vs-logo">
				<h1>VS</h1>
			</div>

			<div class="team">
				<img src="{{$events[0]['team2logo']}}" class="team-img">
			</div>
		</div>

	</section>

	<section class="container">
		<div class="stream-holder">
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
			<?php
			if ($events[0]['live']==='1') {			?>
			<center>
				<div class="servers-buttons">
				<?php $streams = $eventpagecontroller->getServers($events[0]['id']);
				$i =0;
				foreach($streams as $stream){ 
					$i++;
					?>

					<a href="/event/{{$events[0]['date']}}/{{$events[0]['team1']}}-vs-{{$events[0]['team2']}}/{{$events[0]['id']}}/<?php echo $i-1?>"><div class="server">server {{$i}}</div></a>
				<?php  }?>	
				</div>
			</center>

		<?php } ?>

			<div class="player-chat">
				<div style="display: block;width: 100%;">
					<div class="chatbox-player">
						<div class="chatbox hidden-sm hidden-xs">
							<div>
							<iframe frameborder="0"
                              scrolling="no"
                              id="chat_embed"
                              src="https://www.twitch.tv/embed/voxgoal/chat"
                              height="350"
                              width="250">
                      </iframe>
							</div>
						</div>
						<?php
						if ($events[0]['live']==='1') {
										# code...			 ?>

						<div class="player" id="player2">
						<div id="player"></div>
						<script>
							var player = new Clappr.Player({source: "https://1gseehlmhnzctr.mixerseed.info:9001/61/61.m3u8", parentId: "#player"});
						</script>	
												
						</div>
						<?php
							}
			else {?>
						<div class="player coverage">
							<div style="margin-top: 130px;"></div>
							<center>
							<h1>Hi There!</h1>
							<h4>Match coverage will be available when the time comes</h4>
							 </center>
						</div>
			         <?php
			     }

						?>

					</div>

					<div class="ads">
						<center>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 336x280ads -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-4731714652432777"
     data-ad-slot="1187039887"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
						</center>
					</div>

				</div>
				<div class="second-add">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad_300x600 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:600px"
     data-ad-client="ca-pub-4731714652432777"
     data-ad-slot="9511913154"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				</div>
			</div>
		</div>

	</section>



<script type="text/javascript" src="./js/script.js"></script>


</body>
</html>
