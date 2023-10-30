class Knjiga {
    constructor(name, isbn,broj,godinaIzdanja,autor,izdavac,kratakOpis,url) {
      this.name = name;
      this.isbn = isbn;
    }
  
    displayInfo() {
      console.log(`Book Name: ${this.name}`);
      console.log(`ISBN: ${this.isbn}`);
    }
  }


  
  // Example usage
  const knjiga1 = new Book('Book Title 1', '978-0-123456-47-2');
  knjiga1.displayInfo();
  
  const knjiga2 = new Book('Book Title 2', '978-0-789123-45-6');
  knjiga2.displayInfo();