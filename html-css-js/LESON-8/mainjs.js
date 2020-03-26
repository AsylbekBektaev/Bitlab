

//NASHALO PRACTICI
//ZADANYE-2 variant-1
// function ff (data,n) {
// 	var text="";
//  	var dat= document.getElementById("data").value;
//  	var n=document.getElementById("n").value;
// 	 var par = JSON.parse('['+document.getElementById("data").value+']');
// 	 for(var i=0;i<par.length;i++){
// 	 	if(n==par[i]){
//       		text+=i;
// 	 	}
// 	 }

// 	 document.getElementById("iii").innerHTML=text;


// }
//ZADANYE-2 variant-2
// function ff (){
// 	var data=document.getElementById("data").value;
// 	var n=document.getElementById("n").value;
// 	var mas=JSON.parse('['+data+']');
// 	var res=fun(mas,n);
// 	document.getElementById("iii").innerHTML=res;
// }

// function fun (a,b){
// 	var resss="";
// 	for(var i=0;i<a.length;i++){
// 		if(b==a[i]){
// 			resss+=i;
// 			console.log(i);
// 		}
// 	}
// 	return resss;
// }


//ZADANYE-3
//variant -1
// function Obratca (){
// 	var text="";
// 	var mas=JSON.parse('['+document.getElementById("data2").value+']');
// 	mas.reverse();
// 	for(var i=0;i<mas.length;i++){
// 		text+=mas[i];
// 	}
// 	document.getElementById("i2").innerHTML=text;
// }
//          VARIANT-2
// function Obratca2 (){
// 	var mas=JSON.parse('['+document.getElementById("data2").value+']');
// 	var fun=GGG(mas);
// 	document.getElementById("i2").innerHTML=fun;
// }
// function GGG (a){
// 	var text="";
// 	a.reverse();
// 	for(var i=0;i<a.length;i++){
// 		text+=a[i];
// 	}
// 	return text;
// }




//ZADANYE - 4
// function Glav (){
// let divv=document.getElementById('divv').value;
// let login1=document.getElementById("login").value;
// let pas1=document.getElementById("password").value;
// let bt1=document.getElementById("bt").value;
// 	for(var i=0;i<massivshik.length;i++){
// 		if(login1==massivshik[i].Login && pas1==massivshik[i].paswo){
// 			tr=true;
// 			document.getElementById("divv").innerHTML='<h1>GGGGGGGG</h1>';

// 		}
// 	}
// 	console.log(tr);

// 	if(tr==false){
// 	document.getElementById("login").style.border='red solid 3px';
// 	document.getElementById("password").style.border='red solid 3px';
// 	document.getElementById("bt").style.backgroundColor='red ';
// 	}
// }

//ZADANYE--5
// var massnews =[
// ["ЗАГОЛОВОК-1","ПОД ЗАГОЛОВОК-1","At 16.12.2011 14:35","DETAILS-1"],
// ["ЗАГОЛОВОК-2","ПОД ЗАГОЛОВОК-2","At 16.12.2012 14:35","DETAILS-2"],
// ["ЗАГОЛОВОК-3","ПОД ЗАГОЛОВОК-3","At 16.12.2013 14:35","DETAILS-3"],
// ["ЗАГОЛОВОК-4","ПОД ЗАГОЛОВОК-4","At 16.12.2014 14:35","DETAILS-4"],
// ["ЗАГОЛОВОК-5","ПОД ЗАГОЛОВОК-5","At 16.12.2015 14:35","DETAILS-5"],
// ["ЗАГОЛОВОК-6","ПОД ЗАГОЛОВОК-6","At 16.12.2016 14:35","DETAILS-6"],
// ["ЗАГОЛОВОК-7","ПОД ЗАГОЛОВОК-7","At 16.12.2017 14:35","DETAILS-7"],
// ["ЗАГОЛОВОК-8","ПОД ЗАГОЛОВОК-8","At 16.12.2018 14:35","DETAILS-8"],
// ["ЗАГОЛОВОК-9","ПОД ЗАГОЛОВОК-9","At 16.12.2019 14:35","DETAILS-9"],
// ["ЗАГОЛОВОК-10","ПОД ЗАГОЛОВОК-10","At 16.12.2020 14:35","DETAILS-10"],
// ["ЗАГОЛОВОК-11","ПОД ЗАГОЛОВОК-11","At 16.12.2021 14:35","DETAILS-11"],
// ["ЗАГОЛОВОК-12","ПОД ЗАГОЛОВОК-12","At 16.12.2022 14:35","DETAILS-12"],
// ["ЗАГОЛОВОК-13","ПОД ЗАГОЛОВОК-13","At 16.12.2023 14:35","DETAILS-13"],
// ["ЗАГОЛОВОК-14","ПОД ЗАГОЛОВОК-14","At 16.12.2024 14:35","DETAILS-14"],
// ["ЗАГОЛОВОК-15","ПОД ЗАГОЛОВОК-15","At 16.12.2025 14:35","DETAILS-15"]
// ];
// let shetshik=0;
// function NEWS(){
// 	let resultat="";
// 	for(let i=0;i<3 && i+shetshik<massnews.length;i++){
// 		resultat+="<h2>"+massnews[i + shetshik][0]+"</h2>";
// 		resultat+=" "+massnews[i+shetshik][1]+"<br>";
// 		resultat+=" "+massnews[i+shetshik][2]+"<br>";
// 		resultat+="<a> "+massnews[i+shetshik][3]+"</a><br>";
// 	}
// 	shetshik+=3;
// 	let NEWS=document.getElementById("DDD").innerHTML;
// 	document.getElementById("DDD").innerHTML=NEWS+resultat;
// }


////KONEC PRACTICI


//DOM RABOTA NASHALO

//ZADANYE -1
// function plus(){
// let pl=Number(document.getElementById('shet').innerHTML);
// document.getElementById('shet').innerHTML=pl+1;
// }
// function minus(){
// 	let mn=Number(document.getElementById('shet').innerHTML);
// document.getElementById('shet').innerHTML=mn-1;
// }



//ZADANYE-2
///ZADANYE -2
// let MMM=[
// {"carddd":"4444444444444444","name33":"ns4","cvvd":"444"},
// {"carddd":"7777777777777777","name33":"ns7","cvvd":"777"}
// ];
// let tr=false;

// function BUT(){
// 	let cr=document.getElementById("card1").value+document.getElementById("card2").value+document.getElementById("card3").value+document.getElementById("card4").value;
// 	console.log(cr);
// 	let cvv=document.getElementById("CVV").value;
// 	console.log(cvv);
// 	let name22=document.getElementById("name").value;
	
// 	for(let i=0;i<MMM.length;i++){
// 		if(cr==MMM[i].carddd && cvv==MMM[i].cvvd && name22==MMM[i].name33){
// 			tr=true;
// 			document.getElementById("DEF").innerHTML="<h1>Transaction completed</h1>";

// 		}
// 	}
// 	if(tr==false){
// 		document.getElementById("DEF").innerHTML="<h1>Invalid Data</h1>";
// 	}

// 	}

/////DOM RABOTA KONEC









































