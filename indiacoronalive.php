<!DOCTYPE html>
<html>
<head>
<title></title>
<?php include 'links.php';?>
<?php include 'style.php';?>


</head>
<body onload="fetch()">

<!-- <nav class="navbar navbar-expand-lg nav_style P-3"> -->
<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand pl-5" href="#">COVID-19 Live</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <!--
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="corona.php">World corona live</a>
      </li> <!--
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
      -->
    </ul>
    
  </div>
</nav>

<!--******************** corona letest update  india **********************-->

<section class="corona_update container-fluid">
  <div class="mt-5 mb-5 ">
    <h3 class="text-center text-uppercase">covid-19 Live update of The India  </h3>
  </div>

  <div class="table-responsive">
  <table class=" table table-bordered table-striped text-center">
  
  <tr id="tr01">
      <th class="text-capitalize" >lastupdatedtime</th> 
       <th class="text-capitalize">state</th>
       <th class="text-capitalize">active</th>
       <th class="text-capitalize">confirmed</th>
      <!-- <th class="text-capitalize">deaths</th> -->
    <th class="text-capitalize">recovered</th>
    <th class="text-capitalize">deaths</th> 
       
  
  </tr>

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
//$data = file_get_contents('https://api.rootnet.in/covid19-in/stats/latest');
$coronalive = json_decode($data,true);

//echo "<pre>";

//print_r($coronalive);

//echo "</pre>";

//echo count($coronalive['statewise']);
$statescount = count($coronalive['statewise']);

$i=0;
while($i < $statescount){

    ?>

<tr id="trI"> 
<td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
<td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
<td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
<td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
<td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
<td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>

 
</tr>
<!--
    echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>" ;
    echo $coronalive['statewise'][$i]['state']. "<br>";
    echo $coronalive['statewise'][$i]['confirmed']. "<br>";
    echo $coronalive['statewise'][$i]['active']. "<br>";
    echo $coronalive['statewise'][$i]['deaths']. "<br>"; -->

<?php

    $i++;
}


?>


  </table>

  </div> 

  </div>
</section>


<!--********************* footer **************************-->

<footer class="mt-5">
  <div class="footer_style text-whit text-center container-fluid ">
    <p></p>
  </div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" 
integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




<script type="text/javascript">

mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop> 100 || document.documentElement.scrollTop >100 ) {

    mybutton.style.display = "block";
 } else{
   mybutton.style.display = "none";
 }
}

function topFunction(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



</script>

 </body>
</html> 