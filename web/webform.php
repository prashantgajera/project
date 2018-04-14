<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" type="text/css" href="social.css">     
      <link rel="stylesheet" type="text/css" href="style.css" >
 

<style>
h1 {
    text-shadow: 0 0 5px #0000FF;
}
@import url(http://fonts.googleapis.com/css?family=Open+Sans);

body {
 background: #111;
 font-family: "Open Sans",  Impact;
}

.area {
  text-align: center;
  font-size: 4.5em;
  color:  tan;
  letter-spacing: -7px;
  font-weight: 700;
  text-transform: uppercase;
  animation: blur .95s ease-out infinite;
   margin-left: 60px;
  z-index: -1;
  float:left;
}

@keyframes blur {
  from {
    text-shadow:0px 0px #fff,
      0px 0px 10px #fff, 
      0px 0px 25px #fff,
      0px 0px 25px #fff,
      0px 0px 25px #fff,
      0px 0px 50px #fff,
      0px 0px 50px #fff,
      0px 0px 50px #7B96B8,
      0px 0px 150px #7B96B8,
      0px 10px 100px #7B96B8,
      0px 10px 100px #7B96B8,
      0px 10px 100px #7B96B8,
      0px 10px 100px #7B96B8,
      0px -10px 100px #7B96B8,
      0px -10px 100px #7B96B8;
  }
}
#foot { z-index: -1; 
position: absolute;
background-color: #1D3170;
width:100%;}
   
#we{
    position: absolute;
    margin-top: 50px;
    padding-left : 150px;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     border: 1px solid #ddd;
    border-radius: 4px;
     padding: 2px;
     padding-bottom: 10px;
     background-color: white;
   color: purple;
    text-shadow: 0px 1px 1px black, 0 0 15px purple;

}
#icon1{
     margin-top: 150px;
    padding-left : 160px;
    position: relative;
    display: block;
}


</style>
  
   
   <link href="w1.css" rel="stylesheet" type="text/css" >
    <script src="r1.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" >
    </head>
  
<body bgcolor="#c5cae9">
 
  <script type="text/javascript">
  var id=0;
  function mybtn()
  {
  var txt=""; 
  var name=document.getElementById("myname").value;
  var mo=document.getElementById("mono").value;
  var email=document.getElementById("eml").value;
  var age=document.getElementById("age1").value;
  var weight=document.getElementById("weight1").value;
  var reli=document.getElementById("religion").value;

  if(name == '' || mo == '' || email =='' || age == ''  || weight == '' || reli == '')
  { 
    
    alert("Fill all the feild");
    //txt.link("webform.html");
    
  }
  else
  {
    var myname=document.getElementById("userid");
    var mono =document.getElementById("mobno");
    var eml =document.getElementById("email");
    if(myname.innerHTML=="Must be 3+ letters" || mono.innerHTML=="mob must be 10 no" || eml.innerHTML=="Invalid email" || mono.innerHTML=="Valid | Mobile no is already present" || myname.innerHTML=="Valid | Name is present in Database" || eml.innerHTML=="Valid | Email is already present")
    {
      alert("Fill Valid Information");  
    }
   else
   {
    document.getElementById("mform").submit();
   }
  }
  }
  function myform(field,str)
  {
    
      if (window.XMLHttpRequest) 
      { 
          xhttp = new XMLHttpRequest();
      } else 
      { 
          xhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
          xhttp.onreadystatechange = function() {
          if (xhttp.readyState != 4 && xhttp.status == 200) {
              document.getElementById(field).innerHTML = "Validating..";
            } 
            else if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById(field).innerHTML = xhttp.responseText;
            } 
            else 
            {
              document.getElementById(field).innerHTML = "Error Occurred. <a href='webform.html'>Reload Or Try Again</a> the page.";
            }
      };  
            xhttp.open("GET", "validate.php?field=" + field + "&str=" + str, true);
            xhttp.send();
    }
   </script>
   <?php
   include 'cookie.php';
   ?>
<div id="img" onclick="prashant.html">
    <div class="area" >Medi TECH</div>
<ul>
    <li><div id="shape"><a href="prashant.html" >Home</a></div></li>
    <li><div id="shape"><a href="webform.php" >Patient form</a></div></li>
    <li><div id="shape"><a href="checker.html" >Deases</a></div></li>
    <li><div id="shape"><a href="about.html" >About us</a></div></li>
</ul>
</div>

<fieldset>
<legend font color="f8bbd0"></legend>

<form action="form3.php" method="post"  id="mform">

