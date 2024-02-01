document.addEventListener('DOMContentLoaded', () => {
    const requestList = document.getElementById('requestList');
  
    // Funzione per recuperare le richieste dal server
    function getRequests() {
      fetch('/api/getRequests') // Sostituisci con la URL appropriata per ottenere le richieste dal tuo server
        .then(response => response.json())
        .then(data => {
          // Cicla attraverso le richieste e crea righe della tabella
          data.forEach(request => {
            const row = document.createElement('tr');
            row.innerHTML = `
              <td>${request.songTitle}</td>
              <td>${request.artist}</td>
            `;
            requestList.appendChild(row);
          });
        })
        .catch(error => {
          console.error('Errore nel recupero delle richieste dal server:', error);
        });
    }
  
    // Chiama la funzione per ottenere e visualizzare le richieste
    getRequests();
  });
  