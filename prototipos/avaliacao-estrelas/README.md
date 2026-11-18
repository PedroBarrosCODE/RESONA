# Protótipo de avaliação por estrelas

Exercício de PHP, CSS e MySQL que poderá servir de base ao futuro sistema de classificações do RESONA.

## Funcionalidades
- Selecionar uma classificação de 1 a 5 estrelas.
- Validar a classificação em PHP.
- Guardar a avaliação numa tabela MySQL.
- Mostrar uma mensagem após o registo.

## Como testar no computador
1. Colocar a pasta `avaliacao-estrelas` no diretório `htdocs` do XAMPP.
2. Iniciar o Apache e o MySQL.
3. No phpMyAdmin, criar uma base de dados com o nome `ft6`.
4. Importar o ficheiro `ft6.sql` para essa base de dados.
5. Confirmar os dados de ligação em `conexao.php`, de acordo com o ambiente local.
6. Abrir `http://localhost/avaliacao-estrelas/` no navegador.

## Relação com o RESONA
Este código é um exercício de base, não é ainda a funcionalidade integrada no RESONA.
Para essa integração, será necessário associar cada avaliação a um utilizador
e a uma música ou álbum.

O ficheiro SQL contém dois registos de teste.
Não colocar palavras-passe reais nem outros dados privados neste repositório.
