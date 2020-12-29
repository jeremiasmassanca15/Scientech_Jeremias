<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
<title>Responsive Side Menu &ndash; Layout Examples &ndash; Pure</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script crossorigin="" id="beacon-aplus" src="//assets.alicdn.com/g/alilog/??aplus_plugin_icbufront/index.js,mlog/aplus_v2.js" exparams="at_autype=en-scd-7_anmagroup&amp;b2c_auction=60802642274&amp;userid=&amp;aplus=&amp;ali_beacon_id=-&amp;ali_apache_id=11.180.13.171.1541531784197.480428.2&amp;ali_apache_track=-&amp;ali_apache_tracktmp=-&amp;dmtrack_c=%7Bali_resin_trace%3DhasSPU%3Dfalse%7CproductType%3Dsourcing%7ChasSpecificProper%3Dtrue%7CshowFavoriteSupplier%3Dfalse%7CfrontendCodeFusionTest%3Dtrue%7Cpvmi%3De8b2c38187cd45b2a9cc54a39a4486c2%7Ctrfc_i%3Dsnscpm%5E9e7gs9im%5E%5E1cs1rmq8m%7Caep_usuc_f%3D-%7Caeu_cid%3D-%7D&amp;pageid=dfb9c9d30bba771e5be9cf5a1670c37d344349ec42&amp;hn=esite011186119030.us.oc27&amp;asid=AQAAAABaz%2Blbaq26XwAAAAA8AIUFW0EkDQ%3D%3D&amp;sidx=KKdin2wquuGJC4eNKimhJUbqMwdgDOPWLOhEMzB0AdY61TNEKiSu682qIadMX7IyFZ5%2BBPvc07gR2O3f3bVwbfzmIcty8QAKjSLBKG93rLEyPZYT20miY%2FFtfbVyjknyNhO0W77suZvFC1LJyObIGKjYLtlIUs9GTs3NiarF51YyTZ1NhZ8h%2F7CEW7SD%2FW7dUfLnxNtbmb8zGWoGIhRfHNNe86ZMwFWnw3wmKh0VULYc55kzq6Nu0evychbjLsa67r%2FtI5t2XkvQaCXt4n2is7N55311zU44HMDpvWml99sjQlzNTCS29m%2FuYIa6ZbiL7I3AQXXcVs5do6p5kJKpIJDde7kPzO4cqhsioKl5FllwiFKbugDtZyQY1LwAcO0jp4JFXH9GD1YDeY%2BuZsx8SOOwxcwDlCAVi%2BNDFgzEk4wCZMPC2kuQFd20HIzFM0IycRftdHd21O9WX60gB4XaZcozz7nDtZmiO41O0gMId6M646Yxpdjp1V2y6EGFLZzha%2FVlTXTylSOHOJSmCkWdRaNumHz7aCI1QK0Ev%2B0tVYaUrcHldiJlXS5b51SuuxDB%2FMBGLLgAwxYq7wzMU%2FF2V4V8XuLG5Cj8AQ8Ga0AgspqvXlJXhax2TiQPzAxRwKMeMfrNnTvStzq4%2Bwl0bteAA10eKTDYsblI40MumQgw3KY%3D&amp;tmi=&amp;tmih=&amp;dmtrack_b=%7Bifm%3D0%7Clogin%3D0%7D" plugins="aplus_plugin_icbu/0.0.13/index.js">
</script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>




<!--[if lte IE 8]>
    <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="css/yeah.css">
