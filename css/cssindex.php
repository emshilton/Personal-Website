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

.navbar-inverse .navbar-nav>li>a:hover{
    background-color: #444;
}




body {
    overflow-x: hidden;
    overflow-y: hidden;
}

.jumbotron{
    background-image: linear-gradient(
<?php echo $LC2r ?>,
<?php echo $DC1r ?>

    ),url("../images/home.jpg");
    background-repeat: no-repeat;
    background-position: right;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #464646;
    padding-top: 60px;
}

.indexText{
    margin-left: 50px;
    margin-right: 50px;
    margin-top: 250px;
    padding-bottom:20px;

}

.jumbotron #emph{
    color: <?php echo $CC1 ?>;
    font-weight:700;
}
.jumbotron #emp{
color: <?php echo $BC1 ?>;
font-weight:700;
}

.jumbotron h1{
    background-color: transparent;
    text-align: center;
    font-size: 128px;
    font-weight: 400;
    padding-bottom: 5px;
    margin-bottom: 0px;
    color: <?php echo $LC2 ?>;
    font-family: "Montserrat";
}

.jumbotron p{
    font-size: 28px;
    font-weight:400;
    color: <?php echo $LC2 ?>;
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
    color: #3F3250;
}

.buttonContainer span:hover{
    background-color: <?php echo $DC2 ?>;
    color: <?php echo $LC1 ?>;
}

.buttonContainer a{
    -webkit-transition: color 0.3s ease;
    -moz-transition: background-color 0.3s ease;
    background-color:transparent;
}

.buttonContainer a:hover{
    background-color:<?php echo $LC1r ?> ;
    color: <?php echo $BC1 ?>;
    border-color:<?php echo $BC1 ?>;
}

.englishButton{
    width:300px;
    height: 43px;
    text-align: right;
    vertical-align: middle;
    line-height: 20px;
    border-radius: 7px;
    border-width: 4px;
    border-color: <?php echo $CC1 ?>;
    color: <?php echo $CC1 ?>;
    background-color: transparent;
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
    border-color: <?php echo $CC1 ?>;
    color: <?php echo $CC1 ?>;
    background-color: transparent;
    font-size:18px;
    padding:6px;
}

.photoContainer{
    text-align: center;
}

