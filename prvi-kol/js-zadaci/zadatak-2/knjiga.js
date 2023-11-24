class Knjiga{
    constructor(naziv,ISBNbroj,godinaIzdanja,autor,izdavac,kratakOpis,URL){
        this.naziv = naziv;
        this.ISBNbroj = ISBNbroj;
        this.godinaIzdanja = godinaIzdanja;
        this.autor = autor;
        this.izdavac = izdavac;
        this.kratakOpis = kratakOpis;
        this.URL = URL;
    }
    prikazi(id){
        let izabrano = document.getElementById(id);
        console.log(izabrano);
        let t = `
        <div class="slika">
        <img src="${this.URL}" alt="slika">
        <div class="naziv">
            <p>Naziv:${this.naziv}</p>
            <p>Kratak opis:${this.kratakOpis}</p>
        </div>
    </div>
    <div class="autor">
        <p>ISBN:${this.ISBNbroj}</p>
        <p>God:${this.godinaIzdanja}</p>
        <p>Autor:${this.autor}</p>
        <p>Izdavac:${this.izdavac}</p>
    </div>`;
    let div = document.createElement('div');
    div.innerHTML = t;
    div.setAttribute("id","kontejner");
    izabrano.appendChild(div);

    }
}

 k1 = new Knjiga("Rich Dad Poor Dad",3,1996,"Robert Kijosaki","Plata Publishing, LLC.",
 "It advocates the importance of financial literacy (financial education)",
 "https://delfi.rs/_img/artikli/2020/09/rich_dad_poor_dad_vv.jpg");
 
 k2 = new Knjiga("Atomic habits",5,2005,"Dzejms Klir","Penguin Random House.",
 "Think of these laws as a framework for designing each stage for optimal habit formation",
 "https://delfi.rs/_img/artikli/2019/08/atomic_habits_vv.jpg");
 k3 = new Knjiga("Street Workout",7,2009,"Al Kavadlo","Kindle Edition",
 "Al and Danny Kavadlo--bodyweight coaches extraordinaire--have done it again.",
 "https://m.media-amazon.com/images/I/A1RlnuZe+pL._AC_UF1000,1000_QL80_.jpg");
 k1.prikazi("info");
 k2.prikazi("info");
 k3.prikazi("info");