<!--<![endif]-->
</head>
    <?php
    include ("inc/header.php");
    include ("inc/function.php");
    ?>
    <div class="product_box content" style="border-top:#f6f6f6 1px soli; padding:1px; background:#e4e4e4">
    <div class="containe" style="border: 1px soli #ddd; border-radius: 5px;border-top: #eee 3px soli;ackground:#f3f3f3;padding-top:5px; padding-bottom: 5px; margin:15px">
  <div class="container"  style="width:100%; background:#0fa1e7; border-radius: 8px;height:50p; padding:10px; display:flex">
    <div style="font-weight:600; box-shadow: 0 0 2px rgba(0,0,0,0.12),0 2px 4px rgba(0,0,0,0.24); background: #94d3f2; width:150px; border-radius:5px; margin-right:10px; olor:#e7e7e7">
      <p style="; color:#333"><i class="fa fa-map-marker" style="padding-right:5px"></i>Humidity</p>
      <div style="padding:5px; padding-left:40px; color: #fff; font-size:20px; display:flex">
        <span id="hum1"><?php echo sensor1_d("hum1") ?></span><a style='font-size:13px; background:#f01f4b; width:5%; height:10px; margin-right:10px;margin-top:3px;cursor:pointer; font-weight:700; padding:5px; border-radius:100%; color:#fff; text-align:center'></a>
    </div>
    </div>
    <div style="font-weight:600; box-shadow: 0 0 2px rgba(0,0,0,0.12),0 2px 4px rgba(0,0,0,0.24); background: #94d3f2; width:150px; border-radius:5px; margin-right:10px; olor:#e7e7e7">
      <p style="; color:#333"><i class="fa fa-map-marker" style="padding-right:5px"></i>Li</p>
      <div style="padding:5px; padding-left:40px; color: #fff; font-size:20px; display:flex">
        <span id="light"><?php echo sensor1_d("light") ?></span><a style='font-size:13px; background:#f01f4b; width:5%; height:10px; margin-right:10px;margin-top:3px;cursor:pointer; font-weight:700; padding:5px; border-radius:100%; color:#fff; text-align:center'></a>
    </div>
    </div>
    <div style="font-weight:600; box-shadow: 0 0 2px rgba(0,0,0,0.12),0 2px 4px rgba(0,0,0,0.24); background: #94d3f2; width:150px; border-radius:5px; margin-right:10px; olor:#e7e7e7">
      <p style="; color:#333"><i class="fa fa-map-marker" style="padding-right:5px"></i>Temperature</p>
      <div style="padding:5px; padding-left:40px; color: #fff; font-size:20px; display:flex">
        <span id="temp"><?php echo sensor1_d("temp") ?></span><a style='font-size:13px; background:#f01f4b; width:5%; height:10px; margin-right:10px;margin-top:3px;cursor:pointer; font-weight:700; padding:5px; border-radius:100%; color:#fff; text-align:center'></a>
    </div>
    </div>
    <div style="font-weight:600; box-shadow: 0 0 2px rgba(0,0,0,0.12),0 2px 4px rgba(0,0,0,0.24); background: #94d3f2; width:150px; border-radius:5px; margin-right:10px; olor:#e7e7e7">
      <p style="; color:#333"><i class="fa fa-map-marker" style="padding-right:5px"></i>Temperature</p>
      <div style="padding:5px; padding-left:40px; color: #fff; font-size:20px; display:flex">
    </div>
    </div>
  </div>

  </div>



</div>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <div id="id01" class="container" style=" justify-content:centes">

  </div>
</div>


<div class="grid-container" style="padding-left:10px; background:#f2f2f2; padding-top:10px">
  <div class="left" style="width:420px; height: 400px; background:#fff; margin:5px; border:#e9e9e9 1px solid; border-radius:6px">
    <img src="./imgs/graph.png" width='100%' height='230px'/>
  </div>
  <div class="middle" style="width:420px; height: 700px; background:#fff; margin:5px; border:#e9e9e9 1px solid; border-radius:6px">
    <div style='border-bottom:#f2f2f2 1px solid;background:#fff; argin-top:10px; padding:10px; border-radius:4p'>
                <div class='' style='display:flex'>
                  <a style='font-size:20px; color:#333; width:100%; '>Humidity</a>
                  <a style='font-size:13px; background:#f01f4b; width:4%; height:15px; margin-right:10px;margin-top:3px;cursor:pointer; font-weight:700; padding:5px; border-radius:100%; color:#fff; text-align:center'></a><span id="hum"><?php echo sensor1_d("hum") ?></span>
                  <script src="jquery-1.7.2.min.js" type="application/javascript"></script>
                  <script type="application/javascript">
                  var myVar = setInterval(function(){ myTimer() }, 1000);

                  function myTimer() {
                      var dataSting = "row=1";
                      var promise = sendAjaxFunction('load_form.php',dataString);
                          $("#Loading").html("<img src='images/ajax-loader.gif' />");
                          promise.success(function (data) {
                              alert(data);
                              return false;
                          });
                  }
                  function sendAjaxFunction(url,dataString){
                      return $.ajax({
                          url :url,
                          type: 'POST',
                          dataType:"text",
                          data:dataString,
                          error:function(){
                              alert ("An Error as Occured...");
                              return false;
                          }
                      });
                  }
                  </script>
                </div>
                <div class='' style='display:flex'>
                  <a style='font-size:15px; color:#000; width:100%; '>Counting from 0% Equivalent Voltage</a>
                </div>
    </div>
    <div>
      <table id='info' style='margin-top:10p; border:#ccc 1px soli'>
                  <tr>
                  <td style='font-weight:600'><i class='fa fa-map-marker' style='padding-right:5px'></i>Backyard Zone 1</td>
                  </tr>
                  <tr>
                  <td style='max-width:100%; ackground:#ccc;color: #000; border-bottom:#d0d0d0 1px soli'>//support.google.com/accounts/answer/3367674?hl=en</td>
                  </tr>
                  <tr>
                  <td style='max-width:100%; ackground:#ccc; margin-top:10px; border-bottom:#d0d0d0 1px solid'>Pattern Time: 10:00 AM to 9:30 PM</td>
                  </tr>
                  <tr>
                  <td style='font-weight:600'><i class='fa fa-bullhorn' style='padding-right:5px'></i>More</td>
                  </tr>
                  <tr>
                  </tr>
                  <tr>
                  <td>Sensor Type</td>
                  </tr>
                  <tr>
                  <td>Hardware</td>
                  <tr>
                  <tr>
                  <td style="background:#00a2e8;display:flex"><center><button style="border:0; background:0; width:100%; padding:10p">See more</button></center></td>
                  <tr>

                  </table>
                  <div style="max-height:10vw; background:#ccc;overflow-y:scroll"><?php echo sensor1_data() ?></div>
    </div>
  </div>
  <div class="right" style="width:420px; height: 400px; padding: 10px;background:#fff; margin:5px; border:#e9e9e9 1px solid; border-radius:6px">
    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.12),0 2px 4px rgba(0,0,0,0.24);background:#fff; margin:5px; max-width:100%; height:193px">
      <div><a style="padding:10px; padding-top:10px"><i class="fa fa-search"></i>Efficiency</a></div>
      <div style="margin-top:80px; padding-left:130px; max-width:100%"><h1 style="background: #f1be28;padding: 10px;"><i class="fa fa-eye" style="color: #fff;margin-right:10px"></i>50/100%</h1></div>
    </div>
    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.12),0 2px 4px rgba(0,0,0,0.24);background:#fff; margin:5px; max-width:100%; height:193px">
      <div><a style="padding:10px; padding-top:10px"><i class="fa fa-search"></i>Power Consumption</a></div>
      <div style="margin-top:80px; padding-left:130px; max-width:100%"><h1 style="background: #66d555;padding: 10px;"><i class="fa fa-eye" style="color: #fff;margin-right:10px"></i>20/100%</h1></div>
    </div>
  </div>
