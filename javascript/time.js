function onClickMenu(){
	document.getElementById("menu").classList.toggle("change");
	document.getElementById("nav").classList.toggle("change");
	
	document.getElementById("menu-bg").classList.toggle("change-bg");
}

function startTime(){
	var today=new Date();
	var h=today.getHours();
	var ampm=h>=12?'PM':'AM';
	h=h%12;
	h=h?h:12;
	var m=today.getMinutes();
	var s=today.getSeconds();
	var weekday=new Array(7);
	weekday[0]="Sunday";
	weekday[1]="Monday";
	weekday[2]="Tuesday";
	weekday[3]="Wednesday";
	weekday[4]="Thursday";
	weekday[5]="Friday";
	weekday[6]="Saturday";
	var day=weekday[today.getDay()];
	var date=day+" "+","+" "+today.getDate()+"-"+(today.getMonth()+1)+"-"+today.getFullYear();
	m=checkTime(m);
	s=checkTime(s);
	document.getElementById("clock").innerHTML=h+":"+m+":"+s+" "+ampm+" "+","+" "+date;
	var t=setTimeout(startTime,1000);
	}
	
function checkTime(i){
	if(i<10){i="0"+i};      //add zero in front of numbers less than 10
	return i;
}
