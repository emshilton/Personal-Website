<?php
header("Content-type: text/css; charset: UTF-8");

$DC1 = "#324468";
$DC1r = "rgba(50, 68, 104, 0.6)";
$DC2 = "#0399BC";
$LC1 = "#C4E9F5";
$LC1r = "rgba(196, 233, 245, 0.6)";
$LC2 = "#CBF5F0";
$LC2r = "rgba(203, 245, 240, 0.5)";
$BC1 = "#75DEDA";
$BC1r = "rgba(117, 222, 218, 0.6)";
$NC1 = "#E6E6E6";
$CC1 = "#EDB6AF";
$font1 = "Montserrat";
$font2 = "Montserrat";

?>
.navbar-inverse .navbar-nav>li>a {
    font-size: 16px;
    -webkit-transition: background-color 0.7s ease;
    -moz-transition:background-color 0.7s ease;
    background-color:<?php echo $DC1 ?>;
    color: <?php echo $NC1 ?>;

}

.brand{
    font-size: 16px;
    color:white;
}
.navbar-inverse .navbar-nav>li>a:hover{
    background-color: <?php echo $BC1 ?>;
}

#nonLink a:hover{
    background-color: <?php echo $LC2 ?>;
    color:<?php echo $NC1 ?>;
}


body {

    overflow-x: hidden;

}
.infoContainer{
    margin-left: 0px;
    margin-right:0px;
}

.jumbotron{
background-image: linear-gradient(
<?php echo $LC2r ?>,
<?php echo $DC1r ?>
        ),url("../images/flo.JPG");
    background-repeat: no-repeat;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #464646;
    padding-top:300px;
    padding-bottom: 50px;
}

.indexText{
    color: white;
    margin-left: 50px;
    margin-right: 50px;
    margin-top: 250px;
    padding-bottom:20px;
}

.jumbotron h1{
    background-color: transparent;
    text-align: center;
    font-size: 110px;
    font-family: 'Lato', sans-serif;
    font-weight: 400;
    padding-bottom: 5px;
    margin-bottom: 0px;
    color: <?php echo $CC1 ?>;
}

.jumbotron h2{
    font-size: 35px;
    font-family: 'Oswald','Arial',sans-serif;
    font-weight:400;
    color: <?php echo $NC1 ?>;
    text-align: center;
}
.jumbotron h3{
    font-size: 30px;
    font-family: 'Oswald','Arial',sans-serif;
    font-weight:400;
    color: <?php echo $BC1 ?>;
    text-align: center;
}


#contactInfo{
    font-size: 18px;
    font-weight: 300;
    color: #000
    text-align: center;
    margin-top: 0px;
}

@media all and (max-width: 768px) {
    .jumbotron h1{
        font-size: 55px;
    }

    .jumbotron p{
        font-size: 16px;
    }

    #contactInfo{
        font-size:14px;
    }
}

hr{
    margin-top: 20px;
    margin-bottom: 10px;
    border-top: 1px solid #555;
}
.navbar{
    padding-bottom: 0px;
    background-color: <?php echo $DC1 ?>;
    border-bottom-color: <?php echo $DC1 ?>;
}

.buttonContainer{
    text-align: center;
}

.buttonContainer a {
    text-align: center;

}

.buttonContainer span{
    -webkit-transition: color 0.3s ease;
    -moz-transition: background-color 0.3s ease;
    background-color:transparent;
    color: <?php echo $LC1 ?>;
}

.buttonContainer span:hover{
    background-color: <?php echo $LC1r ?>;
    color: <?php echo $BC1 ?>;
}

.resumeContainer a{
    -webkit-transition: color 0.3s ease;
    -moz-transition: background-color 0.3s ease;
    background-color:transparent;
    color: black;
}

.resumeContainer a:hover{
    background-color: rgba(22, 61, 94, 0.67);
    color: #EEE;
    border-color:#EEE;
}

.gitButton{
    width:43px;
    height: 43px;
    text-align: center;
    line-height: 44px;
    border: solid;
    border-width: 0px;
    border-radius: 23%;
    border-color: transparent;
}

