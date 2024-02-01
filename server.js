const express = require('express');
const app = express();
const port = 3369; // Sostituisci con la porta che desideri utilizzare
const mysql = require('mysql2'); // Assicurati di aver installato il modulo mysql2

app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', 'http://vibes-internal.mrfreex.net:3339');
    res.header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
    res.header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    next();
  });
  

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
    if (!req.body || Object.keys(req.body).length === 0) {
      // Gestisci il caso in cui il corpo della richiesta è vuoto o undefined
      console.log(req.body);
      console.error('Il corpo della richiesta è vuoto o undefined');
      res.status(400).json({ success: false, error: 'Dati del modulo mancanti o non validi' });
      return;
    }
  
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
