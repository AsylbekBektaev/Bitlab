

//ZADANYE --1 
//rabotaet
// var n1=Number(prompt('NNNNN'));
// var text='';
// var mas=[];

// for(i=0;i<n1;i++){
//  mas.push(prompt('number'));
// }
// mas.reverse();
// for(var i=0;i<n1;i++){
// 	text+=mas[i]+' ';
// }
// alert(text);




//ZADANYE--2
//rabotaet
// var n2=prompt('NNNNN');
// var mas=[];
// var max=Number.MIN_SAFE_INTEGER;
// for(i=0;i<n2;i++){
// 	mas.push(prompt('Number'));
//   if(max<mas[i]){
//   	max=mas[i];
//   }
// }
// alert(max);



//  ZADANYE--3
//rabotaet
// var n3=prompt('NNNNN');
// var mas=[];
// var sum=0;
// for(i=0;i<n3;i++){
// 	mas.push(Number(prompt('Number'));
//  sum+=mas[i];
// }
// alert(sum+'\n'+sum/n1);



//ZADANYE-4 
//rabotaet
// var n4=prompt('NNNNN');
// var text='';
// var mas=[];
// for(i=0;i<n4;i++){
// 	mas.push(prompt('Number'));
//  text+=mas[i]*mas[i];
// }
// alert(text);



//ZADANYE-5
//rabotaet
// var logo=prompt("LOGIN");
// var pass=prompt("PASSWORD");
// var shet=false;
// var users = [
// {"login":"log1","password":"pas1"},
// {"login":"log2","password":"pas2"},
// {"login":"log3","password":"pas3"},
// {"login":"log4","password":"pas4"},
// {"login":"log5","password":"pas5"}
// ];
// 	for(var i=0;i<users.length;i++){
// 	if(logo==users[i]["login"] && pass==users[i]["password"]){
// 		var shet=true;
// 		alert("Welcome, you are authenticated");
// 	}
// 	}
// 	if(shet=false){
//      alert("User not found");
// 	}


	

// ZADANYE -6
//rabotaet
// var Searh=prompt("BOOK?");
// var masbook=[
//    {"Name":"Book1","Autor":"Autor1","ISBN":"123","Price":"50$"},
//    {"Name":"Book2","Autor":"Autor2","ISBN":"456","Price":"150$"},
//    {"Name":"Book3","Autor":"Autor3","ISBN":"789","Price":"250$"},
//    {"Name":"Book4","Autor":"Autor4","ISBN":"987","Price":"350$"},
//    {"Name":"Book5","Autor":"Autor5","ISBN":"654","Price":"450$"}
//  ];
  
//   for(var i=0;i<masbook.length;i++){
//      if(Searh==masbook[i].Name ){
//       alert(masbook[i].Name+' '+masbook[i].Autor+' '+masbook[i].ISBN+' '+masbook[i].Price);
//      }
//   }

  //практика конец

//DOM RABOTA NASHALO


//ZADANYE-1 rabotaet
//rabotaet
// var raz=prompt("NUMBER-RAZ");
// var text="";
// var bb=true;
// var massiv=[];
// for(var i=0;i<raz;i++){
// 	massiv.push(Number(prompt("NUUM")));
// }
// var m=prompt("NUMER-M");
// for(var i=0;i<massiv.length;i++){
// 	if(m==massiv[i]){
// 		var bb=false;
// 		text+="YES"+' '+i;
// 		alert(text);
// 	}
// }
// if(bb==true){
// 	alert("NO")
// }


//ZADANYE-3
//?????????????????? ne reweno
// var text="";
// var msk=[];
// do{
//   var n=Number(prompt("KKK"));
//   if(n!=0){
//     msk.push(n);
//   }
// }while(n!=0);
// for(var i=0;i<msk.length;i++){
//   text+=msk[i];
// }
// alert(text);


//ZADANYE-4
//rabotaet
// var n=prompt("SHISLO");
// mass=[];
// var text=1;
// var tr=true;
// for(var i=0;i<n;i++){
//   mass.push(prompt("SHISLO-2222"));
// }
// for(var i=0;i<mass.length;i++){
//   if(mass[i]!=0){
//     text*=mass[i];
//   }
// }
// alert(text);

