<?php include 'Connection.php';?>
<!DOCTYPE HTML>
<html>
<head>
<style>
#chartContainer1 
{
    height:360px;
    width:100%;
    float:left;
}
#chartContainer2
{
    height:360px;
    width:30%;
    float: right;
}
#chartContainer3
{
    height:360px;
    width:50%;
    vertical-align: sub;
    float: left;
}
#chartContainer4
{
    height:360px;
    width:50%;
    vertical-align: sub;
    float: right;
}
</style>
</head>
<body style="background-color:white;">

<?php include 'GCharts.php';?>
<div id="chartContainer1"></div>
<!--<div id="chartContainer2"></div>
<div id="chartContainer3"></div>
<div id="chartContainer4"></div>-->

</body>
</html>