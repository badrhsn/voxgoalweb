<!DOCTYPE html>
<html>

<head>
    <title>Matches Schedules - {{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/schedules.css')}}">

</head>

<body>

    @extends('header')
    <center>
        <div class="ads">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- large ads -->
            <ins class="adsbygoogle hors-ad" style="" data-ad-client="ca-pub-4731714652432777"
                data-ad-slot="1286633303"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </center>

    <section class="container">
        @for ($i=0; $i<sizeof($schedulescontroller->getTheNumberOfDiffirentesDates()); $i++)
            <div class="fixture-holder">
                <div class="fixtures-match-date">
                    <?php $dates = $schedulescontroller->getTheNumberOfDiffirentesDates();
                        $dateskeys = array_keys($dates); ?>

                    <?php $tomorrowdate = date("d/m/Y", time() + 86400);
                        $todaydate = date('d/m/Y');
                        if ($todaydate == $dateskeys[$i]) { ?>

                    <h4>TODAY</h4>
                    <?php } elseif ($tomorrowdate == $dateskeys[$i]) {?>
                    <h4>TOMORROW</h4>
                    <?php } else {?>

                    <h4>{{$dateskeys[$i]}}</h4>

                    <?php }?>
                </div>


                <?php $leagues = $schedulescontroller->getbydate($dateskeys[$i]);
                    $leagueskeys = array_keys($leagues); ?>
                    
                @for($j=0; $j<sizeof($schedulescontroller->getbydate($dateskeys[$i])); $j++)

                    <div class="fixtures-match-date2">
                        <h4>{{ $leagueskeys[$j]}}</h4>
                    </div>

                    <?php $all_finalgames = $schedulescontroller->getTheleaguesofDay($i, $j);?>
                    @foreach ($all_finalgames as $finalgame)


                    <div class="match-content">
                        <a href="/event/{{$dateskeys[$i]}}/{{$finalgame['team1']}}-vs-{{$finalgame['team2']}}/{{$finalgame['id']}}/0"
                            class="comming-up-match">
                            <div class="comming-up-team cmn1">
                                <div style="text-align: center; margin-bottom: 10px;">
                                    <img src="{{$finalgame['team1logo']}}" class="comming-up-team-pic">
                                </div>

                                <div>
                                    <p>{{$finalgame['team1']}}</p>
                                </div>
                            </div>

                            <div id="comming-up-info"
                                style="display: flex;justify-content: center;flex-direction: column;">
                                <div id="time">
                                    <?php if ($finalgame['live'] == 0) {?>
                                    <p>{{$finalgame['time']}} <font size="1"> GMT </font>
                                    </p>
                                    <?php } else {?>
                                    <p><img src="{{asset('images/live.png')}}" style="width:50px"></p>
                                    <?php }?>
                                </div>

                            </div>

                            <div class="comming-up-team cmn2">

                                <div style="text-align: center; margin-bottom: 10px;">
                                    <img src="{{$finalgame['team2logo']}}" class="comming-up-team-pic">
                                </div>

                                <div>
                                    <p>{{$finalgame['team2']}}</p>
                                </div>

                            </div>
                        </a>
                    </div>
                    @endforeach

                    @endfor
            </div>
            @endfor
    </section>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>

</html>