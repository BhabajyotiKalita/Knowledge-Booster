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
	document.getElementById("clock").innerHTML=h+":"+m+":"+s+" "+ampm;
	document.getElementById("date").innerHTML=date;
	var t=setTimeout(startTime,1000);
	}
	
function checkTime(i){
	if(i<10){i="0"+i};      //add zero in front of numbers less than 10
	return i;
}


window.addEventListener('scroll',function(){
	var scroll=document.querySelector('.scrollTop');
	scroll.classList.toggle("active" , window.scrollY > 300)
})


function scrollToTop(){
		document.body.scrollTop=0;
		behavior:'smooth'
}


function mySearchFunction(){
	document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction(){
	var input,filter,ul,a,i;
	input=document.getElementById("myInput");
	filter=input.value.toUpperCase();
	div=document.getElementById("myDropdown");
	a=div.getElementsByTagName("a");
	for(i=0 ; i<a.length ; i++){
		txtValue= a[i].textContent || a[i].innerText;
		if(txtValue.toUpperCase().indexOf(filter) > -1){
			a[i].style.display="";
		}
		else{
			a[i].style.display="none";
		}
	}
}



/*
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("dfncpost").style="display:none";
*/



function comp(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
document.getElementById("comphead").style="display:block";
document.getElementById("comppost").style="display:block";
}

function tense(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
document.getElementById("tensehead").style="display:block";
document.getElementById("tensepost").style="display:block";
}

function voice(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
document.getElementById("voicehead").style="display:block";
document.getElementById("voicepost").style="display:block";
}

function genawe(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("genawehead").style="display:block";
document.getElementById("genawepost").style="display:block";
}

function sports(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
document.getElementById("sportshead").style="display:block";
document.getElementById("sportspost").style="display:block";
}

function maths(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
document.getElementById("mathshead").style="display:block";
document.getElementById("mathspost").style="display:block";
}

function stats(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
document.getElementById("statshead").style="display:block";
document.getElementById("statspost").style="display:block";
}

function evs(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
document.getElementById("evshead").style="display:block";
document.getElementById("evspost").style="display:block";
}

function eco(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
document.getElementById("ecohead").style="display:block";
document.getElementById("ecopost").style="display:block";
}

function phy(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
document.getElementById("phyhead").style="display:block";
document.getElementById("phypost").style="display:block";
}

function chem(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
document.getElementById("chemhead").style="display:block";
document.getElementById("chempost").style="display:block";
}

function bio(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
document.getElementById("biohead").style="display:block";
document.getElementById("biopost").style="display:block";
}

function sscrlwy(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("sscrlwyhead").style="display:block";
document.getElementById("tensepost").style="display:block";
document.getElementById("voicepost").style="display:block";
document.getElementById("comppost").style="display:block";
document.getElementById("genawepost").style="display:block";
document.getElementById("sportspost").style="display:block";
document.getElementById("mathspost").style="display:block";
document.getElementById("statspost").style="display:block";
document.getElementById("evspost").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phypost").style="display:block";
document.getElementById("chempost").style="display:block";
document.getElementById("biopost").style="display:block";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
}

function med(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:block";
document.getElementById("tensepost").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathspost").style="display:none";
document.getElementById("statspost").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phypost").style="display:block";
document.getElementById("chempost").style="display:block";
document.getElementById("biopost").style="display:block";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
}

function engi(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("genawepost").style="display:none";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathspost").style="display:block";
document.getElementById("statspost").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phypost").style="display:block";
document.getElementById("chempost").style="display:block";
document.getElementById("biopost").style="display:none";
document.getElementById("engihead").style="display:block";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:none";
document.getElementById("dfncpost").style="display:none";
}

function bank(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:block";
document.getElementById("dfnchead").style="display:none";
document.getElementById("tensepost").style="display:none";
document.getElementById("voicepost").style="display:none";
document.getElementById("comppost").style="display:none";
document.getElementById("genawepost").style="display:block";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathspost").style="display:block";
document.getElementById("statspost").style="display:block";
document.getElementById("evspost").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("dfncpost").style="display:none";
}

function dfnc(){
document.body.scrollTop=0;
document.getElementById("welpost").style="display:none";
document.getElementById("welcome").style="display:none";
document.getElementById("comphead").style="display:none";
document.getElementById("tensehead").style="display:none";
document.getElementById("voicehead").style="display:none";
document.getElementById("genawehead").style="display:none";
document.getElementById("sportshead").style="display:none";
document.getElementById("mathshead").style="display:none";
document.getElementById("statshead").style="display:none";
document.getElementById("evshead").style="display:none";
document.getElementById("ecohead").style="display:none";
document.getElementById("phyhead").style="display:none";
document.getElementById("chemhead").style="display:none";
document.getElementById("biohead").style="display:none";
document.getElementById("sscrlwyhead").style="display:none";
document.getElementById("medhead").style="display:none";
document.getElementById("engihead").style="display:none";
document.getElementById("bankhead").style="display:none";
document.getElementById("dfnchead").style="display:block";
document.getElementById("tensepost").style="display:block";
document.getElementById("voicepost").style="display:block";
document.getElementById("comppost").style="display:none";
document.getElementById("genawepost").style="display:block";
document.getElementById("sportspost").style="display:none";
document.getElementById("mathspost").style="display:block";
document.getElementById("statspost").style="display:none";
document.getElementById("evspost").style="display:none";
document.getElementById("ecopost").style="display:none";
document.getElementById("phypost").style="display:none";
document.getElementById("chempost").style="display:none";
document.getElementById("biopost").style="display:none";
document.getElementById("dfncpost").style="display:block";
}