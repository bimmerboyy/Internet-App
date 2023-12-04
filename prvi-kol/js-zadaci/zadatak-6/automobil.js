let t = ``;

class Automobil{
    constructor(sifra,naziv,URL,cena,kilometraza,godina,snaga,boja,stanje){
        this.sifra = sifra;
        this.naziv = naziv;
        this.URL = URL;
        this.cena = cena;
        this.kilometraza = kilometraza;
        this.godina = godina;
        this.snaga = snaga;
        this.boja = boja;
        this.stanje = stanje;
    }
    prikaz(){
        t = `
        <div class="info">
        <div class="prvi-deo">
        <div class="slika">
            <img src="${this.URL}" alt="slika">
        </div>
        <div class="podaci">
        Sifra:${this.sifra}<br>
        Naziv:${this.naziv}<br>
        Cena:${this.cena}eura<br>
        Kilometraza:${this.kilometraza}km<br>
        Godina:${this.godina}<br>
        Snaga:${this.snaga}ks<br>
        Boja:${this.boja}<br>
        Stanje:${this.stanje}
        </div>
    </div>
        </div>
       `;
        document.body.innerHTML += t;
    
    }
}
class ListaAutomobila{
  constructor(galerija){
    this.galerija = galerija;
  }

    dodajuGaleriju(sifra,naziv,URL,cena,kilometraza,godina,snaga,boja,stanje){
       var automobil = new Automobil(sifra,naziv,URL,cena,kilometraza,godina,snaga,boja,stanje);
        this.galerija.push(automobil);
    }
    prikaziListu(){
        this.galerija.forEach(automobil =>{
            t += `
            <div class="drugi-deo">
                <div class="lista">${automobil.naziv}</div>
            </div>`;
        });
        document.body.innerHTML += t;
    }

}

a1 = new Automobil(123,"Tuareg",
"https://www.planetcarsz.com/assets/uploads/images/VEICULOS/V/VOLKSWAGEN/2007_VOLKSWAGEN_TOUAREG_BOEING_747/VOLKSWAGEN_TOUAREG_BOEING_747_2007_1.jpg",
35000,250000,2005,450,"crna","slobodan");
a2 = new Automobil(897,"BMW",
"https://wallup.net/wp-content/uploads/2016/01/99386-BMW-e31-850ci.jpg",
239000,12000,1997,340,"crvena","slobodan");
a1.prikaz();
lista = new ListaAutomobila([a1,a2]); 
lista.dodajuGaleriju(123,"Tuareg",
"https://www.planetcarsz.com/assets/uploads/images/VEICULOS/V/VOLKSWAGEN/2007_VOLKSWAGEN_TOUAREG_BOEING_747/VOLKSWAGEN_TOUAREG_BOEING_747_2007_1.jpg",
35000,250000,2005,450,"crna","slobodan");
lista.dodajuGaleriju(324,"Audi",
"https://tse4.mm.bing.net/th?id=OIP.vlt0bMVxqJ6cvwp6Ldw7yAHaE7&pid=Api&P=0&h=220",
40000,17000,2016,420,"bela","iznamljen");
lista.prikaziListu();