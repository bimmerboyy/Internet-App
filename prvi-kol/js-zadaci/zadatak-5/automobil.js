let slika;

class Automobil{
    constructor(sifra,naziv,URL1,URL2,cena,kilometraza,snaga,boja){
        this.sifra = sifra;
        this.naziv = naziv;
        this.URL1 = URL1;
        this.URL2 = URL2;
        this.cena = cena;
        this.kilometraza = kilometraza;
        this.snaga = snaga;
        this.boja = boja;
    }
    validacija(){
        if(this.sifra === NULL && this.naziv === NULL && this.URL1 === NULL && this.URL2 === NULL && this.cena === NULL &&
             this.kilometraza === NULL && this.snaga === NULL && this.boja === NULL)
             {
                return "Niste uneli sve podatke,unesite ponovo";
             }
        else{
            return "Uneli ste sve podatke";
        }
    }
    prikaz(){
        let t = ` 
         <div class="prvi-deo">
        <img src="${this.URL1}" class="slika" alt="slika">
        <div class="podaci">Sifra:${this.sifra}<br>Naziv:${this.naziv}<br>Cena:${this.cena}e<br>Kilometraza:${this.kilometraza}km<br>Snaga:${this.snaga}ks<br>
        Boja:${this.boja}</div>
    </div>
    <div class="drugi-deo">
        <button class="prvo-dugme"><<</button>
        <button class="drugo-dugme">>></button>
    </div>`;
    let automobil = document.createElement('div');
    automobil.setAttribute("class","automobil");
    automobil.innerHTML = t;
    let body = document.querySelector('body');
    body.appendChild(automobil);
    }

}

a1 = new Automobil(123,"BMW E30","https://www.testoviautomobila.rs/wp-content/uploads/2015/08/bmw-e30-840x420.jpg",
"https://ireland.apollo.olxcdn.com/v1/files/qkw8fh83lmlp-PT/image;s=1000x750" , 
100000,35000,270,"plava");
a2 = new Automobil(456,"BMW e38","https://pbs.twimg.com/media/E7YSizPXoAABXvo.jpg",
"https://i.redd.it/gl0mvrn158z61.jpg", 
70000,47000,360,"crna");
a3 = new Automobil(123,"BMW","https://www.testoviautomobila.rs/wp-content/uploads/2015/08/bmw-e30-840x420.jpg",
"https://ireland.apollo.olxcdn.com/v1/files/qkw8fh83lmlp-PT/image;s=1000x750" , 
100000,35000,270,"plava");
a1.prikaz();
a2.prikaz();

document.querySelector('.prvo-dugme').addEventListener('click', e => {
    slika = document.querySelector(".slika");
    function levoDugme(a) {
        console.log('uso');
        if (a.URL2 !== null && a.URL2 != slika.src) {
            slika.src = a.URL2;
        } else if (a.URL1 !== null && a.URL1 != slika.src) {
            slika.src = a.URL1;
        } else {
            console.log('Ne postoji druga slika');
        }
    }
    levoDugme(a2);  // Pass a2 as a parameter
});

document.querySelector('.drugo-dugme').addEventListener('click', e => {
    function desnoDugme(a) {
        if (a.URL2 !== null && a.URL2 != slika.src) {
            slika.src = a.URL2;
        } else if (a.URL1 !== null && a.URL1 != slika.src) {
            slika.src = a.URL1;
        } else {
            console.log('Ne postoji druga slika');
        }
    }
    desnoDugme(a2);  // Pass a2 as a parameter
});