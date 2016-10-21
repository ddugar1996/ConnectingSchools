<?php

session_start();

?>
<!DOCTYPE html>
<html>
<title>Connecting Schools A Modern Platform for Modern Schools</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.mySlides {display:none;}
</style>
<body bgcolor="#E6E6FA">

<h2 class="w3-center"><center>UPCOMING EVENTS</h2></center>
<div style="float:left">
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="image2.jpg" style="width:175%">
  <img class="mySlides" src="image3.jpg" style="width:175%">
  <img class="mySlides" src="image4.jpg" style="width:175%">
</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<div style="float:right">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">My Profile</a>
  <a href="#">Settings</a>
  <a href="../login/login.php">Logout</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <?php echo "Hello " . $_SESSION["uname"] ?></span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="news" style="margin-top:10px">

            <div class="news_events_matter">
                <table>
                    <tr>
                        <td>

                                    <div id="news-marquee">
                                        <table style="width: 100%; border-collapse: collapse" border="0" cellpadding="0"
                                            cellspacing="0">
                                            <tr>
                                                <td style="vertical-align: top" align="justify" class="para-newsHome">
                                                    <marquee align="absbottom" direction="up" scrollamount="1" onmouseover="this.setAttribute('scrollamount', 0, 0);"
                                                        onmouseout="this.setAttribute('scrollamount', 1, 0);" style="height: 400px; width: 400px;">

                                    <ul>

                                        <li>
                                            <p><span style="font-family: verdana,geneva; font-size: large;"><a title="Fifth International Conference on Computing Communications and Informatics (ICACCI) during 21 - 24, September 2016." href="Event/index2.html" target="_blank">Live Concert By The LOCAL TRAIN!</a></span></p>
                                            </li>
                                    </ul>

                                    <ul>

                                        <li>
                                            <p><span style="font-family: verdana,geneva; font-size: large;"><a title="National Workshop on Design &amp; Development of Digital Library with DSpace December 1,2 2016" href="uploaded_files/D_SPACE_Brochure.pdf" target="_blank">National Workshop on Design &amp; Development of Digital Library with DSpace December 1,2 2016</a></span></p>
                                            </li>
                                    </ul>

                                    <ul>

                                        <li>
                                            <p><span style="font-family: verdana,geneva; font-size: large;"><a title="ASME Felicitation Ceremony: September 7, 2016" href="uploaded_files/ASME_Felicitation_Ceremony.pdf" target="_blank">ASME Felicitation Ceremony: September 7, 2016</a></span></p>
                                            </li>
                                    </ul>

                                    <ul>

                                        <li>
                                            <p><span style="font-family: verdana,geneva; font-size: large;"><a title="ASME Event on Energy and Industries: August 30, 2016" href="uploaded_files/Talk_On_Energy_And_Industries.pdf" target="_blank">ASME Event on Energy and Industries: August 30, 2016</a></span></p>
                                            </li>
                                    </ul>

 </marquee></td> </tr>
                                    <td width="96%" align="right" style="padding-right: 10px; padding-bottom: 10px; padding-bottom: 8px;">
                                        <a href="ViewAll_Latest_Update.aspx" style="padding: 4px 10px;">More</a>
                                    </td>
                                    </table> </div>

                        </td>
                    </tr>
                </table>
            </div>
            <div style="clear: both">
            </div>
        </div>
      </div>

</body>
</html>
