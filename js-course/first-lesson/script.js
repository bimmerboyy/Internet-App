// console.log('Pozdrav iz konzole')
// console.log(5 == 6);
//console.error('Pozdrav iz konzole')
// document.write('Pozdrav sa stranice')
//window.alert('Pozdrav iz popupa')
// open();
/*
Ovo je kod koji ce da uzme div element preko id-a
i onda ce da mu upise ovaj 'Pozdrav!' tekst. 
*/
// document.getElementById('poruka').innerText = 'Pozdrav!';
// Ovo je kod koji ce u konzoli ispisati test.
// console.log('test');

// let cysecor = 'Subscribe na moj kanal!!!';

// let godine = 5;

// let mjesec = 3;

// let rezultat = godine + mjesec;

// let cysecor_broj_sub = 'Cysecor ima 45K subs'

// console.log(typeof(godine));
// console.log(cysecor_broj_sub);

// let neki_broj = 65;
// let drugi_broj = '5';



// drugi_broj = parseInt(drugi_broj);

// console.log(typeof(drugi_broj));
// console.log(drugi_broj);

// let rezultat = neki_broj + drugi_broj;

// console.log(rezultat);


// let prvi_broj = 5;
// let drugi_broj = 10;
// let treci_tmp;


// console.log('Prvi broj:' + prvi_broj);
// console.log('Drugi broj:' + drugi_broj);

// treci_tmp = prvi_broj;
// prvi_broj = drugi_broj;
// drugi_broj = treci_tmp;

// console.log('Prvi broj:' + prvi_broj);
// console.log('Drugi broj:' + drugi_broj);

// let prvi_broj = 5;
// const drugi_broj = 10;

// drugi_broj = prvi_broj;

// console.log(drugi_broj);


// let ime = 'Cysecor';
// let prezime = 'Sigurnost';
// let godine = 18;

// console.log(ime);
// console.log(prezime);
// console.log(godine);

// console.log('Ove godine imam ' + godine + ' godina.');

// // godine += 2;  


// // let recenica = 'Za dvije godine cu imati ' + godine + ' godina';

// let recenica = `Ja sam ${ime} imam ${godine} godina`;

// console.log(recenica);

// let prvi_broj = 10;
// let drugi_broj = 5;
// let treci_broj = 7;
// let cetvrti_broj = 8;

// console.log(prvi_broj > drugi_broj);
// console.log(treci_broj > cetvrti_broj);

// console.log((prvi_broj > drugi_broj) || (treci_broj > cetvrti_broj));


// let prvi_broj = 11;
// let drugi_broj = 10;

// console.log(prvi_broj < drugi_broj);

// if(prvi_broj < drugi_broj)
// {
//     console.log('Prvi broj je manji od drugog');
// }
// else
// {
//     console.log('Prvi broj nije manji od drugog');
// }

// let vrijeme = 10;

// if(vrijeme < 10)
// {
//     console.log('Dobro juto!');
// }
// else if(vrijeme < 20)
// {
//     console.log('Dobar dan!');
// }
// else
// {
//     console.log('Dobro vece!');
// }

// let mjesec = 6;

// switch(mjesec)
// {
//     case 1:
//         console.log('Januar');
//     break;
//     case 2:
//         console.log('Februar');
//     break;
//     case 3:
//         console.log('Mart');
//     break;
//     case 4:
//         console.log('April');
//     break;
//     case 5:
//         console.log('Maj');
//     break;
//     case 6:
//         console.log('Jun');
//     break;
//     case 7:
//         console.log('Jul');
//     break;
//     case 8:
//         console.log('Avgust');
//     break;
//     case 8:
//         console.log('Septembar');
//     break;
//     case 9:
//         console.log('Oktobar');
//     break;
//     case 10:
//         console.log('Novembar');
//     break;
//     case 11:
//         console.log('Decembar');
//     break;
// }


// let novcanice = 25; // 25 novcanica
// let vrijednost_novcanice = 20; // vrijednost jedne novacanice

// let novacanice = [10, 5, 10, 50, 5, 10, 100, 20, 50, 5, 10, 20];

// let broj_novcanica = novacanice.length;

// // izbrojane novcanice

// let izbrojane_novcanice = 0;

//broji novcanice sve dok je brojac manji 
// od broja novcanica

