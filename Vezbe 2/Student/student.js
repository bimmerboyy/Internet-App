class Student{
	constructor(indeks,ime,prezime,godina,smer,slika){
		this.indeks = indeks;
		this.ime = ime;
		this.prezime = prezime;
		this.godina = godina;
		this.smer = smer;
		this.slika = slika;
	}
	postavi(){
		console.log('uso');
		let txt;
		let student = document.createElement('div');
		student.style.width = "100%";
		let druga_kolona = document.querySelector('druga-kolona');
		txt += "Indeks:" + this.indeks;
		// txt += `<p>Indeks:${this.indeks}</p>
		// <p>Indeks:${this.ime}</p>
		// <p>Indeks:${this.prezime}</p>
		// <p>Indeks:${this.godina}</p>
		// <p>Indeks:${this.smer}</p>`;
		student.appendChild(txt);
		druga_kolona.appendChild(student);
	}
}

let tarik = new Student('036012/21','Tarik','Kucevic',3,'Softversko inzenjerstvo','rew');
tarik.postavi();