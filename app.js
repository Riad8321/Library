const add = document.querySelector('#submit');
add.addEventListener('click', async (e) => {
  e.preventDefault();

  const title = document.querySelector('#title').value;
  const author = document.querySelector('#author').value;
  const year = document.querySelector('#year').value;
  const genre = document.querySelector('#genre').value;

  console.log(title, author, year, genre);

  await sendData(title, author, year, genre);

  // Effacer les champs du formulaire
  document.querySelector('#title').value = '';
  document.querySelector('#author').value = '';
  document.querySelector('#year').value = '';
  document.querySelector('#genre').value = '';
});

async function sendData(title, author, year, genre) {
  const url = 'add_book.php';
  const formData = new FormData();
  formData.append('title', title);
  formData.append('author', author);
  formData.append('year', year);
  formData.append('genre', genre);

  const req = await fetch(url, {
    method: 'POST',
    body: formData
  });

  const response = await req.json();

  await getAllBooks();
}


async function getAllBooks() {
    console.log("Mettre à jour les livres")
    const url = 'read_books.php'

    const req = await fetch(url)
    const resp = await req.json()

    // Reset le contenu de la table
    document.querySelector('tbody').innerHTML = ''

    console.log(resp)
    // Parcourir les données
    resp.forEach(data => {
        // Afficher sur le DOM
      
        const tr = `<tr>
        <th scope="row">${data.id}</th>
        <td>${data.title}</td>
        <td>${data.author}</td>
        <td>${data.year}</td>
        <td>${data.genre}</td>
        <td>
            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">Modifier</button>
            <button class="btn btn-danger btn-sm btn-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="${data.id}">Supprimer</button>
        </td>
    </tr>`
        document.querySelector('tbody').insertAdjacentHTML('beforeend', tr)

    })

    await addListener()

}

getAllBooks()


async function addListener() {
    // Capturer le clic sur la croix
    const deleteButtons = document.querySelectorAll('.btn-delete');
    deleteButtons.forEach(button => {
      button.addEventListener('click', (e) => {
        const id = e.target.dataset.id;
        document.querySelector('.btn-confirm-delete').setAttribute('data-id', id); 
      });
    });
  
    const deleteButtons2 = document.querySelectorAll('.btn-confirm-delete');
    deleteButtons2.forEach(button => {
      button.addEventListener('click', (e) => {
        const id = e.target.dataset.id;
        console.log(id);
        deleteBook(id);
      });
    });
  }



// Supprimer un livre
async function deleteBook(bookID) {
    const url = `delete_book.php?id=${bookID}`
    const req = await fetch(url)
    const resp = await req.json()

    // Mise à jour de la liste sur le DOM
    await getAllBooks()
}
  
// Modifier un livre
