<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>TI Green — Conscientização & Doação</title>

  <!-- Fonts / icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('folderStyle/style.css') }}">
</head>
<body class="page">

  <header class="site-header" role="banner">
    <div class="container header-inner">
      <a class="brand" href="/">
        <img src="{{ asset('folderImages/folhaVerde(logo).webp') }}" alt="Logotipo TI Green" class="brand-logo">
        <span class="brand-title">TI Green</span>
      </a>

      <nav class="main-nav" role="navigation" aria-label="Navegação principal">
        <ul>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#donate">Contribuir</a></li>
          <li><a href="#contact">Fale Conosco</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <!-- HERO -->
    <section id="about" class="hero">
      <div class="container hero-grid">
        <div class="hero-text">
          <h1>TI Verde — tecnologia com responsabilidade ambiental</h1>
          <p>Práticas simples no dia a dia de TI reduzem consumo de energia, prolongam a vida útil do hardware e diminuem o descarte eletrônico. Vamos transformar atitude em impacto.</p>
          <p class="hero-cta">
            <a class="btn" href="#donate">Contribua agora</a>
            <a class="btn btn-ghost" href="#contact">Fale conosco</a>
          </p>
        </div>

        <div class="hero-card" aria-hidden="false">
          <div class="impact">
            <h3>Meta de arrecadação</h3>
            <div class="meta-value">R$ 5.000,00</div>

            <div class="progress-wrap" aria-hidden="false">
              <label for="donation-progress" class="sr-only">Progresso de arrecadação</label>
              <progress id="donation-progress" value="1200" max="5000"></progress>
              <div class="progress-details">
                <strong id="collected">R$ 1.200,00</strong>
                <span class="small">de R$ 5.000,00</span>
              </div>
            </div>

            <!-- Stripe form (mantive as no seu original): -->
            <form action="{{ route('stripe.checkout') }}" method="POST" class="donation-form">
              @csrf
              <input type="hidden" name="product" value="Doação TI Green">
              <input type="hidden" name="amount" value="20"> {{-- valor em dólares, altere se quiser --}}
              <button class="btn btn-primary" type="submit">Contribuir R$20</button>
            </form>

            <p class="donation-note">Doe equipamentos, divulgue e apoie projetos de reciclagem eletrônica.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- FEATURE / CALL OUT (opcional e curto) -->
    <section class="features container">
      <article class="feature">
        <h4>Reutilize</h4>
        <p>Doe hardware em bom estado para escolas e ONGs.</p>
      </article>
      <article class="feature">
        <h4>Descartar corretamente</h4>
        <p>Procure pontos de coleta e logística reversa.</p>
      </article>
      <article class="feature">
        <h4>Economia de energia</h4>
        <p>Configurações e equipamentos que reduzem consumo.</p>
      </article>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="contact container">
      <div class="contact-grid">
        <div class="contact-card">
          <h2>Fale Conosco</h2>
          <p>Quer apoiar, sugerir ou denunciar descarte irregular? Mande sua mensagem.</p>

          <form action="{{ route('contato.store') }}" method="POST" class="form" novalidate>
            @csrf
            <div class="form-row">
              <label for="titulo">Título</label>
              <input id="titulo" name="titulo" type="text" placeholder="Digite o título" required>
            </div>

            <div class="form-row">
              <label for="mensagem">Mensagem</label>
              <textarea id="mensagem" name="mensagem" rows="6" placeholder="Digite sua mensagem" required></textarea>
            </div>

            <div class="form-row">
              <label for="email">Seu E-mail</label>
              <input id="email" name="email" type="email" placeholder="seu@exemplo.com" required>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
              <button type="reset" class="btn btn-ghost">Limpar</button>
            </div>
          </form>
        </div>

        <aside class="contact-info" aria-label="Informações de contato">
          <h3>Por que falar conosco?</h3>
          <p>Sua participação nos ajuda a mapear pontos de coleta, promover educação e impulsionar iniciativas sustentáveis em tecnologia.</p>

          <ul class="contact-tips">
            <li>Doe equipamentos que não usa mais.</li>
            <li>Pesquise locais de descarte eletrônico na sua cidade.</li>
            <li>Apresente projetos escolares e treinamentos.</li>
          </ul>
        </aside>
      </div>
    </section>
  </main>
<!-- STATS / IMPACT -->
<section class="stats container" aria-label="Estatísticas">
  <div class="stats-grid">
    <div class="stat">
      <div class="stat-value" data-target="1240">0</div>
      <div class="stat-label">Equipamentos doados</div>
    </div>
    <div class="stat">
      <div class="stat-value" data-target="320">0</div>
      <div class="stat-label">Voluntários</div>
    </div>
    <div class="stat">
      <div class="stat-value" data-target="42">0</div>
      <div class="stat-label">Eventos realizados</div>
    </div>
  </div>
