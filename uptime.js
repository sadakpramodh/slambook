

//set the resolution info div's position(topright,topleft,bottomright,bottomleft,topcenter,bottomcenter)  
var corner = "topleft";

var rTimer;
var sTime;
var eTime;
var duration;
var ele;			
var dSec  =0;
var dMin  =0;
var dHrs  =0;
var wid  = screen.width;
var hght = screen.height;

var os;
if(document.layers)
 os = "n4";
else if(document.getElementById&&!document.all)
 os = "n6";
else if(document.all)
 os = "ie";

sTime =  new Date();
sHrs  = sTime.getHours();
sMin  = sTime.getMinutes();
sSec  = sTime.getSeconds();
document.write("<div id=ddd style=\"  text-align:center; visibility:visible; top: 5px; left:5px; color:white; font-family:sans-serif;  font-size:11; font-weight:bold; width:145px;\"><input id=dur type=text style=\" border:0px; text-align:center; cursor:pointer;  color:white; font-family: sans-serif; font-size:11; border-color:green; font-weight:bold\"></div>");
if(os == "ie"){
   pwidth = window.document.body.offsetWidth;
   pheight = window.document.body.offsetHeight;
   stop = document.body.scrollTop;
   sleft = document.body.scrollLeft;
}else{
   pwidth = window.innerWidth;
   pheight = window.innerHeight;
   stop = window.pageYOffset;
   sleft = window.pageXOffset;
}

calculateDuration();

function calculateDuration()
{
	eTime =  new Date();
	eHrs  = eTime.getHours();
	eMin  = eTime.getMinutes();
	eSec  = eTime.getSeconds();
	if(eSec<sSec)
	{
		eSec +=60;
		eMin--;
	}
	if(eMin<sMin)
	{
		eMin +=60;
		eHrs--;
	}
	if(eHrs<sHrs)
	{
		eHrs +=24;
	}
	dSec  = eSec - sSec;
	dMin  = eMin - sMin;
	dHrs  = eHrs - sHrs;
	if(dSec<=9)
		dSec = '0'+	dSec;
	if(dMin<=9)
		dMin = '0'+	dMin;
	if(dHrs<=9)
		dHrs = '0'+	dHrs;
	ele = document.getElementById('dur');
	ele.value = dHrs+":"+dMin+":"+dSec;
	
	if(rTimer)
		{
			clearTimeout(rTimer);
		}

	rTimer = setTimeout('calculateDuration()', 100);

}	

