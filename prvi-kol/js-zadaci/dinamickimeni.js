class MenuItem {
    constructor(naziv,adresa,nazivCSSKlase) {
        this.naziv = naziv;
        this.adresa = adresa;
        this.nazivCSSKlase = nazivCSSKlase;
   }
   validacija(){
    if(this.naziv === NULL && this.adresa === NULL){
        return 0;
    }
   }

}
class DynamicMenu{

    constructor(kontejner){
        this.kontejner = kontejner;
    }
    prikazi(id){
        document.getElementById(id);
        this.kontejner = izabrano;
        this.dodajuKontejnjer();
    }
    dodajStavku(naziv,adresa,nazivCSSKlase){

    }
    brisiStavku(naziv){

    }
    dodajuKontejnjer(){

        if()

    }
}