//ZADANYE-5
//rabotaet no est voprosy!!!!!!!!
var massk=[// имя, год выпуска, объем двигателя и цена
  {"NAME":"Auto1","YEAR":"2000"," VOLUME":"1.4","PRICE":"1000000"},
  {"NAME":"Auto2","YEAR":"2001","VOLUME ":"1.8","PRICE":"2000000"},
  {"NAME":"Auto3","YEAR":"2002"," VOLUME":"2.0","PRICE":"3000000"},
  {"NAME":"Auto1","YEAR":"2003"," VOLUME":"2.2","PRICE":"4000000"},
  {"NAME":"Auto2","YEAR":"2004"," VOLUME":"2.4","PRICE":"5000000"},
  {"NAME":"Auto3","YEAR":"2005"," VOLUME":"2.6","PRICE":"6000000"},
  {"NAME":"Auto1","YEAR":"2006"," VOLUME":"2.8","PRICE":"7000000"},
   {"NAME":"Auto2","YEAR":"2007"," VOLUME":"3.0","PRICE":"8000000"},
    {"NAME":"Auto3","YEAR":"2008"," VOLUME":"3.2","PRICE":"9000000"},
     {"NAME":"Auto1","YEAR":"2009"," VOLUME":"3.5","PRICE":"10000000"},
      {"NAME":"Auto2","YEAR":"2010"," VOLUME":"4.0","PRICE":"11000000"},
       {"NAME":"Auto3","YEAR":"2011"," VOLUME":"5.0","PRICE":"12000000"}
];
var text="";
var text2="";
var text3="";
var text4="";

while(true){

var isFound = false;	
var menu=prompt("INSERT [1] TO SEARCH BY NAME"+'\n'+"INSERT [2] TO SEARCH BY YEARINSERT"+'\n'+"INSERT [3] TO SEARCH BY ENGINE VOLUMEINSERT"+'\n'+"INSERT [4] TO SEARCH BY PRICEINSERT"+'\n'+"INSERT [5] TO EXIT");
if(menu==1){
var m1=prompt(" INSERT NAME OF CAR:");
for(var i=0;i<massk.length;i++){
  if(m1==massk[i].NAME){
  	isFound = true;
    text+=massk[i].NAME +' '+massk[i].YEAR+' '+massk[i].VOLUME+' '+massk[i].PRICE+'\n';
	alert(text);
  }
}
}else if(menu==2){
var m2=prompt(" INSERT YEAR START FROM:");
var m22=prompt("INSERT YEAR ENDS FROM:");
for(var i=0;i<massk.length;i++){
  if(m2<=massk[i].YEAR && m22>=massk[i].YEAR){
    text2+=massk[i].NAME +' '+massk[i].YEAR+' '+massk[i].VOLUME+' '+massk[i].PRICE+'\n';
  }
}
alert(text2+'\n');
}else if(menu==3){
var m3=prompt(" INSERT ENGINE VOLUME START FROM:");
var m33=prompt("INSERT ENGINE VOLUME ENDS FROM:");
for(var i=0;i<massk.length;i++){
  if(m3<=massk[i].VOLUME && m33>=massk[i].VOLUME){
    text3+=massk[i].NAME +' '+massk[i].YEAR+' '+massk[i].VOLUME+' '+massk[i].PRICE+'\n';
  }
}
alert(text3+'\n');
}else if(menu==4){
  var m4=prompt("INSERT PRICE START FROM:");
var m44=prompt("INSERT PRICE ENDS FROM:");
for(var i=0;i<massk.length;i++){
  if(m4<=massk[i].PRICE && m44>=massk[i].PRICE){
    text4+=massk[i].NAME +' '+massk[i].YEAR+' '+massk[i].VOLUME+' '+massk[i].PRICE+'\n';
  }
}
alert(text4+'\n');
}else if(menu==5){
break;
}else if( menu==0){
  break;
}

if (isFound == false) {
	alert('Not found');
}

}

















  
