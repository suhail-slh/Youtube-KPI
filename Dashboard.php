<?php include 'Connection.php';?>
<!DOCTYPE HTML>
<html>
<head>
<style>

#ytrname
{
    font-size:2vw;
    align-self:center;
}
#subs
{
    font-size:2vw;
    float:left;
}
#subcount
{
    font-size:2vw;
    float:left;
}
#views
{
    font-size:2vw;
    float:right;
}
#viewcount
{
    font-size:2vw;
    float:right;
}
#chartContainer1 
{
    height:360px;
    width:100%;
    float:left;
}
#chartContainer2
{
    height:360px;
    width:100%;
    float: left;
}
#chartContainer3
{
    height:360px;
    width:100%;
    float: left;
}
#chartContainer4
{
    height:360px;
    width:100%;
    float: left;
}

</style>

<link rel="stylesheet" href="odometer-theme-default.css" />
        <script src="odometer.js"></script>
        <script type="text/javascript" src='jquery-3.4.1.min.js'></script>
    
        <script type="text/javascript">

            $(document).ready( function() {

                var chanName = "";
                

                loadChannel("UCRijo3ddMTht_IHyNSNXpNQ");
                function loadChannel(name) {

                    chanName = name;

                    var url = 'https://www.googleapis.com/youtube/v3/channels?part=statistics&id='+name+'&key='; //insert API key

                    $.getJSON(url, function(data) {

                        $('#subs').html("SUBSCRIBER COUNT");
                        $('#views').html("VIEW COUNT");
                        $('#subcount').html(data.items[0].statistics.subscriberCount);
                        $('#viewcount').html(data.items[0].statistics.viewCount);

                    });

                    var url2 = 'https://www.googleapis.com/youtube/v3/channels?part=snippet&id='+name+'&key='; //insert API key

                    $.getJSON(url2, function(data) {

                        $('#ytrname').html(data.items[0].snippet.title);

                    });
                }
                
            });

        </script>


</head>
<body style="background-color:white;">
<p id="ytrname" align='center'></p>
<p id="subs"></p>
<p id="views"></p>
<br><br><br><br><br>
<div id="subcount" class="odometer">0</div>
<div id="viewcount" class="odometer">0</div>
<br><br><br><br><br><br>

<?php include 'Charts.php';?>
<div id="chartContainer1"></div>
<div id="chartContainer2"></div>
<div id="chartContainer3"></div>
<div id="chartContainer4"></div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
