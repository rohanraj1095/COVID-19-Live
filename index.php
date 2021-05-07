<!DOCTYPE html>
<html>
<head>
<title></title>
<?php include 'links.php';?>
<?php include 'style.php';?>

<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
  integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362lonlgyExkL0="crossorigin="anonymous" />
-->
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="corona.php">world corona live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">India corona live</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
      
    </ul>
    
  </div>
</nav>








<!-- <div class="main_header">
<div class="row w-100 h-100">
<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2 mt-5">
<div class="leftside w-100 h-100 d-flex justify-content-center align-item-center">
<img src="images/circle1.jpg" width="360" height="250">

</div>
</div>

<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 mt-5" id="lets">
<div class="rightside w-100 h-100 d-flex justify-content-center align-item-center ">
<h1>Let's Stay Safe & Fight Together Against Corona virus</h1>
</div>
</div>

</div>
</div> -->










<div class="main_header">
<div class="row w-100 h-100">
<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2 mt-5">
<div class="leftside w-100 h-100 d-flex justify-content-center align-item-center">
<div id="main_img"><img src="images/circle1.jpg" width="360" height="250">
</div>
</div>
</div>

<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 mt-5" id="lets">
<div class="rightside w-100 h-100 d-flex justify-content-center align-item-center ">
<!-- <video src="images/particles.mp4"></video> -->

<h2 id="header1">Let's Stay <span>Safe</span> & Fight To<span>gether</span> Against <span>Co</span>rona vi<span>rus</span></h2>
</div>
</div>

</div>
</div>






<!--******************** corona letest update **********************-->

<section class="corona_update container-fluid">
  <div class="mb-3">
    <!-- <h3 class="text-uppercase text-center">covid-19 update </h3> -->
  </div>

<!--
  <div class="d-flex justify-content-around align-item-center">
    <div>
      <h1 class="count">1,524,266</h1>
      <p>passengers screened at airport</p>
    </div>
  
   
  <div>
      <h1 class="count">512</h1>
      <p>Active civid-19 cases*</p>
    </div>

    <div>
      <h1 class="count">40</h1>
      <p>cured/discharged cases</p>
    </div>

    <div>
      <h1 class="count">9</h1>
      <p>Death cases</p>
</div> -->

<!--
  <div class="table-responsiv">
  <table class="table-bordered table-striped text-center" id="tbval">
  
  <tr>
       <th>country</th>
       <th>Total confirmed</th>
       <th>Total recovered</th>
       <th>Total Deaths</th>
       <th>New confirmed</th>
       <th>New Recovered</th>
       <th>New Deaths</th>
  
  </tr>
  </table>

  </div> -->

  </div>
</section>


<!--************************ about section **************************-->


<div class="container-fluid sub_sections pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">
  <h1>About covid-19</h1>
  <div>
    <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12 ml-5">
        <img src="images/about corona.jpg" class="img-fluid">

      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2>What is COVID-19(Corona-Virus)</h2>
        <p>COVID-19 is the infectious disease caused by the most 
          recently discovered coronavirus.This new virus and disease
          were unknown before the outbreak began in Wuhan, China,in
          December 2019,</p>
        <p>
        Coronaviruses are a large family of viruses which may cause illness in animals or humans.
         In humans, several coronaviruses are known to cause respiratory infections 
         ranging from the common cold to more severe diseases such as Middle East 
         Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS).
          The most recently discovered coronavirus causes coronavirus disease COVID-19. 
        </p>
      </div>
    </div>
  </div>


<!--************************ about symptoms **************************-->

<div class="container-fluid  pt-5 pb-5" id="sympid" >
<div class="section_header text-center mb-5 mt-5">
  <h1>Coronavirus symptoms</h1>
<div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/cough.jpg" class="img-fluid" width="120" height="120">
        <figcaption> cough</figcaption>

      </figure>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/fevers.jpg" class="img-fluid" width="120" height="120">
        <figcaption> Fever</figcaption>

      </figure>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/nose.jpg" class="img-fluid" width="120" height="120">
        <figcaption> Runny nose</figcaption>

      </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/test.jpg" class="img-fluid" width="120" height="120">
        <figcaption> Loss Smell</figcaption>

      </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/cold.jfif" class="img-fluid" width="120" height="120">
        <figcaption>To sneeze</figcaption>

      </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/breath.jpg" class="img-fluid" width="120" height="120">
        <figcaption>Shortness of Breath</figcaption>

      </figure>
    </div>
  </div>
</div>

</div>
<!--////************ Prevention Against Coronavirus*//////-->

