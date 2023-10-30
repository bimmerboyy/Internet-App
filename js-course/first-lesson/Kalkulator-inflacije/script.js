
//Funkcija za izracunavanje inflacije
function izracunajInflaciju(){
//Selektujemo sve potrebne elemente
let stopa_inflacije = document.querySelector('#inflacija');
let novac = document.querySelector('#novac');
let godine = document.querySelector('#godine');
let rezultat = document.querySelector('.rezultat');
let inflacijaBox = document.querySelector('.inflacija-box');
//Pretvorimo ih u int
godine = parseInt(godine.value);
stopa_inflacije = parseInt(stopa_inflacije.value);
novac = parseInt(novac.value);
    let inflacija; //Deklarisemo inflaciju
    let procenat = novac * (stopa_inflacije / 100);//Izracunamo procenat
    inflacija = novac + procenat;
    let nova_vrednost = inflacija; //Deklarisemo novu vrednost koja ce da cuva predhodnu izracuantu inflaciju
    for(let i = 0;i < godine - 1;i++){ //Prolazimo kroz sve godine
        inflacija = nova_vrednost + procenat;//Dodajemo procenat
        nova_vrednost = inflacija;
        procenat = nova_vrednost * (stopa_inflacije / 100);//Izracunavamo novi procenat
    }
    inflacija = inflacija.toFixed(2);
    inflacijaBox.style.height = "250px";
   rezultat.innerHTML = `Danasnjih ${novac} € vrijedi isto kao ${inflacija} za ${godine} po stopi inflacije od ${stopa_inflacije}`;
}
