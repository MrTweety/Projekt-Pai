// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var a =1000;
var b= "ala";


$(document).ready(function () {

    $.ajax({
        type: "POST",
        url: '/admin/Chart',

        success: function (dataaa) {
            // var abc = jQuery.parseJSON(dataaa);
            var obj = JSON.parse(dataaa);
            // $('#aktU').append(dane.CountActiveUser);
            // $('#nowO').append(dane.CnewOrder);
            // $('#nowZ').append(dane.CountNewOrder);
            // $('#nowU').append(dane.CountNewUser);


            var b = obj.Chart[0].monthName+" "+obj.Chart[0].yearInt;

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [
        obj.Chart[0].monthName+" "+obj.Chart[0].yearInt,
        obj.Chart[1].monthName+" "+obj.Chart[1].yearInt,
        obj.Chart[2].monthName+" "+obj.Chart[2].yearInt,
        obj.Chart[3].monthName+" "+obj.Chart[3].yearInt,
        obj.Chart[4].monthName+" "+obj.Chart[4].yearInt,
        obj.Chart[5].monthName+" "+obj.Chart[5].yearInt,
        obj.Chart[6].monthName+" "+obj.Chart[6].yearInt,
        obj.Chart[7].monthName+" "+obj.Chart[7].yearInt,
        obj.Chart[8].monthName+" "+obj.Chart[8].yearInt,
        obj.Chart[9].monthName+" "+obj.Chart[9].yearInt,
        obj.Chart[10].monthName+" "+obj.Chart[10].yearInt,
        obj.Chart[11].monthName+" "+obj.Chart[11].yearInt

    ],
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [
          obj.Chart[0].monthVal,
          obj.Chart[1].monthVal,
          obj.Chart[2].monthVal,
          obj.Chart[3].monthVal,
          obj.Chart[4].monthVal,
          obj.Chart[5].monthVal,
          obj.Chart[6].monthVal,
          obj.Chart[7].monthVal,
          obj.Chart[8].monthVal,
          obj.Chart[9].monthVal,
          obj.Chart[10].monthVal,
          obj.Chart[11].monthVal,
      ],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: Math.max(obj.Chart[0].monthVal,
              obj.Chart[1].monthVal,
              obj.Chart[2].monthVal,
              obj.Chart[3].monthVal,
              obj.Chart[4].monthVal,
              obj.Chart[5].monthVal,
              obj.Chart[6].monthVal,
              obj.Chart[7].monthVal,
              obj.Chart[8].monthVal,
              obj.Chart[9].monthVal,
              obj.Chart[10].monthVal,
              obj.Chart[11].monthVal,),
          maxTicksLimit: 12
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
        }
    });

});