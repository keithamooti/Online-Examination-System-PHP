$(document).ready(function(){
  $.ajax({
    url: "data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var title = [];
      var marks = [];

      for(var i in data) {
        title.push("Title " + data[i].title);
        marks.push(data[i].marks);
      }

      var chartdata = {
        labels: title,
        datasets : [
          {
            label: 'Title',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: marks
          }
        ]
      };

      var ctx = $("#totalIncomeCharts");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});