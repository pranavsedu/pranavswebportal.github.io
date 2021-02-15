<?php


?>

<!DOCTYPE HTML>
<html>
<head>
<title>pranav's web portal</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');
html{
				
				--bg:#ffffff;
				--text-color:#9a42ff;
				--para-color: #f8ebff ;
				--top-color:#9142ff;
				--menu-color:#8146d4;
				--hover-color:#b37dff;
				--gradone:#9a42ff;
				--gradtwo:#c5a2ff;
				--text-wht:#ffffff;
				--border-bottom:#ffffff;
				--border:#9a42ff;
				--dk-txt:#9100ff;
}
html[data-theme='dark']{
				--bg:#101010;
				--text-color:#9552e2;
				--para-color:#2b2b2b;
				--top-color:#9552e2;
				--menu-color:#8146d4;
				--hover-color:#b37dff;
				--gradone:#9a42ff;
				--gradtwo:#101010;
				--text-wht:#101010;
				--border-bottom:#ffffff;
				--border:#9a42ff;
				--dk-txt:#bf5dff;
}
*{
				margin:0px;
				padding:0px;
				box-sizing:border-box;
}
body{
				margin:0px;
				background:var(--bg);
				padding:0px;
				font-family: 'Raleway', sans-serif;
}

/* Top Fix */
.top{
				width:100%;
				margin:0px;
				padding:0px;
				background-color:var(--top-color);
				text-align:center;
				position:fixed;
}
.top ul{
				display:inline-flex;
				list-style:none;
				color:var(--text-wht);
				
}
.top ul li{
				padding:8px;
				margin:8px;
				width:72px;
}
.top ul li a{
				text-decoration:none;
				color:var(--text-wht);
}
.active, .top ul li:hover{
				background: var(--hover-color) ;
				border-radius:3px;
}
.active .fa{
				margin-right:3px;
}
.list1{
				display:none;
}
 .top ul li:hover .list1{
				display:block;
				position: absolute;
				background:var(--menu-color);
				margin-top:17px;
				margin-left:-7px;
				border-radius:3px;
}
.top ul li:hover .list1 ul{
				display:block;
				margin:7px;
}
.top ul li:hover .list1 ul li{
				width:80px;
				padding:4px;
				border-bottom:1px solid var(--border-bottom);
				background:transprant;
				border-radius:0;
				text-align:center;
}
.top ul li:hover .list1 ul li:last-child{
				border-bottom:none;
}


/* body */
.para1{
				background: var(--para-color);
				border-radius:15px;
				margin:30px;
				padding:6px;
				padding-top:20px;
			  padding-bottom:20px;		
}
#pole{
				width:90%;
				height:40px;
				margin:8px;
				background:none;
				outline:none;
				border:2px solid var(--border);
				border-radius:5px;
				color:#9a42ff;
				font-family: 'Raleway', sans-serif;
				font-weight:bold;
}
/* footer */
footer{
				background-image: linear-gradient(to bottom, var(--gradone) , var(--gradtwo));
				text-align:center;
				padding:60px;
				height:300px;
}
footer a{
				text-decoration:none;
				color:var(--text-wht);
				height:60px;
}

/* Dk */
input[type=checkbox]{
	height: 0;
	width: 0;
	visibility: hidden;
}

label {
	cursor: pointer;
	text-indent: -9999px;
	width: 52px;
	height: 27px;
	background:#ca74ff;
	float: right;
	border-radius: 100px;
	position: relative;
}

label:after {
	content: '';
	position: absolute;
	top: 3px;
	left: 3px;
	width: 20px;
	height: 20px;
	background: white;
	border-radius: 90px;
	transition: 0.3s;
}

input:checked + label {
	background: #9100ff;
}

input:checked + label:after {
	left: calc(100% - 5px);
	transform: translateX(-100%);
}

label:active:after {
	width: 45px;
}

html.transition,
html.transition *,
html.transition *:before,
html.transition *:after {
  transition: all 1000ms !important;
  transition-delay: 0 !important;
}
/* Dk algn */
aside{
				text-align:right;
				padding:10px;
				padding-bottom:18px;
				border:1px solid #a700ff;
				border-radius:10px;
				margin-right:30px;
				margin-left:750px;
}
#dk{
				font-family: 'Raleway', sans-serif;
				font-weight:bold;
				color: var(--dk-txt);
}
</style>
</head>
<body>
<div class="top">
<ul>
<li class="active"><a>Home</a></li>
<li><a>Projects </a>
<div class="list1">
<ul>
 <li><a href="csspjs.html">HTML-CSS</a></li>
 <li><a href="jspro.html">HTML-JavaScript</a></li>
</ul>
</div>
</li>
<li><a>Contact </a>
<div class="list1">
<ul>
 <li><a href="https://www.youtube.com/channel/UCEn4JEZZSE0Bmjyu5sQFtRw">YouTube</a></li>
 <li><a href="pranav24rajeevan@gmail.com">E-mail</a></li>
 <li><a href="tel:+918657387331">Mobile</a></li>
</ul>
</div>
</li>
</ul>
</div>
<br><br><br><br>
<aside>
<p id="dk">Light/Dark Theme</p>
<div class="toggle-container">
<input type="checkbox" id="switch" name="theme" /><label for="switch"></label>
</div>    
</aside><br>
<article>
<center>
<br>
<p><h1 style=" color:var(--text-color); " >Pranav's edu Tec</h1></p>
<br>
<p class="para1"><b style="color:#9a42ff;">Welcome to Pranav's edu Tec's Web-Portal.<br>Here you will be able to access  my Webpage(s) & Website(s) Made & Designed by us.</p>
<img src="edu_ilastration.png" width="60%">
<br>
<br>
<p class="para1"><b style="color:var(--text-color);">
<u>Our Projects</u><br><br><br>
HTML-CSS<br>
<a href=""><button id="pole">Here</button></a>
<br><br>HTML-CSS-JAVASCRIPT</b>
<a href=""><button id="pole">Here</button></a>
</p>
<br><br>
<p class="para1"><b style="color:#9a42ff;">
Simple Website Source Code (programs)<br><br>For Html Codes for your IT Practicals Visit this Site. It contains Simple but Fulfilled Web Programs.
</b>
<a href="http://practicalshub.com/category/it/page/3/"><button id="pole">Click Here</button></a></p>

<br><br>
<p class="para1"><b>Ratings<br><br>If you like it then please fill this rating form and give your Likes to us.<br>Also give us your precious feedback.</b><br><br>
<iframe width="640px" height= "480px" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAANAAREHlMdURTFISTJFNkpNSVIxTDcyUVZMV09HRjI3Si4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border:var(--text-color) 1px solid ;  border-radius:15px; max-width:100%; max-height:100vh;" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe></p>
<br><br>

</center>
</article>

<footer>
<p>
<a href="">Disclaimer</a><br><br>
<a href="">About Us</a><br><br>
<a href="tel:+918657387331"> Call us </a>
<br>
<br>
<a href=mailto:"pranav24rajeevan@gmail.com"> Send us an email!</a>
</p>
</footer>
</body>
<script type="text/javascript">
        var checkbox = document.querySelector('input[name=theme]');

        checkbox.addEventListener('change', function() {
            if(this.checked) {
                trans()
                document.documentElement.setAttribute('data-theme', 'dark')
            } else {
                trans()
                document.documentElement.setAttribute('data-theme', 'light')
            }
        })

        let trans = () => {
            document.documentElement.classList.add('transition');
            window.setTimeout(() => {
                document.documentElement.classList.remove('transition')
            }, 2000)
        }
</script>
</html>
