<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Form</title>
    <script src="https://kit.fontawesome.com/8ae9727955.js" crossorigin="anonymous"></script>
    
     <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
       
      
      body{
        font-family: 'Poppins', sans-serif;
        
      }

      img{
        width: 100%;
      }
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;

      }
      body, 
      input,
      text-area{
        font-family: 'Poppins', sans-serif;
      }
      .container{
      	position: relative;
      	width: 100%;
      	min-height: 100vh;
      	padding: 2rem;
      	background-color: #fafafa;
      	overflow: hidden;
      	display: flex;
      	align-items: center;
      	justify-content: center;
      }
      .form{
      	width: 100%;
      	max-width: 820px;
      	background-color: #fff;
      	border-radius: 10px;
      	box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
      	z-index: 1000;
      	overflow: hidden;
      	display: grid;
      	grid-template-columns: repeat(2, 1fr);

      }
      .contact-form{
      	background-color: #9DC183;
      	position: relative;
      }
      .circle{
      
      	border-radius: 50%;
      	background: linear-gradient(135deg,transparent 20%,#D0F0C0);
      	position: absolute;
      }
      .circle.one{
      	width: 130px;
      	height: 130px;
      	top: 130px;
      	right: -40px;
      }
       .circle.two{
      	width: 80px;
      	height: 80px;
      	top: 10px;
      	right: 30px;
      }
      .contact-form:before{
      	content: "";
      	position: absolute;
      	width: 26px;
      	height: 26px;
      	background-color:#9DC183 ;
      	transform: rotate(45deg);
      	top: 50px;
      	left: -13px;
      }
      form{
      	padding: 2.3rem 2.2rem;
      	z-index: 10;
      	overflow: hidden;
      	position: relative;
      }
      .title{
      	color: #fff;
      	font-weight: 500;
      	font-size: 1.5rem;
      	line-height: 1;
      	margin-bottom: 0.7rem;
      }
      .input-container{
      	position: relative;
      	margin: 1rem 0;
      }
      
      .input{
      	width: 100%;
      	outline: none;
      	border: 2px solid #fafafa;
      	background: none;
      	padding: 0.6rem 1.2rem;
      	color: #fff;
      	font-weight: 500;
      	font-size: 0.95rem;
      	letter-spacing: 0.5px;
      	border-radius: 25px;
      	transition: 0.3s;
      
      }
      textarea.input{
      	padding: 0.8rem;
      	min-height: 150px;
      	border-radius: 22px;
      	resize: none;
      	overflow-y: auto;
      }
      .input-container label{
      	position: absolute;
      	top: 50%;
      	left: 15px;
      	transform: translateY(-50%);
      	padding: 0 0.4rem;
      	color: #fafafa;
      	font-size: 0.9rem;
      	font-weight: 400;
      	pointer-events: none;
      	z-index: 1000;
      	transition: 0.5s;
      }
      .input-container.textarea label{
      	top: 1rem;
      	transform: translateY(0);    	

      }
      .btn{
      	padding: 0.6rem 1.3rem;
      	background-color: #fff;
      	border: 2px solid #fafafa;
      	font-size:0.95rem ;
      	color: #9DC183;
      	line-height: 1;
      	border-radius: 25px;
      	outline: none;
      	cursor: pointer;
      	transition: 0.3s;
      	margin: 0;
      }
      .btn:hover{
      	background-color: transparent;
      	color: #fff;
      }
      .btn2{
      	padding: 0.6rem 1.3rem;
      	background-color: #9DC183;
      	border: 2px solid #fafafa;
      	font-size:0.95rem ;
      	color: #fff;
      	line-height: 1;
      	border-radius: 25px;
      	outline: none;
      	cursor: pointer;
      	transition: 0.3s;
      	margin: 0;
      }
      .btn2:hover{
      	background-color: transparent;
      	color: #9DC183;
      }

.input-container span{
	position: absolute;
	top: 0;
	left: 25px;
	transform: translateY(-50%);
	font-size: 0.8rem;
	padding: 0 0.4rem;
	color: transparent;
	pointer-events: none;
	z-index: 500;
	

}
.input-container span:before,
.input-container span:after{
content: "";
position: absolute;
width: 10%;
opacity: 0;
transition: 0.3s;
height: 5px;
background-color: #9DC183;
top: 50%;
transform: translateY(-50%);
}
	.input-container span:before{
		left: 50%;
	}
	.input-container span:after{
		right: 50%;
	}
	.input-container.focus label{
		top: 0;
		transform: translateY(-50%);
		left: 25px;
		font-size: 0.8rem;
	}
	.input-container.focus span:before,
	.input-container.focus span:after{
		width: 50%;
		opacity: 1;
	}
	
	.contact-info{
		padding: 2.3rem 2.2rem;
		position: relative;
	}
	.contact-info .title{
		color: #9DC183;
	}
	.text{
		color: #333;
		margin: 1.5rem 0 2rem 0;
	}
	.information{
		display: flex;
		color: #555;
		margin: 0.7rem 0;
		align-items: center;
		font-size: 0.95rem;
	}
	.icon{
		width: 28px;
		margin-right: 0.7rem;
	}
	.contact-info:before{
		content: "";
		position: absolute;
		width: 110px;
		height: 100px;
		border: 22px solid #9DC183;
		border-radius: 50%;
		bottom: -77px;
		right: 50px;
		opacity: 0.4;
	}
	.big-circle{
		position: absolute;
		width: 500px;
		height: 500px;
		border-radius: 50%;
		background: linear-gradient(to bottom,#D0F0C0,#9DC183);
		bottom: 50%;
		right: 50%;
		transform: translate(-40%,38%);
	}
	.big-circle:after{
		content: "";
		position: absolute;
		width: 360px;
		height: 360px;
		background-color: #fafafa;
		border-radius: 50%;
		top: calc(50% - 180px);
		left: calc(50% - 180px);
	}
	.square{
		position: absolute;
		height: 800px;
		top: 50%;
		left: 50%;
		transform: translate(181%,11%);
		opacity: 0.2;

	}

     </style>
</head>
  <body>

  	<div class="container">
  		<span class="big-circle"></span>
  		
  		<div class="form">
  			<div class="contact-info">
  				<h3 class="title">Customer Support</h3>
  				<p class="text">
  				If you have questions or feedback about an order or Plants Corner, here’s how to get in touch.</p>
  				<p class="text">Need plant care help?
           See our <a href="info.php"> plant care guides and plant care tips</a></p>
           <p class="text">Need order help?<a href="./users/profile.php">see order details</a></p>

  				<div class="info">
  					
  					<div class="information">
  						<img src="images/email.png.png" class="icon" alt="">
  						<p>plantscorner@gmail.com</p>
  					</div>
  					<div class="information">
  						<img src="images/phone.png.png" class="icon" alt="">
  						<p>0712345678</p>
  					</div>
  					
  						<a href="index.php" class="btn2">Back</a>
  				</div>

  			</div>

  			<div class="contact-form">
  				<span class="circle one"></span>
  				<span class="circle two"></span>
  			
  			<form action="">
  				<h3 class="title">Contact us</h3>
  				<div class="input-container focus">
  					<input type="text" name="name" class="input" autocomplete="off">
  					<label for="">Username</label>
  					<span>Username</span>
  				</div>
  				<div class="input-container focus">
  					<input type="email" name="email" class="input" autocomplete="off" >
  					<label for="">Email</label>
  					<span>Email</span>
  				</div>
  				<div class="input-container focus">
  					<input type="tel" name="phone" class="input" autocomplete="off">
  					<label for="">Phone number</label>
  					<span>Phone number</span>
  				</div>
  				<div class="input-container textarea focus">
  					<textarea name="message" class="input" autocomplete="off" ></textarea>
  					<label for="">Message</label>
  					<span>Message</span>
  				</div>
  				<input type="submit" value="Send" class="btn" name="">
  			</form>
  		</div>
  	</div>
  	</div>

  	<script type="app.js"></script>
</body>
</html>