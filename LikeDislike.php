<script>
window.onload = function () {
 
var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "dark1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Like:Dislike Ratio"
	},
    axisX: {
		title: "Weeks",
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
 
}
</script>