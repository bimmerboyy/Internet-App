class Artikal{
    constructor(sifra,naziv,URL,cena,stanje){
        this.sifra = sifra;
        this.naziv = naziv;
        this.URL = URL;
        this.cena = cena;
        this.stanje = stanje;
    }
    validacija(){
        if(this.sifra === NULL && this.naziv === NULL && this.URL === NULL && this.cena === NULL && this.stanje === NULL){
            return "Niste uneli sve podatke";
        }
        else{
            return "Uspesno ste uneli podatke";
        }
    }

}
class ListaArtikala{
    constructor(artikli){
        this.artikli = artikli;
    }

    dodajArtikal(sifra,naziv,URL,cena,stanje){
        let dodato = new Artikal(sifra,naziv,URL,cena,stanje);
        this.artikli.push(dodato);
        this.cisti();
        this.prikazi();

    }
    prikazi(){
        console.log(this.artikli);
        let t = `
        <table id="tabela">
        <tr>
            <td>Sifra</td>
            <td>Naziv</td>
            <td>slika</td>
            <td>cena</td>
            <td>stanje</td>
        </tr>
        `;
        if(Array.isArray(this.artikli)){
            this.artikli.forEach(item => {
                t += `
                <tr>
                <td>${item.sifra}</td>
                <td>${item.naziv}</td>
                <td>${item.URL}</td>
                <td>${item.cena}din</td>
                <td>${item.stanje}</td>
                </tr>`;
            });
        }
        else{
            console.error("artikli nisu niz");
        }
        
        t += `</table>`;
        let prikaz = document.createElement('div');
        let body = document.querySelector('body');
        prikaz.innerHTML = t;
        body.appendChild(prikaz);
        
        
    }
    sortirajPoSifri(){
        this.artikli.sort((a, b) => b.sifra - a.sifra);
        this.cisti();
        this.prikazi();
    }
    sortirajPoCeni(){
        this.artikli.sort((a, b) => b.cena - a.cena);
        this.cisti();
        this.prikazi();
    }
    cisti(){
        let tabela = document.getElementById('tabela');
        tabela.remove();
    }
}

a1 = new Artikal(345,"smoki","smoki.jpg",60,30);
a2 = new Artikal(768,"cokolada","cokolada.jpg",110,45);
a3 = new Artikal(455,"cips","cips.jpg",75,25);
l1 = new ListaArtikala([a1,a2,a3]);
l1.prikazi();
l1.dodajArtikal(234,"zvake","zvake.jpg",70,40);
l1.sortirajPoCeni();