</section>

<!-- PARTNERS -->
<section class="partners container" aria-label="Parceiros">
  <h3>Parceiros</h3>
  <div class="partners-grid">
    <img src="{{ asset('folderImages/partner1.webp') }}" alt="Parceiro 1">
    <img src="{{ asset('folderImages/partner2.webp') }}" alt="Parceiro 2">
    <img src="{{ asset('folderImages/partner3.webp') }}" alt="Parceiro 3">
    <img src="{{ asset('folderImages/partner4.webp') }}" alt="Parceiro 4">
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials container" aria-label="Depoimentos">
  <h3>O que falam sobre nós</h3>
  <div class="carousel" id="testi-carousel">
    <div class="slide active">
      <p>"A iniciativa transformou nosso laboratório da escola!"</p>
      <strong>— Escola Estadual Fulano</strong>
    </div>
    <div class="slide">
      <p>"Doaram notebooks em perfeito estado para o projeto social."</p>
      <strong>— ONG RedeTech</strong>
    </div>
    <div class="slide">
      <p>"Ótima organização e transparência nas arrecadações."</p>
      <strong>— Maria, voluntária</strong>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq container" aria-label="Perguntas frequentes">
  <h3>Perguntas frequentes</h3>
  <div class="accordion">
    <button class="acc-head">Como faço para doar um equipamento?<span class="chev">▸</span></button>
    <div class="acc-panel">Veja a lista de pontos de coleta ou preencha o formulário de voluntário que vamos buscar.</div>

    <button class="acc-head">Vocês aceitam baterias e pilhas?<span class="chev">▸</span></button>
    <div class="acc-panel">Pilhas e baterias têm logística especial — indicamos pontos de coleta específicos.</div>

    <button class="acc-head">Como me torno voluntário?<span class="chev">▸</span></button>
    <div class="acc-panel">Clique em "Quero ser voluntário" no topo e preencha o formulário.</div>
  </div>
</section>

<!-- NEWSLETTER + VOLUNTEER CTA -->
<section class="cta container">
  <div class="cta-grid">
    <form action="" method="POST" class="newsletter-form">
      @csrf
      <label for="nl-email">Receba novidades</label>
      <div class="nl-row">
        <input id="nl-email" name="email" type="email" placeholder="seu@exemplo.com" required>
        <button class="btn btn-primary" type="submit">Inscrever</button>
      </div>
    </form>

    <div class="volunteer-cta">
      <h4>Quer ajudar na prática?</h4>
      <p>Junte-se ao time de voluntários e participe das próximas coletas.</p>
      <button class="btn" id="open-volunteer">Quero ser voluntário</button>
    </div>
  </div>
</section>

<!-- VOLUNTEER MODAL -->
<div class="modal" id="vol-modal" aria-hidden="true">
  <div class="modal-content" role="dialog" aria-modal="true">
    <button class="modal-close" id="close-vol">✕</button>
    <h3>Inscrição de Voluntário</h3>
    <form action="" method="POST">
      @csrf
      <label>Nome <input type="text" name="nome" required></label>
      <label>Telefone <input type="text" name="telefone"></label>
      <label>Disponibilidade <input type="text" name="disponibilidade"></label>
      <div class="modal-actions">
        <button class="btn btn-primary" type="submit">Enviar</button>
        <button class="btn btn-ghost" type="button" id="close-vol-2">Cancelar</button>
      </div>
    </form>
  </div>
</div>

<!-- BACK TO TOP -->
<button id="back-to-top" title="Voltar ao topo">↑</button>

  <footer class="site-footer">
    <div class="container footer-inner">
      <p>© <span id="year"></span> TI Green — todos os direitos reservados.</p>
      <div class="social">
        <span class="material-symbols-outlined">share</span>
        <span class="material-symbols-outlined">favorite</span>
        <span class="material-symbols-outlined">support</span>
      </div>
    </div>
  </footer>

  <!-- Small script para detalhes UX (anima a barra e atualiza ano) -->
  <script>
    (function(){
      // seta ano no footer
      document.getElementById('year').textContent = new Date().getFullYear();

      // animação simples da progress bar
      const progress = document.getElementById('donation-progress');
      const collectedEl = document.getElementById('collected');
      const start = 0;
      const end = Number(progress.value);
      const max = Number(progress.max);
      let cur = start;
      const step = Math.max(1, Math.floor(end / 30));

      const fmt = (n) => {
        // formata em reais simples (não é i18n completa)
        return 'R$ ' + n.toLocaleString('pt-BR', {minimumFractionDigits: 2, maximumFractionDigits: 2});
      };

      const interval = setInterval(() => {
        cur = Math.min(end, cur + step);
        progress.value = cur;
        collectedEl.textContent = fmt(cur);
        if (cur >= end) clearInterval(interval);
      }, 16);
    })();
  </script>
</body>
</html>
