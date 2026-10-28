[index.html](https://github.com/user-attachments/files/34075472/index.html)
[style.css](https://github.com/user-attachments/files/34075476/style.css)
[script.js](https://github.com/user-attachments/files/34075475/script.js)
[README.md](https://github.com/user-attachments/files/34075474/README.md)

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESONA - Os meus álbuns</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>RESONA</h1>
    <p>Guarda e avalia os álbuns que ouves.</p>
  </header>
  <main>
    <section class="formulario">
      <h2>Adicionar álbum</h2>
      <form id="formAlbum">
        <input id="album" placeholder="Nome do álbum" required maxlength="80">
        <input id="artista" placeholder="Artista" required maxlength="80">
        <label for="nota">Classificação</label>
        <select id="nota">
          <option value="5">★★★★★</option>
          <option value="4">★★★★</option>
          <option value="3">★★★</option>
          <option value="2">★★</option>
          <option value="1">★</option>
        </select>
        <textarea id="opiniao" placeholder="A tua opinião (opcional)" maxlength="300"></textarea>
        <button type="submit">Guardar álbum</button>
      </form>
    </section>
    <section>
      <h2>Os meus álbuns</h2>
      <div id="listaAlbuns"></div>
    </section>
  </main>
  <footer>RESONA | Projeto escolar</footer>
  <script src="script.js"></script>
</body>
</html>

# RESONA

O RESONA é um pequeno site para guardar os álbuns que ouvi e dar uma classificação de 1 a 5 estrelas.

## Funcionalidades
- Adicionar um álbum e o nome do artista
- Dar uma classificação
- Escrever uma opinião
- Consultar e apagar álbuns

## Tecnologias
HTML, CSS e JavaScript.

## Como utilizar
Abrir o ficheiro `index.html` no navegador. Os dados ficam guardados no próprio navegador através do localStorage.

Projeto escolar em desenvolvimento.

let albuns = JSON.parse(localStorage.getItem('albunsResona')) || [];

function mostrarAlbuns() {
  const lista = document.getElementById('listaAlbuns');
  lista.innerHTML = '';

  if (albuns.length === 0) {
    lista.textContent = 'Ainda não adicionaste nenhum álbum.';
    return;
  }

  albuns.forEach(function(album, posicao) {
    const cartao = document.createElement('div');
    cartao.className = 'cartao';

    const titulo = document.createElement('h3');
    titulo.textContent = album.nome;
    cartao.appendChild(titulo);

    const artista = document.createElement('p');
    artista.className = 'artista';
    artista.textContent = album.artista;
    cartao.appendChild(artista);

    const estrelas = document.createElement('p');
    estrelas.className = 'estrelas';
    estrelas.textContent = '★'.repeat(album.nota);
    cartao.appendChild(estrelas);

    if (album.opiniao) {
      const opiniao = document.createElement('p');
      opiniao.textContent = album.opiniao;
      cartao.appendChild(opiniao);
    }

    const apagar = document.createElement('button');
    apagar.className = 'apagar';
    apagar.textContent = 'Apagar';
    apagar.onclick = function() {
      albuns.splice(posicao, 1);
      guardarAlbuns();
      mostrarAlbuns();
    };
    cartao.appendChild(apagar);
    lista.appendChild(cartao);
  });
}

function guardarAlbuns() {
  localStorage.setItem('albunsResona', JSON.stringify(albuns));
}

document.getElementById('formAlbum').addEventListener('submit', function(evento) {
  evento.preventDefault();
  albuns.push({
    nome: document.getElementById('album').value.trim(),
    artista: document.getElementById('artista').value.trim(),
    nota: Number(document.getElementById('nota').value),
    opiniao: document.getElementById('opiniao').value.trim()
  });
  guardarAlbuns();
  mostrarAlbuns();
  this.reset();
});

mostrarAlbuns();

* { box-sizing: border-box; }
body { margin: 0; font-family: Arial, sans-serif; background: #141414; color: #f5f5f5; }
header { background: #242424; padding: 30px 20px; text-align: center; }
h1 { color: #e7a54b; letter-spacing: 3px; margin: 0; }
header p { color: #ccc; }
main { max-width: 850px; margin: 30px auto; padding: 0 18px; }
h2 { font-size: 22px; }
.formulario, .cartao { background: #242424; padding: 20px; border-radius: 8px; margin-bottom: 20px; }
form { display: flex; flex-direction: column; gap: 12px; }
input, select, textarea { padding: 11px; background: #333; border: 1px solid #555; border-radius: 5px; color: white; font: inherit; }
textarea { min-height: 75px; resize: vertical; }
button { background: #e7a54b; color: #171717; border: none; border-radius: 5px; padding: 11px; cursor: pointer; font-weight: bold; }
button:hover { background: #f3bb6c; }
.cartao h3 { margin: 0 0 5px; }
.artista { color: #bbb; margin: 0 0 10px; }
.estrelas { color: #e7a54b; }
.apagar { background: #555; color: white; padding: 7px 12px; }
footer { text-align: center; color: #999; padding: 25px; }
