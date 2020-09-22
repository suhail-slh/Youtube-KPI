<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Subs gained per month"
	},
    axisX: {
		title: "Months",
		includeZero: false
	},
    axisY: {
		title: "Subscribers",
		includeZero: false
	},
	data: [{
		type: "area", //change type to bar, line, area, pie, etc  
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Like:Dislike Ratio per upload"
	},
    axisX: {
		title: "Uploads",
		includeZero: false
	},
    axisY: {
		title: "Like:Dislike",
		includeZero: false
	},
	data: [{
		type: "line", //change type to bar, line, area, pie, etc  
        dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Views gained per month"
	},
    axisX: {
		title: "Month",
		includeZero: false
	},
    axisY: {
		title: "Views",
		includeZero: false
	},
	data: [{
		type: "area", //change type to bar, line, area, pie, etc  
        dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	}]
});
chart3.render();

var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Views in the first 6 hours"
	},
    axisX: {
		title: "Hours",
		includeZero: false
	},
    axisY: {
		title: "Views",
		includeZero: false
	},
	data: [{
		type: "line", //change type to bar, line, area, pie, etc  
        dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	}]
});
chart4.render();

}
</script>