.linkedinButton{
    width:43px;
    height: 43px;
    text-align: center;
    line-height: 44px;
    border: solid;
    border-width: 0px;
    border-radius: 23%;
    border-color: transparent;
}

.resumeButton{
    width:110px;
    height: 43px;
    text-align: center;
    vertical-align: middle;
    line-height: 20px;
    border-radius: 7px;
    border-width: 4px;
    border-color: #000;
    color: #000;
    background-color: transparent;
    font-family: 'Oswald', 'Arial', sans-serif;
    font-size:18px;
    padding:6px;
}

.englishButton{
    width:150px;
    height: 43px;
    text-align: right;
    vertical-align: middle;
    line-height: 20px;
    border-radius: 7px;
    border-width: 4px;
    border-color: white;
    color: white;
    background-color: transparent;
    font-family: 'Oswald', 'Arial', sans-serif;
    font-size:18px;
    padding:6px;
}


.frenchButton{
    width:150px;
    height: 43px;
    text-align: center;
    vertical-align: middle;
    line-height: 20px;
    border-radius: 7px;
    border-width: 4px;
    border-color: white;
    color: white;
    background-color: transparent;
    font-family: 'Oswald', 'Arial', sans-serif;
    font-size:18px;
    padding:6px;
}

.resumeText{
    float:right;
}

.resumeButton i{
    margin-top: 2px;
}
@media all and (max-width: 768px) {
    .resumeButton{
        width:43;
    }

    .resumeButton i{
        font-size: 22px;
    }

    .resumeText{
        display: none;
    }
}

.personalPhoto{
align: centre;
    position: centre;
    display: block;
    height: 50%;
    margin-right: auto;
    margin-left: auto;
margin: 0 auto;
}

.aboutParagraph h1{
    font-family: 'Lato','Arial',sans-serif;
    font-weight: 400;
    font-size: 50;
    color: #333;
}

.aboutParagraph p{
    font-size: 16px;
    color: #444;
    line-height: 24px;
}

h1 {
    font-weight: 400;
    font-size: 50;
}

h2{
    font-weight: 300;
    font-size:36px;
}

.experience{
    overflow:auto;

    color: <?php echo $DC1 ?>;
}
.experience h2{
    margin-top: 10px;
    margin-bottom:2px;
}

.title{
    float:left;
    color: <?php echo $BC1 ?>
}
.company-name{
    color: <?php echo $LC2 ?>
}
.devicons{
    float:right;
    font-size: 40px;
overflow-y: hidden;
}

.exptext{
    margin-top: 10px;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px

}

.expPartners{
    margin-top: 15px;
    font-size: 18px;
    font-weight: 400;
}

.pro{
    margin-left: 60px;
    margin-right: 60px;
}

.skills .row {
    margin-bottom: 5px;
    padding:0px;
}

.skills .skillBar{
    margin-left: 0px;
    margin-right: 0px;
    background-color:rgba(22, 61, 94, 0.67);
    height:24px;
}

.skills p{
    font-size: 20px;
    font-weight: 400;
    padding-top: 4px;;
}

.skills  b{
    font-weight: 700;
    font-size:24;
    padding-top: 0px;
    color: rgba(22, 61, 94, 0.67);
}

.skillTitle{
    padding-right: 20px;
    font-size: 24px;
    text-align: right;
    font-weight: 300;
    margin: 0px;
}

@media all and (max-width: 768px) {
    .skillTitle{
        text-align: center;
        font-size: 40px;
    }
    .title{
        font-size:32  px;
    }

    .devicons{
        float:left;
        font-size:32px;
    }
}

.imgIcon{
    height: 24px;
    padding-bottom: 5px;
    width: auto;
}
.jobPhoto{
background-image: linear-gradient(
<?php echo $LC2r ?>,
<?php echo $DC1r ?>
),url("../images/flo.JPG");
    color: white;
    background-repeat: no-repeat;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #464646;
    padding-top: 70px;
    padding-bottom: 70px;
}

.job-experience{
    display: table-cell;
    vertical-align: bottom;
}
.job-experience > span{
    font-weight: 300;
}
.job-experience >.title{
    font-size: 33px;
}
.company-name{
    margin-left: 3px;
    font-size: 28px;
}

