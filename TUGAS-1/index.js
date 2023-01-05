    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Today Sales",0, "#0EA5E9"],
        ["Today Income", 21.45, "#22C55E"],
        ["Today Expenses",0, "#EF4444"],
        ["Today Revenue", 21.45, "#A855F7"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 1197,
        height: 350,
        bar: {groupWidth: "35%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }

//   grapik 2
google.charts.setOnLoadCallback(incomeChart);
function incomeChart() {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", { role: "style" } ],
    ["2023-01-05",12, "#0EA5E9"],
    ["2023-01-05",30, "#0EA5E9"],
    ["2023-01-05",10, "#0EA5E9"],
    ["2023-01-05",30, "#0EA5E9"],
    ["2023-01-05",26, "#0EA5E9"],
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);

  var options = {
    width: 800,
    height: 350,
    bar: {groupWidth: "35%"},
    legend: { position: "none" },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("incomechart_values"));
  chart.draw(view, options);
}
//   grapik 3
google.charts.setOnLoadCallback(expensesChart);
function expensesChart() {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", { role: "style" } ],
    ["2023-01-05",10, "#0EA5E9"],
    ["2023-01-05",30, "#0EA5E9"],
    ["2023-01-05",15, "#0EA5E9"],
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);

  var options = {
    width: 800,
    height: 350,
    bar: {groupWidth: "15%"},
    legend: { position: "none" },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("expenseschart_values"));
  chart.draw(view, options);
}
// vue
const app = Vue.createApp({
    data() {
        return {
            page: 'dashboard',
            chart:'income'
        }
    },method: {

    },
    computed: {
        tgl: function(mati){
            if (tgl === false) {
                this.tgl = mati
            } else {
                this.tgl = false
            }
        }
    }
});
console.log('haii');
app.mount("#index")