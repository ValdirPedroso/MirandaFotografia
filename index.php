<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Miranda Fotografia</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>


<script type="text/javascript">
//@amats script do slide
function setaImagem(){
    var settings = {
        primeiraImg: function(){
            elemento = document.querySelector("#slider a:first-child");
            elemento.classList.add("ativo");
            this.legenda(elemento);
        },
 
        slide: function(){
            elemento = document.querySelector(".ativo");
 
            if(elemento.nextElementSibling){
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }
 
        },
 
        proximo: function(){
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");
 
            if(elemento.nextElementSibling){
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }
            intervalo = setInterval(settings.slide,4000);
        },
 
        anterior: function(){
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");
 
            if(elemento.previousElementSibling){
                elemento.previousElementSibling.classList.add("ativo");
                settings.legenda(elemento.previousElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");						
                elemento = document.querySelector("a:last-child");
                elemento.classList.add("ativo");
                this.legenda(elemento);
            }
            intervalo = setInterval(settings.slide,4000);
        },
 
        legenda: function(obj){
            var legenda = obj.querySelector("img").getAttribute("alt");
            document.querySelector("figcaption").innerHTML = legenda;
        }
 
    }
 
    //@amats chama o slide
    settings.primeiraImg();
 
    //@amats chama a legenda
    settings.legenda(elemento);
 
    //@amats chama o slide à um determinado tempo
    var intervalo = setInterval(settings.slide,4000);
    document.querySelector(".next").addEventListener("click",settings.proximo,false);
    document.querySelector(".prev").addEventListener("click",settings.anterior,false);
}
window.addEventListener("load",setaImagem,false);
</script>


<body>

	<div id="header">
		<?php include("view/logo.php"); ?>
		<?php include("view/navigation.php"); ?>
	</div>
	<div class="box-slide">
		<?php include("view/slide.php"); ?>
	</div>
	<div id="adbox">
		<div>
			<div>
				<h1>Lorem Ipsum Dolor</h1>
				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text.
				</p>
				<p>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
				</p>
				<p>
					If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forum</a>.
				</p>
				<a href="index.html" class="more">Read more!</a>
			</div>
		</div>
	</div>
	<div id="body">
		<div id="main">
			<h2><span>&#8220; This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free &#8221;.</span></h2>
			<p>
				This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forum</a>.
			</p>
		</div>
		<div id="articles">
			<ul>
				<li>
					<img src="images/biker.jpg" alt="Img">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisi risus, iaculis vitae imperdiet et, ultrices non elit. Aliquam est purus, tristique dictum
					</p>
					<a href="blog.html" class="more">Read more >></a>
				</li>
				<li>
					<img src="images/biker2.jpg" alt="Img">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisi risus, iaculis vitae imperdiet et, ultrices non elit. Aliquam est purus, tristique dictum
					</p>
					<a href="blog.html" class="more">Read more >></a>
				</li>
				<li>
					<img src="images/biker3.jpg" alt="Img">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisi risus, iaculis vitae imperdiet et, ultrices non elit. Aliquam est purus, tristique dictum
					</p>
					<a href="blog.html" class="more">Read more >></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<ul id="connect">
			<li>
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook" title="Facebook"></a>
			</li>
			<li>
				<a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter" title="Twitter"></a>
			</li>
			<li>
				<a href="http://freewebsitetemplates.com/go/youtube/" target="_blank" class="vimeo" title="Vimeo"></a>
			</li>
			<li>
				<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus" title="Google+"></a>
			</li>
		</ul>
		<div id="footnote">
			<ul>
				<li class="active">
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
				<li>
					<a href="index.html">Gallery</a>
				</li>
			</ul>
			<span>&copy; Copyright &copy; 2011. Company name all rights reserved.</span>
		</div>
	</div>
</body>
</html>