<table align="center" cellspacing="3px" cellpadding="3px" >
<center><h3><font color="#4db6ac"><b>P  A  T  I  E  N  T</b></font></h3></center>
<tr> <td>   </td></tr>
<tr>
<td><font>Patient name :</font></td>
<td><input type="text" name="userid" id="myname" onblur="myform('userid',this.value)"><span id="userid"></span></td>
</tr>

<tr>
<td ><font>Mobile No :</font></td>
<td><input type="text" name="mobno" id="mono" onblur="myform('mobno',this.value)"><span id="mobno"></span></td>
</tr>
<tr>
<td ><font>Email :</font></td>
<td><input type="text" name="email" id="eml" onblur="myform('email',this.value)"><span id="email"></span></td>
</tr>

<tr>
<td>Permanent Address:</td>
<td><textarea rows="2" col="10"></textarea></td>
</tr>

<tr>
<td>Age :</td>
<td><input type="number" name="age" id="age1" onblur="myform('age',this.value)"><span id="age"></span></td>

</tr>
<tr>
<td>Gender:</td><td>
<input type="radio" name="gender" value="male" checked>Male<br>
<input type="radio" name="gender" value="female" >Female<br>
<input type="radio" name="gender" value="other">Other	
</td>	
</tr>

<tr>
<td>Weight :</td>
<td><input type="number" name="weight" id="weight1" onblur="myform('weight',this.value)"><span id="weight"></span></td>
</tr>

<tr>
<td>Marital Status:</td>
<td>
<input type="radio" name="status" value="Married" >Married<br>
<input type="radio" checked="checked" name="status" value="single" >Single<br>
<input type="radio" name="status" value="Divorced">Divorced<br>
<input type="radio" name="status" value="Widowed" >Widowed<br>	
</td>	
</tr>

<tr>
<td>Blood Group:</td>
<td>
<select name="bloodgrp">
  
  <option value="O+" selected>O +</option>
  <option value="O-" selected>O -</option> 
  <option value="A+" selected>A +</option> 
  <option value="A-" selected>A -</option> 
  <option value="AB+" selected>AB +</option> 
  <option value="AB-" selected>AB -</option>
</select>  
</td>
</tr>

<tr>
<td>Allergies If Any:</td>
<td><input type="checkbox" name="drug" value="Drug Allergy" >Drug Allergy<br>
    (Drug Allergy--Abnormal reactions due to specific medication.)<br>
	<input type="checkbox" name="food" value="fa" >Food Allergy<br>
    (Food Allergy--Unpleasant reactions after a certain food eaten.)<br>
	<input type="checkbox" name="contact" value="contact">Contact Allergy<br>
	(Contact Allergy--A skin rash caused by contact with certain substance.)<br>
	<input type="checkbox" name="seasonal" value="sa" >Seasonal Allergy<br>
    (Seasonal Allergy--An allergic response causing itchy,watery eyes,sneezing and similar symptoms.)<br>
	<input type="checkbox" name="ia" value="ia" >Insect Sting Allergy<br>
    (Insect Sting Allergy--stings from insects[Honeybees,Hornets,WAsps,Fire ants,Yellow Jackets].)<br>	
</td>	
</tr>

<tr>
<td>Type Of Food:</td>
<td><input type="checkbox" name="veg" value="veg" >Vegetarian<br>
    <input type="checkbox" name="veg" value="nonveg" >Non Vegetarian<br>
</td>	
</tr>

<tr>
<td>Religion :</td>
<td><input type="text" name="cast" id="religion" onblur="myform('cast',this.value)"><span id="cast"></span></td>
</tr>

<tr>
<td><input type='button' value='submit'  onclick="mybtn()"></td>
<td><input type="reset" value="reset"></td>
</tr>
<tr><td> </td></tr>
</table>
</form>
</fieldset>
<div id="foot"><img src="footer.jpg"></div>
<div id="we"><img src="prarthu.jpg" height="150px" width="150px">&nbsp;&nbsp;
<img src="prashu.jpg" width="150px" height="150px"><br>&nbsp;&nbsp;Prarthana Raval  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Prashant Gajera</div>
<div id="icon1">
<div class="social-btns"><a class="btn facebook" href="https://www.facebook.com/gajera.prashant.9"><i class="fa fa-facebook"></i></a><a class="btn twitter" href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a><a class="btn google" href="https://plus.google.com/discover"><i class="fa fa-google"></i></a><a class="btn skype" href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a>
</div>
  </div>

</body>
</html>
