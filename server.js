const express = require('express');
const app = express();
const port = 3369; // Sostituisci con la porta che desideri utilizzare
const mysql = require('mysql2'); // Assicurati di aver installato il modulo mysql2

app.use(express.json());

// Configura la connessione al database MySQL
const dbConnection = mysql.createConnection({
  host: 'localhost',
  user: 'phpmyadmin',
  port: 3351,
  password: 'ciaone11',
  database: 'canzoni'
});

// Connettiti al database
dbConnection.connect((err) => {
  if (err) {
    console.error('Errore nella connessione al database:', err);
  } else {
    console.log('Connessione al database MySQL riuscita');
  }
});

// Gestisci la richiesta POST per l'aggiunta di una richiesta al database
app.post('/api/aggiungiRichiesta', (req, res) => {
  const { songTitle, artist } = req.body;

  // Esegui l'aggiunta della richiesta al database
  const sql = 'INSERT INTO richieste (titolo, artista) VALUES (?, ?)';
  dbConnection.query(sql, [songTitle, artist], (error, results) => {
    if (error) {
      console.error('Errore nell\'inserimento della richiesta nel database:', error);
      res.json({ success: false, error: 'Errore nell\'inserimento della richiesta' });
    } else {
      console.log('Richiesta aggiunta al database');
      res.json({ success: true, message: 'Richiesta aggiunta con successo' });
    }
  });
});

// Avvia il server
app.listen(port, () => {
  console.log(`Server in ascolto sulla porta ${port}`);
});
