<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receitas para Baleias</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <link rel="icon" type="image/png" href="favicon.png">
</head>

<body>

  <div class="main-container">
    
    <div class="coluna-receitas">
      <h1>🐋 Receitas para Baleias 🐋</h1>
      <p>Bem-vinda à cozinha submarina mais saborosa do Docker Ocean!</p>

      <div class="card">
        <h2>🍣 Sushi de Krill</h2>
        <p>Prato leve e cheio de proteína, perfeito para orcas em dieta.</p>
      </div>

      <div class="card">
        <h2>🐙 Lula Recheada com Bits de Container</h2>
        <p>Recheio leve com dados comprimidos para digestão rápida.</p>
      </div>

      <div class="card">
        <h2>🍵 Bolinhas de Plâncton ao Vapor</h2>
        <p>Ideal para baleias jubarte nas noites frias do oceano.</p>
      </div>

      
<button class="card card-baleia" onclick="alimentarBaleia()">
  <h2>🍽️ Alimentar Baleia</h2>
  <p>Hora da comilança! Clique para servir uma receita deliciosa.</p>
</button>

   <p id="mensagem"></p>
    </div>

    
    <div class="coluna-formulario">
      <h1>🐳 Cadastrar Sugestão de Receita</h1>
      <p class="intro-form">Aqui você pode sugerir uma receita para nossas baleias!</p>
      <form method="POST" action="salvar.php">
        <input type="text" name="nome" placeholder="Nome da receita" required><br>
        <textarea name="descricao" placeholder="Descrição deliciosa" required></textarea><br>
        <button type="submit">Salvar receita</button>

       </form>
   <p style="margin-top: 15px;">
       <a href="salvar.php" style="color: #00bcd4; text-decoration: underline; font-weight: bold;"> Ver receitas já cadastradas </a>
    </div>

  </div>



  <div class="bolha bolha1"></div>
  <div class="bolha bolha2"></div>
  <div class="bolha bolha3"></div>
  <div class="bolha bolha4"></div>
  <div class="bolha bolha5"></div>
  <div class="bolha bolha6"></div>
  <div class="bolha bolha7"></div>

<footer class="footer">
  <p>Feito com 💙 por <a href="https://github.com/brendastreng" target="_blank">Brenda</a></p>
</footer>

</body>

</html>
