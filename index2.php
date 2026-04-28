<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bioprotec Dedetizadora</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f5f7f6;
    }

    /* NAVBAR */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 8%;
      background: white;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .logo {
      font-size: 24px;
      font-weight: 800;
      color: #1e3a5f;
    }

    .logo span {
      color: #2bb673;
    }

    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #1e3a5f;
      font-weight: 500;
    }

    .btn-whatsapp {
      background: #2bb673;
      color: white;
      padding: 10px 18px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 600;
    }

    /* HERO */
    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 80px 8%;
      background: linear-gradient(120deg, #ffffff 40%, #dff5ea 100%);
    }

    .hero-text {
      max-width: 50%;
    }

    .hero-text h1 {
      font-size: 48px;
      color: #1e3a5f;
      line-height: 1.2;
    }

    .hero-text h1 span {
      color: #2bb673;
    }

    .hero-text p {
      margin: 20px 0;
      font-size: 18px;
      color: #555;
    }

    .buttons {
      margin-top: 20px;
    }

    .btn {
      padding: 12px 22px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      margin-right: 10px;
    }

    .btn-primary {
      background: #2bb673;
      color: white;
    }

    .btn-outline {
      border: 2px solid #2bb673;
      color: #2bb673;
    }

    /* HERO IMAGE */
    .hero-img {
      position: relative;
    }

    .hero-img img {
      width: 400px;
    }

    .pest {
      position: absolute;
      width: 120px;
    }

    .pombo {
      bottom: -10px;
      left: -60px;
    }

    .morcego {
      top: -40px;
      left: 50px;
    }

    .escorpiao {
      bottom: -20px;
      right: -40px;
    }

    /* BENEFITS */
    .benefits {
      background: white;
      margin: -40px auto;
      width: 85%;
      border-radius: 15px;
      display: flex;
      justify-content: space-around;
      padding: 25px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }

    .benefit {
      text-align: center;
      max-width: 200px;
    }

    .benefit h3 {
      color: #2bb673;
      margin-bottom: 5px;
    }

    .benefit p {
      font-size: 14px;
      color: #666;
    }

    /* FOOTER CTA */
    .cta {
      background: linear-gradient(90deg, #0e2a47, #1b5e4b);
      color: white;
      padding: 60px 8%;
      margin-top: 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .cta h2 {
      font-size: 28px;
    }

  </style>
</head>
<body>

<header>
  <div class="logo"><span>BIO</span>PROTEC</div>

  <nav>
    <a href="#">Início</a>
    <a href="#">Sobre</a>
    <a href="#">Serviços</a>
    <a href="#">Pragas</a>
    <a href="#">Contato</a>
  </nav>

  <a href="#" class="btn-whatsapp">WhatsApp</a>
</header>

<section class="hero">

  <div class="hero-text">
    <h1>Ambientes <span>protegidos</span><br> livres de pragas</h1>

    <p>
      Especialistas no controle de morcegos, pombos e escorpiões.
      Protegemos sua casa, sua família e seu negócio.
    </p>

    <div class="buttons">
      <a href="#" class="btn btn-primary">Fale no WhatsApp</a>
      <a href="#" class="btn btn-outline">Nossos Serviços</a>
    </div>
  </div>

  <div class="hero-img">
    <img src="https://cdn-icons-png.flaticon.com/512/3050/3050153.png" alt="Técnico">

    <!-- PRAGAS -->
    <img class="pest pombo" src="https://cdn-icons-png.flaticon.com/512/616/616490.png">
    <img class="pest morcego" src="https://cdn-icons-png.flaticon.com/512/616/616430.png">
    <img class="pest escorpiao" src="https://cdn-icons-png.flaticon.com/512/616/616408.png">
  </div>

</section>

<section class="benefits">
  <div class="benefit">
    <h3>Proteção</h3>
    <p>Ambientes livres de pragas</p>
  </div>

  <div class="benefit">
    <h3>Sustentável</h3>
    <p>Métodos seguros e ecológicos</p>
  </div>

  <div class="benefit">
    <h3>Segurança</h3>
    <p>Equipe especializada</p>
  </div>

  <div class="benefit">
    <h3>Atendimento</h3>
    <p>Rápido e eficiente</p>
  </div>
</section>

<section class="cta">
  <h2>Mais de 10 anos protegendo sua família</h2>
  <a href="#" class="btn btn-primary">Solicitar Orçamento</a>
</section>

</body>
</html>