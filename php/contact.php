	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="c:user/velda/desktop/menu/style.css">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
		document.body.style.backgroundColor = "rgba(0,0,0,0.0)";
		}
		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
			document.body.style.backgroundColor = "white";
		} 
	</script>
	<style> 
		u {font-size: .5em;
                         }
			
			*{
				margin:0px;
				padding 0px;
				font-size: 1.0em;
			 }
			  
			* {
			  font-family:sans-serif;
			  list-style:none;
			  }
		  
			  header{
			  height: 75px;
			  margin: 0;
			  font-size:1.5em;
			  padding:0px 0 10px 5px;
			  background: linear-gradient(#ee82ee, #753a88);
			  color:#fff;
			  display: flex;
			  justify-content: center;
			  align-items: center;
			  text-align: center;
			} 
		  
			.container {
			
			 width: 75%;
			 margin: 0 auto;
			 color:#000;
			}
			h2 {
	    display: block;
	    font-size: 1.5em;
	    -webkit-margin-before: 0.83em;
	    -webkit-margin-after: 0.83em;
	    -webkit-margin-start: 0px;
	    -webkit-margin-end: 0px;
	    font-weight: bold;
		}
	  
		  .sidenav {
			height: 100%; 
			width: 0; 
			position: fixed; 
			z-index: 1; 
			top: 0px; 
			left: 0;
			background: linear-gradient(#ee82ee, #753a88);
			overflow-x: hidden; 
			padding-top: 60px; 
			transition: 0.5s; 
			}
			
		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #fff;
			display: block;
			transition: 0.3s;
			}

		.sidenav a:hover a:active{
		 background-color: #b284be;
		 color: #ffff;
		}
		.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 35px;
			font-size: 36px;
			margin-left: 50px;
			}
			
		@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 18px;}
				}
			
		.border-menu {
		  position: relative;
		  padding-left: 1.25em;
			}
		.border-menu:before {
		  content: "";
		  position: absolute;
		  top: 0.25em;
		  left: 0;
		  width: 1em;
		  height: 0.125em;
		  border-top: 0.375em double #000;
		  border-bottom: 0.125em solid #000;
			}
					
		ul li {
		list-style-type: square;
		margin: 0;
		padding: 0;
		}
		.btn{
	margin:auto;
	width:40%;
	border-radius: 10px;
	border: none;
	padding: 10px 20px;
	color:aliceblue;
	background: linear-gradient(#ee82ee, #753a88);
	text-align: center;	   
	}
	button.btn{
	margin-left: 20%;	   
	}
	    </style>
	    </head>
	<body>
	<header><h2>The Dream Teams</h2></header>
    <span onclick="openNav()"> 
	<i class="fa fa-align-justify" style="font-size:36px; color:#753a88; margin-left:15px">&nbsp;Menu</i></span>
	<br><br> 
	<div id="mySidenav" class="sidenav">
	<br><br>
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<br><br>
	<a class="active" href="index.html">Home</a>
	<a href="aboutus.html">About Us</a>
	<a href="theceo.html">About The Ceo</a>
	<a href="ourexpectation.html">Our Expectations</a>
	<a href="services.html">Our Services</a>
	<a href="calendarmenu.html">Donate Page</a>
	<a href="contact.html">Contact Us</a>
	<button class="btn" onclick="self.close()">Exit The Site</button>
	</div>
	<br><br> 
    <div class="container">
	    <h4><p><b><u>What Participants Do</u></b></p></h4>
		<br>
		<ul> 	
		<li>Network: Communicating with others to explain, gather, and disseminate information and ideas to gain knowledge, sources and materials to complete our goals.</li><br>
		<li>Peer Support: Communicate within our own members about our personal challenges, achievements, and goals.</li><br>
		<li>Building Project Planning Skills: Building on organizational tasks that will be needed to start and complete your project. Also to build and learn new skill sets etc. (ex:Research jobs markets)
		</li><br>
		<li>Work on Current projects: spending time researching our own personal projects or goals.</li><br>
		<li>Take assessment to learn new skills:</li><br>
		<li>Brainstorm new ideas for marking products and services at Dreams of Millions, Inc:</li><br>
		<li>Meet with Care Source about job initiatives (life coach): For those who are eligible.</li><br>
		</ul>
		</div>
		<br><br>
		<center>
		<div>
		<img src="images/people1.png" style="width: 400px; height: 300px;">
	</center>
	</body>
	</html>




