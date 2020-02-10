
<!DOCTYPE html>
<html>
<head>
	<title>Football Statistics, News, Goals & More - {{config('app.name')}}</title>
<meta name="description" content="Football Matches Statistics, Reviews, Goals & Highlights" />
<meta property="og:site_name" content="{{config('app.name')}}" />
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
<meta property="og:locale" content="en" />
<meta property="og:title" content="Football Statistics, News, Goals & More - {{config('app.name')}}" />
<meta property="og:description" content="Football Matches Statistics, Reviews, Goals & Highlights" />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pagination.css')}}">


</head>
<body>

@extends('header')

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

	<section class="container">
		<div class="row">
			<div class="hidden-lg hidden-md hidden-sm col-10xs comp">
				<div class="league" id="toggle">
					<a href="#">
						<h2><span class="caret"></span> COMPETITIONS <span class="caret"></span></h2>
					</a>
				</div>
			</div>
			<div class="col-lg-4 pd0 col-4-md col-10-sm">
				<ul class="leagues" >
					<li class="league">
						<a href="/league/champions-league"><h1>CHAMPIONES LEAGUE</h1></a>
					</li>
					<li class="league">
						<a href="/league/europa-league"><h1>EUROPA LEAGUE</h1></a>
					</li>
					<li class="league">
						<a href="/league/ligua-santander"><h1>LA LIGUA SANTANDER</h1></a>
					</li>
					<li class="league">
						<a href="/league/premier-league"><h1>ENGLISH PL</h1></a>
					</li>
					<li class="league">
						<a href="/league/ligue-1"><h1>LIGUE 1</h1></a>
					</li>
					<li class="league">
						<a href="/league/bundesligua"><h1>BUNDESLIGA</h1></a>
					</li>
					<li class="league">
						<a href="/league/calcio"><h1>CALCIO</h1></a>
					</li>
					<li class="league">
						<a href="/league/others"><h1>OTHERS</h1></a>
					</li>
				</ul>

				<div class="second-add hidden-md hidden-sm hidden-xs">
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

<?php $events = $homecontroller->getStats();  ?>
			<div class="col-lg-7 pd0" >

				<a href="/event/{{$events[0]['id']}}/{{$events[0]['team1']}}-vs-{{$events[0]['team2']}}/stats"><div class="principal-new">
					<div class="principal-new-pic">
						<img src="{{$events[0]['newsphoto']}}" class="principal-new-img">
					</div>
					<div class="pr-new-result">
						<p> <br />{{$events[0]['team1']}} {{$events[0]['result1']}} - {{$events[0]['result2']}} {{$events[0]['team2']}} - Goals & Highlights</p>

					</div>
				</div></a>
<?php for($i=1; $i<sizeof($events); $i++){ ?>
				<div class="side-news">
					<a href="/event/{{$events[$i]['id']}}/{{$events[$i]['team1']}}-vs-{{$events[$i]['team2']}}/stats">
					<div class="side-new">
						<div class="side-new-pic">
							<img src="{{$events[$i]['newsphoto']}}" class="side-new-img">
						</div>
						<div class="side-new-result">
							<p>{{$events[$i]['team1']}} {{$events[$i]['result1']}} - {{$events[$i]['result2']}} {{$events[$i]['team2']}} - Goals & Highlights</p>
						</div>
					</div>
					</a>
				</div>

<?php } ?>			

			</div>

		</div>
	</section>




<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

</body>
</html>
