<!doctype html>

<html class="no-js" lang="zxx">



<head>











<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!----------------------- custom css  ----------------------->
    <link rel="stylesheet" href="frontend-page/style css/style.css">
    <!---------------------- fontawesome  ------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- <link rel="stylesheet" href="/Franchise Website Updated/style2 css/style.css">
    <link rel="stylesheet" href="/Franchise Website Updated/style css/megaMenu.css"> -->























    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>BHOPAL HOSPITAL</title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- <link rel="manifest" href="site.webmanifest"> -->

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS here -->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/themify-icons.css">

    <link rel="stylesheet" href="css/nice-select.css">

    <link rel="stylesheet" href="css/flaticon.css">

    <link rel="stylesheet" href="css/gijgo.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">

    
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <style>
          
          @media (min-width: 0px) and (max-width: 990px) {
    /* line 10, ../../Arafath/CL/january 2020/240. Animal/HTML/scss/_bradcam.scss */
    .logo1 img{
       width: 60%;
       height: 30%;
    }
  }


  @media (min-width: 990px) and (max-width: 1991px) {
    /* line 10, ../../Arafath/CL/january 2020/240. Animal/HTML/scss/_bradcam.scss */
    .logo1 img{

width: 200%;

height: 60%;

}
  }

      

    </style>

</head>

<body>

  




<div>
<header>
    <style>

body{
    /* min-height: 100vh; */
    /* background: url(Education.jpg); */
    background-size: cover;
    background-position: center;
}
header{
    position: fixed;
    /* top: 0;left: 0;right: 0; */
    background: #ffffff;
    box-shadow: 0 5px 10px rgba(0,0,0,.1);
    /* padding: 20px 7px ; */
    /* display:block; */
    align-items: left;
    /* justify-content: space-between; */
    z-index: 1000;
}
.logo{
    font-weight: bolder;
    font-size: 25px;
    color:#333 ;
}
.navbar ul{
  list-style: none;  

}
.navbar ul li{
   position: relative; 
   float: left;

}
.navbar ul li a{
    font-size: 20px;
    padding: 20px;
    color: #333;
    display: block;
}
.navbar ul li a:hover{
    background-color: #333;
    color: #ffffff;
}
.navbar ul li ul{
    position: absolute;
    left: 0;
    width: 200px;
    background: #fff;
    display: none;
}
.navbar ul li ul li{
    width: 100%;
    border-top: 1px solid rgba(0,0,0,.1);
}
.navbar ul li ul li ul{
    left:200px;
    top:0 ;
}
.navbar ul li:focus-within>ul,
.navbar ul li:hover >ul{
    display:initial ;
}
#menu-bar{
    display: none;
}
header label{
    font-size: 20px;
    color: #333;
    cursor: pointer;
    display: none;

}







@media(max-width:991px){
    header{
        padding: 20px;
    }
    header label{
        display: initial;
    }
    .navbar{
       position: absolute; 
       top: 100%; left: 0; right: 0;
       background-color: #fff;
       border-top: 1px solid rgba(0,0,0,.1);
       display: none;
    }
    .navbar ul li{
        width: 100%;
    }
    /* .navbar ul li ul{
        position: relative;
        width: 100%;
    }
    .navbar ul li ul li{
        background-color: #eee;

    }
    .navbar ul li ul li ul{
        width: 100%;
        left: 0;
    } */
    #menu-bar:checked ~.navbar{
        display:initial ;
    }
}
    </style>
   

    <div class="row">
        <div class="col-lg-3"> <a href="" class="logo"><img src="img/logo.png" alt="" style="width: 60%; height: 80%; margin-left: 50px; "></a></div>
        <div class="col-lg-6"> <input type="checkbox" id="menu-bar">
    <label for="menu-bar">Menu</label>
    <nav class="navbar">
        <ul>
        <li><a  href="index.php">Home</a></li>

<!-- <li><a href="cucumber.php">Cucumber</a></li>

<li><a href="flora-service.html">FLORA2</a></li>

<li><a href="mrdh.php">MR.DHIRENDra</a></li>

<li><a href="contact.php">contact</a></li> -->


<!-- <li><a href="admin/index.php"></a></li> -->


<li><a href="about.php">About</a></li>





<li><a href="#">MP Hospitals</a>
<ul>
<li>
    <a href="BHOPAL-USER-ADMIN">Bhopal</a>
</li>
<li>
    <a href="JABALPUR-USER-ADMIN/">Jabalpur</a>

</li>
<li>
    <a href="NARAMDAPURAM-USER-ADMIN/">Naramdapuram</a>
</li>
<li>
    <a href="GADARWARA-USER-ADMIN/">Gadarwara</a>
</li>
</ul>

</li>

<li><a href="admin/index.php">State Admin</a></li>


<li><a href="contact.php">Contact</a></li>


</ul></div>
    </div>
   
    </nav>
</header>
</div>






                  