.section{
    margin-bottom: 30px;
    margin-left: 60px;
    margin-right: 60px;
}

#contactInfo > a{
    color: #111;
}

#contactInfo > a:hover{
    -webkit-transition: color 0.1s ease;
    -moz-transition: background-color 0.1s ease;
    color: #555;
}

#cd-timeline {
    position: relative;
    padding: 2em 0;
    margin-top: 2em;
    margin-bottom: 2em;
}
#cd-timeline::before {
/* this is the vertical line */
    content: '';
    position: absolute;
    top: 0;
    left: 18px;
    height: 100%;
    width: 4px;
    background: #d7e4ed;
}

.awards{
background-image: linear-gradient(
<?php echo $LC2r ?>,
<?php echo $DC1r ?>
),url("../images/flo.JPG");
    color: white;
    background-repeat: no-repeat;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #464646;
    padding-top: 30px;
    padding-bottom: 70px;
}

.about {
    color: <?php echo $DC1 ?>;
}

#aboutParagraph {
color: <?php echo $DC1 ?>;
}

.job {
    color: <?php echo $NC1 ?>;
}

.projects {
    color: <?php echo $DC1 ?>;
    padding-top: 20px;
    padding-bottom: 20px;
}

.awards{
    color: <?php echo $NC1 ?>;
}


section#timeline {
    width: 80%;
    margin: 10px auto;
    position: relative;
    margin-top:20px;
}
section#timeline:before {
    content: '';
    display: block;
    position: absolute;
    left: 50%;
    top: 0;
    margin: 0 0 0 -1px;
    width: 2px;
    height: 100%;
    background: rgba(255,255,255,0.2);
}
section#timeline article {
    width: 100%;
    margin: 0 0 20px 0;
    position: relative;
}
section#timeline article:after {
    content: '';
    display: block;
    clear: both;
}
section#timeline article div.inner {
    width: 40%;
    float: left;
    margin: 5px 0 0 0;
    border-radius: 6px;
}
section#timeline article div.inner span.date {
    display: block;
    width: 60px;
    height: 50px;
    padding: 5px 0;
    position: absolute;
    top: 0;
    left: 50%;
    margin: 0 0 0 -32px;
    border-radius: 100%;
    font-size: 12px;
    font-weight: 900;
    background: <?php echo $DC1 ?>;
    color: <?php echo $LC1 ?>;
    box-shadow: 0 0 0 7px <?php echo $DC1 ?>;
}
section#timeline article div.inner span.date span {
    display: block;
    text-align: center;
}

section#timeline article div.inner span.date span.month {
    font-size: 18px;
    line-height:2;

}

section#timeline article div.inner h2 {
    padding: 15px;
    margin: 0;
    color: <?php echo $DC1 ?>;
    font-size: 15px;
    letter-spacing: -1px;
    border-radius: 6px 6px 0 0;
    position: relative;
}
section#timeline article div.inner h2:after {
    content: '';
    position: absolute;
    top: 20px;
    right: -5px;
    width: 10px;
    height: 10px;
    -webkit-transform: rotate(-45deg);
}
section#timeline article div.inner p {
    padding: 15px;
    margin: 0;
    font-size: 12px;
    background: white;
    color: <?php echo $DC1 ?>;
    border-radius: 0 0 6px 6px;
}
section#timeline article:nth-child(2n+2) div.inner {
float: right;
}
section#timeline article:nth-child(2n+2) div.inner h2:after {
left: -5px;
}
section#timeline article:nth-child(1) div.inner h2 {
background: <?php echo $LC2 ?>;
}
section#timeline article:nth-child(1) div.inner h2:after {
background: <?php echo $LC2 ?>;
}
section#timeline article:nth-child(2) div.inner h2 {
background: <?php echo $LC2 ?>;
}
section#timeline article:nth-child(2) div.inner h2:after {
background: <?php echo $LC2 ?>;
}
section#timeline article:nth-child(3) div.inner h2 {
background: <?php echo $LC2 ?>;
}
section#timeline article:nth-child(3) div.inner h2:after {
background: <?php echo $LC2 ?>;
}
section#timeline article:nth-child(4) div.inner h2 {
background: <?php echo $LC2 ?>;
}
section#timeline article:nth-child(4) div.inner h2:after {
background: <?php echo $LC2 ?>;
}
section#timeline article:nth-child(5) div.inner h2 {
background: <?php echo $LC2 ?>;
}
section#timeline article:nth-child(5) div.inner h2:after {
background: <?php echo $LC2 ?>;
}