</div>

<div style="background:#fafafa; margin:10px; margin-bottom:200px">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Line Chart
          <ul class="pull-right panel-settings panel-button-tab-right">
            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
              <em class="fa fa-cogs"></em>
            </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li>
                  <ul class="dropdown-settings">
                    <li><a href="#">
                      <em class="fa fa-cog"></em> Settings 1
                    </a></li>
                    <li class="divider"></li>
                    <li><a href="#">
                      <em class="fa fa-cog"></em> Settings 2
                    </a></li>
                    <li class="divider"></li>
                    <li><a href="#">
                      <em class="fa fa-cog"></em> Settings 3
                    </a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body">
          <div class="canvas-wrapper">
            <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div><!--/.row-->
</div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>
<script>
setInterval(function() { getLiveData("temp") }, 500);
setInterval(function() { getLiveData("hum") }, 500);
setInterval(function() { getLiveData("hum1") }, 500);
setInterval(function() { getLiveData("gyro_x") }, 500);
setInterval(function() { getLiveData("gyro_y") }, 500);
setInterval(function() { getLiveData("gyro_z") }, 500);

function getLiveData(adc){
  $.ajax({
    type:'post',
    url:'inc/function.php',
    data:{data:adc},
    success:function(data){
      $('#'+adc).html(data);
    }

  })
}
</script>


  <script>
function sortList() {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("id01");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("LI");
    // Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      // start by saying there should be no switching:
      shouldSwitch = false;
      /* check if the next item should
      switch place with the current item: */
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /* if next item is alphabetically
        lower than current item, mark as a switch
        and break the loop: */
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark the switch as done: */
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
}
</script>

  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
  </script>

  <script>
  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
  </script>

  <script>



  window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
  var chart2 = document.getElementById("bar-chart").getContext("2d");
  window.myBar = new Chart(chart2).Bar(barChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
  var chart3 = document.getElementById("doughnut-chart").getContext("2d");
  window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
  responsive: true,
  segmentShowStroke: false
  });
  var chart4 = document.getElementById("pie-chart").getContext("2d");
  window.myPie = new Chart(chart4).Pie(pieData, {
  responsive: true,
  segmentShowStroke: false
  });
  var chart5 = document.getElementById("radar-chart").getContext("2d");
  window.myRadarChart = new Chart(chart5).Radar(radarData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.05)",
  angleLineColor: "rgba(0,0,0,.2)"
  });
  var chart6 = document.getElementById("polar-area-chart").getContext("2d");
  window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  segmentShowStroke: false
  });
};
  </script>

  <script>
    function getData() {
        return Math.random();
    }
    Plotly.plot('chart',[{
        y:[getData()],
        type:'line'
    }]);

    var cnt = 0;
    setInterval(function(){
        Plotly.extendTraces('chart',{ y:[[getData()]]}, [0]);
        cnt++;
        if(cnt > 500) {
            Plotly.relayout('chart',{
                xaxis: {
                    range: [cnt-500,cnt]
                }
            });
        }
    },15);
</script>

    <script src="js/jquery.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</html>
