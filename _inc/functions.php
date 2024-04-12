<?php
function redirect(){
    header("Location: templates/home.php");
    die ("eror");


}
function addstyle(){
    echo'<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">';
    echo'<link rel="stylesheet" type="text/css" href="../assets/css/style.css">';
    echo'<link rel="stylesheet" href="../assets/css/responsive.css">';
    echo'<link rel="icon" href="../assets/images/fevicon.png" type="image/gif" />';
    echo'<link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.min.css">';
    echo'<link rel="stylesheet" href="../assets/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">';
    echo'<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">';
    echo'<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">';
    echo'<link rel="stylesheet" href="../assets/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">';







}
?>

