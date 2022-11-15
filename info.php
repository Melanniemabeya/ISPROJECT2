<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device width, initial-scale=1.0">
  <title>Ecommerce</title>
  <!--bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
  <!--font-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--css file-->
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="Chatbot"
  agent-id="5c18f9e6-d177-4991-abe6-d709d4fc37a8"
  language-code="en"
></df-messenger>
   <style>
        df-messenger {
   --df-messenger-bot-message: #915F6D;
   --df-messenger-button-titlebar-color: #583759;
   --df-messenger-chat-background-color: #fafafa;
   --df-messenger-font-color: white;
   --df-messenger-send-icon: #878fac;
   --df-messenger-user-message:#5E5A80;
  }
       
        .navbar-custom {
            background-color: #9DC183;
        }
        .navbar-custom1{
        background-color: #D0F0C0;

      }
      .btn-custom{
        background-color: #EDC7B7;
        }  
        .text-colour{
        background-color: #9DC183;
      }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
      :root{
        --mainColor: #64bcf4;
        --hoverColor: #5bacdf;
        --backgroundColor: #fff;
        --darkOne: #312f3a;
        --darkTwo: #45424b;
        --lightOne: #919191;
        --lightTwo: #aaa;

      
      }
      *,
      *::before
      *::after{
        padding: 0;
        margin: 0;
        box-sizing: border-box; 
      }
      body{
        font-family: 'Poppins', sans-serif;
        
      }

      img{
        width: 100%;
      }
      a{
        text-decoration: none;
      }
      .big-wrapper{
        padding: 2.7rem 0 2rem;
        width: 100%;
        min-height: 100vh;
        overflow: hidden;
        background-color: var(--backgroundColor);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
      .container{
        position: relative;
        max-width: 81rem;
        width: 100%;
        margin: 0 auto;
        padding: 0 3rem;
        z-index: 10;
      }
       header .container{
        display: flex;
        justify-content: space-between;
        align-items: center;
       }

       .logo{
        display: flex;
        align-items: center;
        cursor: pointer;
       }

      .logo img{
        width: 50px;
        margin-right: 1rem;
        margin-top: -2.6rem;
      }
      .logo h3{
        color: #023020;
        font-size: 1.90rem;
        line-height: 0.8;
        white-space: nowrap;
        font-weight: 700;
        margin-top: -2.2rem;
        margin-right: 4rem;

      }
      .links ul{
        display: flex;
        list-style: none;
        align-items: center;
      }
      .links a{
        color: var(--lightOne);
        margin-left: 1.5rem;
        margin-right: 1.6rem;
         margin-top: -1.8rem;
        font-size: 1.2rem;
        display: inline-block;
      }
      .links a:hover{
        color: var(--hoverColor);
        margin-left: 3.5rem;
        display: inline-block;
        transition: 0.3s;

      }
     
      .showcase-area .container{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
        justify-content: center;

      }
      .big-title{
        font-size: 1.4rem;
        color: #355E3B;
        text-transform: capitalize;
        line-height: 0.6;
      }
      .text{
        color: var(--lightOne);
        font-size: 1.1rem;
        margin: 1.9rem 0 2.5rem;
        max-width: 600px;
        line-height: 2.0;
      }
      .showcase-area .btn{
        box-shadow: 0 0 40px 2px rgba(0, 0, 0, 0.05);
      }




/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>
  <!--navbar-->
  <div class="container-fluid p-0">

    <!--first child-->

     <nav class="navbar navbar-custom navbar-expand-lg py-0">

     <ul class="navbar-nav me-auto">
        
       <?php
        if (!isset($_SESSION['username'])) {
          echo " <li class='nav-item'>
          <h6><a class='nav-link' href='#''>Welcome Guest</a></h6>
        </li>";
        }else{
           echo"<li class='nav-item'>
          <h6><a class='nav-link' href='#''>Welcome ".$_SESSION['username']."  </a></h6>
        </li>";
        }


        if (!isset($_SESSION['username'])) {
          echo " <li class='nav-item'>
          <h6><a class='nav-link' href='./users/user_login.php'>Login</a></h6>
        </li>";
        }else{
           echo"<li class='nav-item'>
          <h6><a class='nav-link' href='./users/logout.php'>Logout</a></h6>
        </li>";
        }

        ?>
        
     </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value= "Search" class="btn btn-sm btn-outline-secondary" autocomplete="off" name="search_data_product">
      </form>

   </nav>
   

    <main>
    <div class="big-wrapper">
      <header>
        <div class="container">
          <div class="logo">
            <img src="./images/logo.png" alt="Logo">
            <h3>Plants Corner</h3>
          </div>
          <div class="links">
     <ul>
       <li><a href="home.php">Home</a></li>
               <li><a href="display_all.php">Products</a></li>
                <li><a href="info.php">Info</a></li>
                 
        <?php
        if (isset($_SESSION['username'])) {
          echo "<li><a href='./users/profile.php?my_orders'>My Account</a></li>";
        }else{
          echo "<li class='nav-item'>
          <li><a href='./users/user_registration.php'>Register</a></li>";
        }
        ?>
         
        <li><a href="contact.php">Contact</a></li>
         <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a></li>
         <li class="nav-item">
            <li><a href="#">Total Price:<?php total_cart_price(); ?></a></li>
       
       </ul>
            
          </div>
        </div>
      </header>


<!-- MAIN (Center website) -->
<div class="main">
<hr>

<h1>Plant Care</h1>
<h3><p>Tips, tricks, and plant guides to make plant care downright easy..</p></h3>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="images/person5.jpeg" alt="Mountains" style="width:100%">
      <h3>Mental Health</h3>
      <p>Constantly seeing and being around plants help us feel more calm and relaxed, thus decreasing levels of anxiety. Nurturing and caring for our plants can also reduce stress levels and boost our mood.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/person2.jpg" alt="Lights" style="width:200%">
      <h3>Watering your plants</h3>
      <p> It's best to water on an as-needed basis rather than by a set calendar schedule. In general, plants grown in well-drained soil in an appropriate-size container should be watered when the top 1/2 to 1 inch of soil feels dry. Cacti and succulents need less water; flowering plants usually need slightly more. Overwatering is one of the most common causes of houseplant death. If you're not sure how much to water, it's better to err on the dry side than to give your plants too much moisture.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/person3.jpg" alt="Nature" style="width:200%">
      <h3>Fertilizing</h3>
      <p>Most houseplants put on a growth spurt in spring and summer, so this is the best time to fertilize them. During the short days of fall and winter, most houseplants don't need much, if any, fertilizer. Follow label directions to know how much plant food to use. Like overwatering, it's important to avoid overfertilizing your houseplants. Too much fertilizer can burn their roots and stunt their growth.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/person4.jpg" alt="Mountains" style="width:80%">
      <h3>Repot Overgrown Houseplants</h3>
      <p>Check the root systems. If the roots are circling the inside of the container, it may be time to repot the plant. If the plant has outgrown its pot, you can transplant it into a slightly larger container. If you'd like to keep it in the same pot, trim off some of the roots with a sharp knife and replant it into the container using fresh potting soil.</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="images/person1.jpeg" alt="Bear" style="width:100%">
  <h3>Deadhead Flowers and Remove Dying Leaves</h3>
  <p>Trim faded flowers from your plants to encourage more blooms and help prevent disease problems. While you're at it, be sure to remove yellow, brown, or withered leaves. Use a narrow-blade hand pruner or sharp scissors to make a clean cut without tearing the plant's stem. It's a good idea to wipe off the blades of your pruners with rubbing alcohol before moving on to a different plant to avoid spreading any pests and diseases.</p>
  <h3>Remove Dust From Plants</h3>
  <p>Almost all houseplants look better with regular cleaning. Dust collects on leaves, so wash them with a gentle shower of room-temperature water or dust them with a soft brush if the plants have hairy leaves (which can hold onto moisture and encourage disease). For plants with smooth leaves, you can also use a cloth to gently wipe away any dust that collects on leaves. Not only does this improve your plant's appearance, but it'll actually help it to soak up more light.</p>
</div>

<!-- END MAIN -->
</div>

</body>
</html>
