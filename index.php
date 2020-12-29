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
<link href="css/style.css" rel="stylesheet">
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
  include ("inc/function.php");
  include ("inc/header.php");
  include ("inc/top_bar.php");
  include ("inc/bottom_bar.php");
?>

<script>
setInterval(function() { getLiveData("temp") }, 500);
setInterval(function() { getLiveData("temp1") }, 500);
setInterval(function() { getLiveData("hum") }, 500);
setInterval(function() { getLiveData("hum1") }, 500);
setInterval(function() { getLiveData("light") }, 500);
setInterval(function() { getLiveData("light1") }, 500);
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
<script src="js/jquery.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>
</html>
