<?php
require("config.php");
if (!isset($_SESSION['auser'])) {
  header("location:index.php");
}

$get_property_success = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) as total FROM tblhouse where qc='success'"));
$get_property_pending = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) as total FROM tblhouse where qc='pending'"));
$get_property_reject = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) as total FROM tblhouse where qc='reject'"));
?>
<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Listed', <?php echo $get_property_success['total'] ?>],
        ['Reject', <?php echo $get_property_reject['total'] ?>],
        ['Pending', <?php echo $get_property_pending['total'] ?>]
      ]);

      var options = {
        title: 'Property Details'
      };


      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>

</html>