function alimentarBaleia() {
  const mensagens = [
    "🐋 A baleia adorou o sushi de krill!",
    "🦑 A lula recheada foi um sucesso!",
    "🍵 A baleia quer mais bolinhas de plâncton!",
    "🌊 A baleia está tirando uma soneca pós-refeição..."
  ];

  const msg = mensagens[Math.floor(Math.random() * mensagens.length)];
  document.getElementById("mensagem").innerText = msg;
}
