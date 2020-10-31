<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.fa {
  padding: 20px;
  font-size: 40px;
  width: 75px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.p {
  border-style: solid;
  border-color: black;

}
img {
  border: 4px solid black;
  border-radius: 4px;
  padding: 20px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
* {
  box-sizing:border-box;
}

.left {
  border-style: solid;
  border-color: black;
  background-color:green;
  padding:20px;
  float:left;
  width:20%;

}

.main {
  border-style: solid;
  border-color: black;
  background-color:green;
  padding:20px;

}

.right {
  border-style: solid;
  border-color: black;
  background-color:green;
  padding:20px;
  float:left;
  width:20%;
}

.main1 {
  border-style: solid;
  border-color: black;
  background-color:green;
  padding:20px;
  float:left;
  width:20%;
}

.top{

    padding: 20px;
}

/* Gallery */
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  background-color: rgba(104, 73, 73, 0.164);
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

.gallery{
  border-style: solid;
  border-color: black;
  padding: 20px;
}

.instructor{
  border-style: solid;
  border-color: black;
  padding: 20px;
}

.aboutus{
  border-style: solid;
  border-color: black;
  padding: 20px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Use a media query to add a break point at 800px: */
@media screen and (max-width:1000px) {
  .left, .main, .main1, .right, .p {
    width:100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
p:hover {
  background-color: black;

  opacity: 50%;
}
</style>
</head>
<body>


<div class = "top">
    <br><br>

<center><font face="stencil " size = 55><b>Iron Paradise</b></font></center>
</div>

<hr>
<p>
<div class="main1">
  <a href="#gg"><h1><font color="white"><p>Gym Gallery</p></font></h1></a>
</div>

<div class="main1">
  <a href="#is"><h1><font color="white"><p>Instructors</p></font></h1></a>
</div>

<div class="main1">
  <a href="/site/form.html"><h1><font color="white"><p>Sign up</p></font></h1></a>
</div>

<div class="main1">
        <a href="/site/signinform.html"><h1><font color="white"><p>Member Login</p></font></h1></a>
</div>

<div class="main1">
  <a href="#aus"><h1><font color="white"><p>About Us</p></font></h1></a>
</div>
<br>
<br>
</p>
<hr>

<div class="p">
<br><br><img src="/first/gym1.jpg" alt="gym" style="width:50%">
</div>
<br>
<br>




<a id = "gg"><center><font size = 25>Gym Gallery</font></center></a><br><br>
<!-- Header -->
<div class = "gallery">
<div class="header">

    <font size=6>A modern gym equipped with running tracks, free weights, exercise and cardio machines.
       Iron Paradise also offers group training.
       The workout offers varies during the year.</font>
  </div>

  <!-- Photo Grid -->
  <div class="row">
    <div class="column">
      <img src="/site/1.jpeg" style="width:100%">
      <img src="/site/2.jpeg" style="width:100%">
      <img src="/site/3.jpg" style="width:100%">

    </div>
    <div class="column">
      <img src="/site/5.jpg" style="width:100%">
      <img src="/site/6.jpg" style="width:100%">
      <img src="/site/7.jpg" style="width:100%">

    </div>
    <div class="column">
      <img src="/site/8.jpg" style="width:100%">
      <img src="/site/9.jpg" style="width:100%">
      <img src="/site/10.jpg" style="width:100%">

    </div>
    <div class="column">
      <img src="/site/11.jpg" style="width:100%">
      <img src="/site/12.jpg" style="width:100%">
      <img src="/site/13.jpg" style="width:100%">

    </div>
  </div>
</div>



<br><br>
<a id = "is"><center><font size = 25>Instructors</font></center></a><br><br>
<div class = "instructor">
<img src="/site/ghj.jpg"   >
<br><br>
<font size=6>
OWNER / HEAD COACH :
 SAMEER JOHN <br>

Our head instructor Sameer has been with Iron Paradise since our inception in 2016. <br>
He is a through professional, with experience in
CrossFit training, Pilates, Weightlifing and Yoga.<br>
He has a vast clientele of celebrities that trust him with their fitness. He is our Founder, Owner and Leader.<br>
Sameer Sir knows all there is to know about Body Building and also conducts Confidence Building Workshops.<br>
 Once you enroll with Iron Paradise, you will be in very good hands of our professionally acclaimed Head Coaches listed below.
</font>
<br><br>
 <img src="/site/t22.jpg" >
 <br><br>
 <font size=6>
 HEAD COACH :
  VICTORIA SMITH <br>
  Our other head coach, Victoria is a dedicated Pilates instructor, one of the best in the country.<br>
  She has specific training programs for women that can be customized to your requirements, adjusting it to your work schedule, lifestyle and diet preferences.<br>
  Some of the women she has trained over the years have setup their own Pilates Studios and that alone is testimony to the depth of her knowledge and her rigorous training schedules.

</font>
<br><br>
<img src="/site/t1.jpg">
<br><br>
<font size=6>
HEAD COACH :
 MARK VAZ<br>
Mark is the go-to person for Weight training in Iron Paradise.<br>
He is a nuanced weightlifter, Kickboxer and an avid runner. So you can approach him for training tips with regards to any of the above.<br>
Mark beleives that the secret to a good body is in the gut. He drafts special diet plans for those who enroll with him,
keeping in mind their current health situations and the weight they want to achieve.
</font>
<br><br>
<img src="/site/t4.jpg">
<br><br>
<font size=6>
HEAD COACH :
  NAOMI BANKS <br>
Working out at Iron Paradise doesn't always have to mean doing heavy Cardio, Deadlifts, Treadmills and stuff.<br>
Naomi is here to provide a refreshing new take on the Gymming experience, as you know it.<br>
She firmly beleives that a good body is a Flexible body. So to make her trainees more flexible, she inculcates Yoga and Aerial Silks Workout into her training.<br>
Join her Flexi- program today!
</font>
<br><br><br>
</div>
<br><br>

<div class="main"><a href="/finalip/viewrw.php"><h1><font color="white"><p><center>View Reviews</center></p></font></h1></a></div>

<a id = "aus"><center><font size = 25>About Us</font></center></a><br><br>
<div class = "aboutus">
<font size=6>
Iron Paradise is revolutionising fitness to bring you the best gym experience in the country. You can choose between a range of flexible membership options to suit your needs.
From a wide range of motivating fitness classes to state-of-the-art gym equipment, we include it all within your membership at no extra cost to help you live the best way you can and achieve your goals.
Our mission is to inspire a healthier nation.
</font>
</div>
<br>
<br>
<center>
<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://twitter.com/PrasadSachinist" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/channel/UCtjy_QduolslGC9xqpuZ-gQ" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/aakashtawde_8/" class="fa fa-instagram"></a>
</center>
<footer><center><h2>© IronParadise,2019</h2></center>
</footer>

</body>
</html>
