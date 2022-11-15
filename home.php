<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Landing Page</title>
  <link rel="stylesheet" type="text/css">
  <style>
    body{
          overflow-x: hidden;
        }
       
        .navbar-custom {
            background-color: #EDC7B7;
        }
        .navbar-custom1{
        background-color: #EEE2DC;

      }
      .btn-custom{
        background-color: #EDC7B7;
        }  
        .text-colour{
        background-color: #AC3B61;
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
        padding: 1.7rem 0 2rem;
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
        margin-right: .6rem;
        margin-top: -0.6rem;
      }
      .logo h3{
        color: #023020;
        font-size: 1.55rem;
        line-height: 1.2;
        font-weight: 700;
      }
      .links ul{
        display: flex;
        list-style: none;
        align-items: center;
      }
      .links a{
        color: var(--lightOne);
        margin-left: 2.5rem;
        margin-right: 1.6rem;
        font-size: 1.1rem;
        display: inline-block;
      }
      .links a:hover{
        color: var(--hoverColor);
        margin-left: 3.5rem;
        display: inline-block;
        transition: 0.3s;

      }
      .btn{
        display: inline-block;
        padding: .9rem 1.9rem;
        color: #fff !important;
        background-color: #4F7942;
        border-radius: 16px;
        text-transform: capitalize;
        transition: 0.3s;

      }
      .btn:hover{
        background-color: var(--hoverColor);
        transform: scale(1) !important;

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

      .person{
        width: 105%;
        transform: translate(5% ,25px);


      }

    </style>
</head>
<body>
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
                 <li><a href="contact.php">Contact</a></li>
                 <li><a href="./users/user_registration.php" class="btn">Register</a></li>
                 
            </ul>

          </div>
        </div>
      </header>
      <div class="showcase-area">
        <div class="container">
        <div class="left">
            <div class="big-title">
            <h1>Grow plants for</h1>
            <h1>a better life.</h1>
          </div>
            <p class="text">
           Your intuitive powers increase when you are with plants because your mind is silenced and you become more aware in the present moment.
          </p>
          <div class="cta">
            <a href="index.php" class="btn">Shop Now</a>
          
        </div>
      </div>
        <div class="right">
          <img src="./images/img4.jpg" alt="Person Image" class="person">
        </div>
      </div>
   </div>
        <div class="bottom-area">
          <div class="container">
            
          </div>
          
        </div>
      </div>
    </div>
  </main>
  

</body>
</html>