// while(izbrojane_novcanice < broj_novcanica)
// {
//     console.log('--------');
//     console.log('Uslov prosao');
//     console.log(`Novcanica na poziciji niza [${izbrojane_novcanice}]: ${novacanice[izbrojane_novcanice]}`);
//     izbrojane_novcanice++;
//     console.log('--------');
// }

// console.log(izbrojane_novcanice);

let novcanice = [10,5,20,50,5,10,100,20,50];
// let broj_novcanica = novcanice.length;
// let ukupno_novca = 0;

// for(let brojac = 0;brojac < broj_novcanica;brojac++){ //ili for(let brojac in novcanice)
//     console.log(novcanice[brojac]);
//     ukupno_novca += novcanice[brojac];
    
// }


// console.log('### Kraj petlje ###');
// console.log('Ukupno imamo:' + ukupno_novca + 'eura');

// for(let novcanica of novcanice){
//     console.log(novcanica);
// }

// let automobili = ['Audi','BMW','Porsche','Mercedes'];

// for(let automobil of automobili){
//     console.log(automobil);
// }

// automobili.forEach(function (automobil) {
//     console.log(automobil); 
// });

// let automobili = 
// {
// audi : ['70000','2017','Q7'],
// bmw: ['50000','2018','330D'],
// porsche: ['60000','2016','Boxter'],
// mercedes: ['100000','2019','S400']
// };

// for(let automobil in automobili){
//     let podaci_o_vozilu = automobili[automobil];
//     console.log(`${automobil} model: ${podaci_o_vozilu[2]},
//     godiste ${podaci_o_vozilu[1]},
//     cijena:${podaci_o_vozilu[0]} eura`);
// }

// let osoba = {
//     ime: 'Cysecor',
//     prezime: 'Sigurnost',
//     godine: '12',
//     grad: 'Peking'
// };
// console.log(`Ime: ${osoba.ime},
//             Prezime:${osoba.prezime},
//             Godine:${osoba.godine},
//             Grad:${osoba.grad}`
//   


/*console.log('');
//STAN
let godine = 10;
let mejseci = godine * 12;
let rata = nekretnine.stan / mejseci;

rata = rata.toFixed(2);

console.log(mejseci + ' mjeseci.');
console.log(rata + 'eura');

console.log(`Mjesecna rata za stan iznosi ${rata} na ${godine} godina.`);
//PALC

godine = 5;
mejseci = godine*12;
rata = nekretnine.plac / mejseci;

console.log('----------');
console.log(mejseci + 'eura');
console.log(rata + 'eura');
console.log(`Mjesecna rata za plac iznosi ${rata} na ${godine} godina.`);



//KUCA

godine = 20;
mejseci = godine*12;
rata = nekretnine.kuca / mejseci;

console.log('----------');
console.log(mejseci + 'eura');
console.log(rata + 'eura');
console.log(`Mjesecna rata za kucu iznosi ${rata} na ${godine} godina.`);

*/



// let brend = document.getElementsByTagName('span');

// for(let auto of brend){
//     console.log(auto.innerText);
// }

// console.log('----------');

// let modeli = document.getElementsByClassName('automobil-model');

// for(let model of modeli){
//     console.log(model.innerText);
// }

// let najbolji = document.getElementById('recenica')
// console.log(najbolji.innerText);

// console.log('--------');


// let brend = document.querySelectorAll('span');
// console.log(brend);

// for(let auto of brend){
//     console.log(auto.innerText);
// }

// let modeli = document.querySelectorAll('.automobil-model');
// console.log(modeli);

// console.log('--------');
// for(let model of modeli){
//     console.log(model.innerText);
// }

// let recenica = document.querySelector('#recenica');

// console.log(recenica.innerText);renewing knowledge of javascript lesson 1

//Selektovanje elementa po id-iu i brisanje iz HTML-a
let recenica = document.querySelector('#recenica');
recenica.remove();
//Kreiranje novog div elementa
let novi_el = document.createElement('div');
novi_el.classList = 'novi_element'; //Dodajemo klasu
novi_el.innerHTML = '<hr>Pozdrav!!!'// Dodajemo html i text
let body = document.querySelector('body'); //Slektujemo body tag

body.appendChild(novi_el); //Na karaju body taga dodajemo nas novi element

console.log(novi_el);