<div class="container-fluid  pt-5 pb-5" id="preventid" >
<div class="section_header text-center mb-5 mt-5">
  <h1>6 Staps Prevention Against Coronavirus</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/handwash.jpg" class="img-fluid" width="80" height="90">

          </figure>
        </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>
          wash your hands regularly for 20 second ,with 
          soap ,handwash and water or alcohol-based hand rub
        </p>
      </div> 
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/mask.jpg" class="img-fluid" width="80" height="90">

          </figure>
        </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>
          Cover yoyr nose and mouth
          with a Mask,disposable tissue or
          flexed elbow when you cough
          or sneeze
        </p>
      </div> 
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/contact.png" class="img-fluid" width="80" height="90">

          </figure>
        </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>
          Avoid close contact (1 meter
          or 2 feet)with people who are 
          unwell
          
        </p>
      </div> 
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/stay home.jpg" class="img-fluid" width="80" height="90">

          </figure>
        </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>
          Stay home and self-isolate
          from others in the household
          if you feel unwell  
          
        </p>
      </div> 
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/news.jpg" class="img-fluid" width="80" height="90">

          </figure>
        </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>
          Stay informed by watching
          news & follow the 
          recommended practices
        
        </p>
      </div> 
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/medical.jpg" class="img-fluid" width="80" height="90">

          </figure>
        </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>
          If you have fever cough and 
          difficulty breathing seek 
          medical care early
          
        </p>
      </div> 
      </div>
    </div>
  </div>
</div>
  </div>

  <!--////************ contact us ASAP //////-->

<div class="container-fluid  pt-5 pb-5" id="contactid" >
<div class="section_header text-center mb-5 mt-5">
  <h1>Contact Us ASAP</h1>
</div>

<div class="container">
  <div class="row">
  <div class="col-lg-8 offset-lg-2 col-12">
  
  
      <form action="" method="POST">

    <div class="form-group">
    <label >username </label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>

  <div class="form-group">
    <label >mobile </label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>

  <div class="form-group">
              <label>select symptoms</label> 

      <!--      <div class="custom-control custom-checkbox custom-control-inline text-capitalize">

              <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
              <label class="custom-control-lebel" for="customcheckbox1">cold</label>
              </div>
              <div class="custom-control custom-checkbox coustom-control-inline text-capitalize">
              <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
              <label class="custom-control-lebel" for="customcheckbox2">fever</label>
              </div>

              <div class="custom-control custom-checkbox coustom-control-inline text-capitalize">
              <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
              <label class="custom-control-lebel" for="customcheckbox3">difficulty in breath</label>
              </div>

              <div class="custom-control custom-checkbox coustom-control-inline text-capitalize">
              <input type="checkbox" class="custom-control-input" id="inlinecheckbox4" name="coronasym[]" value="tired">
              <label class="custom-control-lebel" for="customcheckbox4">feeling weak</label>
              </div> -->


  </div> 
       <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="coronasym[]"  value="cold">
  <label class="form-check-label" for="inlineCheckbox1">Cold</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="coronasym[]" value="Fever">
  <label class="form-check-label" for="inlineCheckbox2">Fever</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="coronasym[]"  value="Difficulty in Breath" >
  <label class="form-check-label" for="inlineCheckbox3">Difficulty in Breath</label>
</div>   
  
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="coronasym[]"  value="Feeling Weak" >
  <label class="form-check-label" for="inlineCheckbox3">Feeling Weak</label>
</div> 

  <div class="form-group mt-5">
    <label for="exampleFormControlTextarea1">Describe how you are feeling</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div> 
  
  
  <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
</form> 
    </div>
  </div>

</div>
</div>

<!--///////////////// top cursor //////////////////////-->

<div class="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>


<!--********************* footer **************************-->

<footer class="mt-5">
  <div class="footer_style text-whit text-center container-fluid ">
    <p></p>
  </div>
</footer>

<!--

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" 
integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


-->

<script type="text/javascript" >
$('.count').counterUp({

delay:10,
time:3000

})

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


/*

function fetch(){
  $.get("https://api.covid19api.com/summary"
  
      function (data){ 

   // consol.log(data[Countries].lenght);

    var tbval = document.getElementById('tbval');
    for(var i=1; i<(data['countries'].lenght);i++){

      var x = tbval.insertRow();
      x.insertCell(0);
      tbval.row[i].cells[0].innerHTML=data['countries'][i-1]['country'];
      tbval.row[i].cell[0].style.background = '#7a4a91';
      tbval.row[i].cell[0].style.color = '#fff';
      
      
      x.insertCell(1);
      tbval.row[i].cells[1].innerHTML=data['countries'][i-1]['TotalConfirmed'];
      tbval.row[i].cell[1].style.background = '#4bb7d8';

      x.insertCell(2);
      tbval.row[i].cells[2].innerHTML=data['countries'][i-1]['TotalRecovered'];
      tbval.row[i].cell[2].style.background = '#4bb7d8';
     
      x.insertCell(3);
      tbval.row[i].cells[3].innerHTML=data['countries'][i-1]['TotalDeaths'];
      tbval.row[i].cell[3].style.background = '#36e23';

      x.insertCell(4);
      tbval.row[i].cells[4].innerHTML=data['countries'][i-1]['NewConfirmed'];
      tbval.row[i].cell[4].style.background = '#4bb7d8';

      x.insertCell(5);
      tbval.row[i].cells[5].innerHTML=data['countries'][i-1]['NewRecovered'];
      tbval.row[i].cell[5].style.background = '#9cc850';

    
      x.insertCell(6);
      tbval.row[i].cells[6].innerHTML=data['countries'][i-1]['NewDeaths'];
      tbval.row[i].cell[6].style.background = '#36e23';

    }
  
  }
  )
} */

</script>
 </body>

<?php 
include 'footer.php';

?>

</html>  

