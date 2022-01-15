var count = 1;

function next(){
  if (count == 4){
    count =1;
  }
  else{
    count++;
  }
  document.getElementById("img").src="images/"+count+".png";

}

function prev(){
 if (count == 1){
   count =4;
 }
 else{
   count--;
}
  document.getElementById("img").src="images/"+count+".png";

}
setInterval(next,2000);




function messege(){
if (!document.getElementById('autowrit').style.color)
	{
  document.getElementById('autowrit').style.color="red";
	}

if (document.getElementById('autowrit').style.color=="red")
	{
	document.getElementById('autowrit').style.color="green";
	}
else {
  	document.getElementById('autowrit').style.color="red";
}

timer=setTimeout("messege()",100);
}

function menu(){
if (!document.getElementById('bar').style.color)
	{
  document.getElementById('bar').style.color="orange";
	}

if (document.getElementById('bar').style.color=="orange")
	{
	document.getElementById('bar').style.color="blue";
	}
else {
  	document.getElementById('bar').style.color="orange";
}

timer=setTimeout("menu()",100);
}

function menu1(){
if (!document.getElementById('bar1').style.color)
	{
  document.getElementById('bar1').style.color="yellow";
	}

if (document.getElementById('bar1').style.color=="yellow")
	{
	document.getElementById('bar1').style.color="purple";
	}
else {
  	document.getElementById('bar1').style.color="yellow";
}

timer=setTimeout("menu1()",100);
}

function menu2(){
if (!document.getElementById('bar2').style.color)
	{
  document.getElementById('bar2').style.color="blue";
	}

if (document.getElementById('bar2').style.color=="blue")
	{
	document.getElementById('bar2').style.color="orange";
	}
else {
  	document.getElementById('bar2').style.color="blue";
}

timer=setTimeout("menu2()",100);
}

function menu3(){
if (!document.getElementById('bar3').style.color)
	{
  document.getElementById('bar3').style.color="yellow";
	}

if (document.getElementById('bar3').style.color=="yellow")
	{
	document.getElementById('bar3').style.color="purple";
	}
else {
  	document.getElementById('bar3').style.color="yellow";
}

timer=setTimeout("menu3()",100);
}

function menu4(){
if (!document.getElementById('bar4').style.color)
	{
  document.getElementById('bar4').style.color="blue";
	}

if (document.getElementById('bar4').style.color=="blue")
	{
	document.getElementById('bar4').style.color="orange";
	}
else {
  	document.getElementById('bar4').style.color="blue";
}
timer=setTimeout("menu4()",100);
}


function menu5(){
if (!document.getElementById('bar5').style.color)
	{
  document.getElementById('bar5').style.color="yellow";
	}

if (document.getElementById('bar5').style.color=="yellow")
	{
	document.getElementById('bar5').style.color="purple";
	}
else {
  	document.getElementById('bar5').style.color="yellow";
}

timer=setTimeout("menu5()",100);
}

function run (){
  messege();
  menu();
  menu1();
  menu2();
  menu3();
  menu4();
  menu5();
}