#contactAnchor{
background-image: linear-gradient(
<?php echo $LC2r ?>,
<?php echo $DC1r ?>
),url("../images/flo.JPG");
    text-align: center;
    padding-top: 10px;
    padding-bottom: 30px;
    margin-bottom: 0px;
    margin-top: -150px;
    color: <?php echo $LC1 ?>;
}

.contact {
    position: centre;
    text-align: center;

}

.icon{
    margin-top: -30%;
    height:230%;
}

.chart {
    margin-top: 40px;
}

<!--.chart2{-->
<!--    -ms-transform: rotate(90deg); /* IE 9 */-->
<!--    -webkit-transform: rotate(90deg); /* Chrome, Safari, Opera */-->
<!--    transform: rotate(90deg);-->
<!--}-->

#wrapper body {
    background: #fff;
    font: 12px/20px 'Helvetica Neue', Arial, sans-serif;
    margin: 0;
    padding: 0;
    color:#324468;
}
#wrapper h2 {
    font-size: 18px;
    font-weight: normal;
    line-height: 20px;
    margin: 0 0 20px 0;
    padding: 0;
    text-align: center;
}
#wrapper h4 {
    color:#324468;
    font-size: 14px;
    font-weight: normal;
    line-height: 20px;
    margin: 0 0 20px 0;
    padding: 0;
    text-align: center;
}
#wrapper a {
color:#324468;
}

/* Table */
#data-table {
    border: none; /* Turn off all borders */
    border-top: 1px solid #ccc;
    width: 540px;
}

#data-table thead {
background: #f0f0f0;
}


/* Graph */
/* Containers */
#wrapper {
height: 420px;
left: 50%;
margin: 0px 0 0 -270px;
position: relative;
top: 50%;
width: 540px;
}
#figure {
height: 380px;
position: relative;
}
#figure ul {
list-style: none;
margin: 0;
padding: 0;
}
.graph {
height: 283px;
position: relative;
}


/* X-Axis */
.x-axis {
margin-left: 10px;
bottom: 0;
color:#324468;
position: absolute;
text-align: center;
width: 540px;
}
.x-axis li {
color:#324468;
float: left;
margin: 0 15px;
padding: 5px 0;
width: 30px;
transform: rotate(30deg);
}

/* Y-Axis */
.y-axis {
color:#324468;
position: absolute;
text-align: center;
width: 100%;
}
.y-axis li {
color:#324468;
border-top: 1px solid #ccc;
display: block;
height: 62px;
width: 100%;
}
.y-axis li span {
color:#324468;
font-family: 'Montserrat';
display: block;
margin: -10px 0 0 -100px;
padding: 0 10px;
width: 80px;
}

/* Graph Bars */
.bars {
height: 253px;
position: absolute;
width: 100%;
z-index: 10;
}
.bar-group {
float: left;
height: 100%;
margin: 0 15px;
position: relative;
width: 28px;
}
.bar {
border-radius: 3px 3px 0 0;
bottom: 0;
cursor: pointer;
height: 0;
position: absolute;
text-align: center;
width: 30px;
}
.bar.fig0 {
left: 0;
}

.bar span {
    background: #fefefe;
    border-radius: 3px;
    left: -8px;
    display: none;
    margin: 0;
    position: relative;
    text-shadow: rgba(255, 255, 255, 0.8) 0 1px 0;
    width: 40px;
    z-index: 20;

    -webkit-box-shadow: rgba(0, 0, 0, 0.6) 0 1px 4px;
    box-shadow: rgba(0, 0, 0, 0.6) 0 1px 4px;
}



