const express = require('express');
const fs = require('fs');

const app = express();
const port = 3000;

app.get('/getVisitorCount', (req, res) => {
  // Lê o contador atual
  let count = parseInt(fs.readFileSync('counter.txt'));

  // Incrementa o contador
  count++;

  // Salva o novo contador de volta no arquivo
  fs.writeFileSync('counter.txt', count.toString());

  // Retorna o número de visitantes como resposta
  res.json({ count });
});

app.listen(port, () => {
  console.log(`Servidor rodando em http://localhost:${port}`);
});
