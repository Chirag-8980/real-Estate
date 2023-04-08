<?php
require("config.php");
if (!isset($_SESSION['auser'])) {
  header("location:index.php");
}

$get_user = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) as total FROM tblpmt where p_name='Gold'"));
$get_user1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) as total FROM tblpmt where p_name='Standard'"));
$get_user2 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) as total FROM tblpmt where p_name='Premium'"));
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
        ['paln', 'User per Plan'],
        ['Pro', <?php echo $get_user['total'] ?>],
        ['Ultra', <?php echo $get_user1['total'] ?>],
        ['Ultra Pro Max', <?php echo $get_user2['total'] ?>]
      ]);

      var options = {
        title: 'Plan Details'
      };


      var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <div id="piechart1" style="width: 900px; height: 500px;"></div>
</body>

</html>