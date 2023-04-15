/*
*
* This file handles all the chart processing 
* for the Admin Dashboard
*
*/

var resp;

google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

// var response = {
//   'data': ['January', 1000, 400]
// };

getDataPoint();

function drawChart(data) {
  // var data = google.visualization.arrayToDataTable([
  //   ['Year', 'Published', 'Unpublished'],
  //   data
  // ]);

  // var options = {
  //   chart: {
  //     title: 'Monthly Article Publication',
  //     subtitle: 'Publication in months : January - December',
  //   },
  //   width: 700,
  //   height: 400
  // };

  // var chart = new google.charts.Bar(document.getElementById('myChart'));

  // chart.draw(data, google.charts.Bar.convertOptions(options));
}

function getDataPoint()
{
  $.ajax({
    type:'GET',
    url: '/api/article-chart',
    data:'_token = <?php echo csrf_token() ?>',
    success:function(data) {
      drawChart(['January', 1000, 400]);
    }
 });
}