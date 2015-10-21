<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PreperationZone</title>
<link href="css/intropage.css"  rel = "stylesheet" type = "text/css"/>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script>
var currslide=1;
function setheight(){
	//bodyheight=$("#bodyid").height();
	bodyheight=$(window).height();
	bodywidth=$(window).width();
	$("#mainbody").width(bodywidth).height(bodyheight);
	//$("#mainpic").height(bodyheight);
	$(".pics").width(bodywidth);
	
	//alert(bodyheight);
}
function changeslide(from, to){
	temp="#slide"+from;
	temp2="#slide"+to;
	//$(".mainpicdiv").css("opacity","0");
	//$("#slide1").animate({'opacity','0'},'slow');
   	
	$(temp).animate({opacity:'0'},800,function(){	$(temp).hide();});
	$(temp2).show();	
	$(temp2).animate({opacity:'1'},800);
	//alert('agah');
	//$(temp).show();

    	//$(temp).animate({opacity:'1'},600);
	
}
function switchslide(){

}
function setcirclesheight(){
	var cw = $('.circlebg').width();
	$('.circlebg').css({'height':cw+'px'});
}
$(window).resize(function() {
    setheight();
    setcirclesheight();
});
//$(document).ready(function(){	
	//changeslide(currslide);
	//setcirclesheight();
	/*$("#pained").click(function(){
	  	$("#test").animate({
			left:'250px',
			opacity:'0.5',
			height:'150px',
			width:'150px'
  		});
	});
	$("button").click(function(){
	    $("div").animate({
		      left:'250px',
		      opacity:'0.5',
		      height:'150px',
		      width:'150px'
	    	});
  	});
});*/
$(document).ready(function(){
  $(".glidebutton").click(function(){
    changeslide(currslide++,currslide);
  });
  $(".backbutton").click(function(){
  	if (currslide!=1)
    		{changeslide(currslide--,currslide);};
  });
  
  $(".mainpicdiv").hide();
  $("#slide1").show();
});
</script>
</head>
<body id="bodyid" onload="setheight()" style="overflow:hidden; margin:0px; background-color:#000000">
       <div id="mainbody" style="width:100%; height:100%; position:absolute">
              <div id="slide1" class="mainpicdiv" style=" background-image:url(img/p1.jpg); opacity:1">
                    <button id="pained" class="glidebutton" style="top:70%; left:2%; position:relative">That's sad...!</button>
              </div>
              <div id="slide2" class="mainpicdiv" style=" background-image:url(img/p2.jpg); opacity:0">
                     <button id="pained" class="glidebutton" style="top:70%; left:68%; position:relative" >I guess I am lucky</button>
              </div>
              <div id="slide3" class="mainpicdiv" style=" background-image:url(img/p3.jpg); opacity:0">
                     <button id="pained" class="glidebutton" style="top:72%; left:71%; position:relative">Let's see</button>
              </div>
		<div id="slide4" class="mainpicdiv" style=" background-image:url(img/p4.jpg); opacity:0">
                     <button id="pained" class="glidebutton" style="top:60%; left:65%; position:relative">Go on</button>
              </div>
		<div id="slide5" class="mainpicdiv" style=" background-image:url(img/p5.jpg); opacity:0">
                     <button id="pained" class="glidebutton" style="top:70%; left:60%; position:relative">How can I do ?</button>
              </div>
              <div id="slide6" class="mainpicdiv" style=" background-image:url(img/p6.jpg); opacity:0">
                     <button id="pained" class="glidebutton" style="top:80%; left:1%; position:relative">Can you give me an Example</button>
              </div>
              <div id="slide7" class="mainpicdiv" style=" background-image:url(img/p7.jpg); opacity:0">
                     <button id="pained" class="glidebutton" style="top:75%; left:1%; position:relative">nice...!</button>
              </div>
              <div id="slide8" class="mainpicdiv" style=" background-image:url(img/p8.jpg); opacity:0">
                     <button id="pained" class="glidebutton" style="top:26%; left:31%; position:relative">oh...!</button>
              </div>
              <div id="slide9" class="mainpicdiv" style=" background-image:url(img/p9.jpg); opacity:0">
                     <button id="pained" class="glidebutton" style="top:70%; left:75%; position:relative">Who are we?</button>
              </div>
              <div id="slide10" class="mainpicdiv" style=" background-image:url(img/p10.jpg); opacity:0">
                     <button id="pained" class="glidebutton" style="top:80%; left:1%; position:relative">Thats great..1</button>
              </div>
              <div id="slide11" class="mainpicdiv" style=" background-image:url(img/p11.jpg); opacity:0">
                     <button id="pained" class="glidebutton" style="top:80%; left:47%; position:relative">Who are you?</button>
              </div>
             <div id="slide12" class="mainpicdiv" style=" background-image:url(img/p12.jpg); opacity:0">
                   <a href="https://www.facebook.com/wethechangemission">
                   	<button id="pained" class="sharebutton" style="top:65%; left:62%; position:relative; background-image:url(img/facebook-logo-300x90.jpg)"></button>
                   </a>
              </div>
             
             <div id="bottombarbg"></div>
             <div id="bottombar">
                     <div  class="termsbox">
                            <a href="terms.php" class="bottomlinks">terms</a><a  class="bottomlinks " href="privacy.php"> / privacy</a>
                     </div>
                     <button style="position:absolute; left:0" class="backbutton">< back</button>
              </div>
              <div class="termstab">Terms</div>
              
       </div>
</body>
</html>