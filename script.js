document.addEventListener('DOMContentLoaded', () => {
  console.log('Il DOM è stato caricato e il codice JavaScript sta funzionando.');
  const songRequestForm = document.getElementById('songRequestForm');

  // Gestisci l'invio del modulo
  songRequestForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Evita l'invio del modulo predefinito

    // Recupera i dati dal modulo
    const songTitle = document.getElementById('songTitle').value;
    const artist = document.getElementById('artist').value;

    console.log('Titolo della canzone:', songTitle);
    console.log('Artista:', artist);
    // Invia i dati al server per l'aggiunta al database
    fetch('http://vibes-internal.mrfreex.net:3369/api/aggiungiRichiesta', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ songTitle, artist })
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // La richiesta è stata aggiunta con successo
        console.log(data.message);
        // Puoi eseguire azioni aggiuntive come pulire i campi del modulo
        document.getElementById('songTitle').value = '';
        document.getElementById('artist').value = '';
      } else {
        // Gestisci eventuali errori
        console.error(data.error);
      }
    })
    .catch(error => {
      console.error('Errore nell\'invio della richiesta al server:', error);
    });
  });
});
