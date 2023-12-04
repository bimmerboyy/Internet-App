class MenuItem
{
    //Kreiramo kalsu MenuItem i inicijalizujemu atribute u konstruktoru
    constructor(naziv,adresa,css)
    {
        this.naziv = naziv;
        this.adresa = adresa;
        this.css = css;
    }
//Radimo validaciju gde proveravamo da li su uneti atributi prazni
    validacija()
    {
        if(this.naziv == null)
            return "Niste unelu naziv";
        if(this.adresa == null)
            return "Niste uneli adresu";
    }
}

class DynamicMenu
{
    //U klasi DynamicMenu imamo items koji predstavlja niz od MenuItema i kontenjer u koji postavljamo menu item
    //Kontenjer nam predstavlja neki div u htmlu koji smo kreirali
    constructor(items,kontejner)
    {
        this.items = items;
        this.kontejner = kontejner;
    }
    //Funkcija za prikazivanje gde saljemo id diva u koji zelimo da smestimo kontenjer
    prikazi(id)
    {
        let izabrano = document.getElementById(id);
        this.kontejner = izabrano; 
        this.crtaj();
    }

    dodajStavku(naziv,adresa,css)
    {
        if(this.kontejner == null) throw new Exception("Roditeljski element (ID = " + id + " ne postoji");
        //Kreiramo stavku sa atributima iz MenuItema i dodamo je u niz items
        var stavka = new MenuItem(naziv,adresa,css);
        this.items.push(stavka);
        //Prvo cistimo prethodnu tabelu i dodajemo novu sa novim itemom koji smo dodali
        this.cisti();
        this.crtaj();
    }

    brisiStavku(naziv)
    {
        //Uzimamo index elementa kojeg smo prosledili za brisanje
        let brisi = this.items.indexOf(x => x.naziv == naziv);
        if(brisi == null) return "Ne postoji stavka";
        else
        {
            //Preko splice brisemo tako sto stavljamo poziciju elementa kojeg brisemo 
            //tj promenljiva brisi nam sadrzi poziviju elementa za brisanje a u drugom delu pisemo koliko el zelimo da izbrisemo
            //u ovom slucaju je to jedan
            this.items.splice(brisi,1);
        }
        //Kada se izbacila stavka iz niza items onda cistimo stare savke i dodajemo nove gde nemamo ovu stavku koju smo izbrisali
        this.cisti();
        this.crtaj();
    }

    crtaj()
    {
        //Proveravamo da li psotoji kontenjer jer cemo u njega da ubacujemo
        //sve menu iteme
        if(this.kontejner == null) return "Nema kontejnera";
        //Pravimo tabelu u koju ubacujemo menu iteme u vidu linka
        var el = document.createElement("div");
        var id = "tabela";
        el.style.width = "100%";
        var t = "";
        //Dodajemo tabeli id kako bismo mogli da je ocistimo u funkciji cisti()
        t += `<table id="${id}" style='width:100%; height:100%;'>`;
        for(let i =0; i<this.items.length; i++)
        {
		t += "<tr style='vertical-align:top;'>";	
		t += "<td style='width:200px;'>";
        t += `<a href="${this.items[i].adresa}" class="${this.items[i].css}">${this.items[i].naziv}</a>`
		t += "</td></tr>";
        }
		t += "</table>";
        el.innerHTML = t;
        this.kontejner.appendChild(el);
    }

    cisti()
    {
        let izbrisi = document.getElementById("tabela");
        izbrisi.remove();
    }
}

let m = new MenuItem("Home", "prvi.html", "menu-item");
let m1 = new MenuItem("Home2","drugi.html", "menu-item");
console.log(m.validacija());
//Prosledjujemo niz MenuItema u items koji se ubacuje na pocetku
d = new DynamicMenu([m,m1],"drugi")
d.prikazi("prvi");
//Kreiramo dogadjaj za submit gde dodajemo stavke iz input elemenata
document.getElementById("submit").addEventListener('click', e => {
    let n = document.getElementById("naziv").value;
    let a = document.getElementById("adresa").value;
    let c = document.getElementById("css").value;

    d.dodajStavku(n,a,c);
});
//Brisemo stavku koju smo ubacili u input element tj naziv stavke
document.getElementById("delete").addEventListener('click', e => {
    let n = document.getElementById("brisi").value;

    d.brisiStavku(n);
});