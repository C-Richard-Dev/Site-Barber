<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="static/styles/style.css">
    <title>Barbearia</title>
</head>
<body class="bg-black text-white">
    <header>
        <nav class="navbar navbar-expand-lg  bg-dark navbar-dark">
            <div class="container-fluid">
                <h1 class="navbar-brand" href="#">Minha Barbearia</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link active" href="#inicio">Início</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>

    <section class="from-left position-relative text-white" style="height: 70vh; background-image: url('static/imgs/banner/barbeiro_banner_menor.png'); background-size: cover; background-position: center;">
      <!-- Overlay escuro -->
      <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>

      <!-- Conteúdo centralizado -->
      <div class="container h-100 d-flex flex-column justify-content-center align-items-center position-relative text-center">
        <h1 class="from-left display-3 fw-bold">Bem-vindo à Minha Barbearia</h1>
        <p class="lead fs-4">A melhor barbearia do centro de Belém.</p>
        <a href="#servicos" class="btn btn-light btn-lg mt-4 shadow">Ver Serviços</a>
      </div>
    </section>
      <br>
      <section id='sobre'><h1 class='from-left ms-4'>Sobre Nós</h1></section>
      <p class='from-left lead fs-4 ms-4'>Somos uma barbearia localizada no centro urbano da cidade. Temos um ambiente amigável e muito receptivo para receber você e sua família. Temos mesa de bilhar, TV com canais esportivos, área para jogos e um ambiente devidamente climatizado.
      </p>

      <div id="carouselBarbearia" class="carousel slide my-5" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="static/imgs/ambiente/ambiente.png" class="d-block w-100" style="height: 400px; width: 700px; object-fit: cover;" alt="Ambiente Interno">
      </div>

      <div class="carousel-item">
        <img src="static/imgs/ambiente/entrada.png" class="d-block w-100" style="height: 400px; width: 700px; object-fit: cover;" alt="Área Externa">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBarbearia" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselBarbearia" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    </div>
    
    <h2 class='from-left ms-4'>Nossos Profissionais</h2>
      <br>
      <div class="from-left d-flex justify-content-center flex-wrap gap-4">
        <div class="card bg-white text-dark" style="width: 25rem;">
        <img src="static/imgs/barbeiros/Thomas.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Thomas</h5>
          <p class="card-text">Lorem ipsum dolor obcaecati fugit eriam facere ad ducimus architecto!</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">WhatsApp: 9999-9999</li>
          <li class="list-group-item">Instagram: @thomas</li>
          <li class="list-group-item">Linkedin: Thomas</li>
        </ul>
        </div>

        <div class="card bg-white text-dark" style="width: 25rem;">
        <img src="static/imgs/barbeiros/Mario.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mario</h5>
          <p class="card-text">Lorem ipsum dolor obcaecati fugit eriam facere ad ducimus architecto!</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">WhatsApp: 9999-9999</li>
          <li class="list-group-item">Instagram: @mario</li>
          <li class="list-group-item">Linkedin: Mario</li>
        </ul>
        </div>

        <div class="card bg-white text-dark" style="width: 25rem;">
        <img src="static/imgs/barbeiros/Dani.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Dani</h5>
          <p class="card-text">Lorem ipsum dolor obcaecati fugit eriam facere ad ducimus architecto!</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">WhatsApp: 9999-9999</li>
          <li class="list-group-item">Instagram: @dani</li>
          <li class="list-group-item">Linkedin: Dani</li>
        </ul>
        </div>
        </div>
        <br>
        <br>
        <br>

        <section id='servicos'><h1 class="from-left ms-4 text-white">Serviços</h1></section>
          <br>
          <div class="carousel-container position-relative" style="background-image: url('https://cdn.pixabay.com/photo/2015/10/26/20/46/haircut-1007891_1280.jpg'); background-size: cover; background-position: center 30%;">
            <!-- Overlay escuro -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>
            <div id="carouselServicos" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                  <div class="d-flex justify-content-center gap-4 flex-wrap">
                    <div class="card text-center bg-white text-dark shadow" style="width: 12rem; height: 20rem;">
                      <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title fs-4">Corte Degradê</h5>
                        <h2 class="card-text">R$35,00</h2>
                      </div>
                    </div>
                    <div class="card text-center bg-white text-dark shadow" style="width: 12rem; height: 20rem;">
                      <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title fs-4">Corte Navalhado</h5>
                        <h2 class="card-text">R$40,00</h2>
                      </div>
                    </div>
                    
                  </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                  <div class="d-flex justify-content-center gap-4 flex-wrap">
                    <div class="card text-center bg-white text-dark shadow" style="width: 12rem; height: 20rem;">
                      <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title fs-4">Barba</h5>
                        <h2 class="card-text">R$50,00</h2>
                      </div>
                    </div>
                    <div class="card text-center bg-white text-dark shadow" style="width: 12rem; height: 20rem;">
                      <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title fs-4">Corte Social</h5>
                        <h2 class="card-text">R$25,00</h2>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                  <div class="d-flex justify-content-center gap-4 flex-wrap">
                    <div class="card text-center bg-white text-dark shadow" style="width: 18rem; height: 20rem;">
                      <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title fs-4">Combo Barba + Cabelo</h5>
                        <h2 class="card-text">R$90,00</h2>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <!-- Botões de navegação -->
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselServicos" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselServicos" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
              </button>
            </div>
          </div>
          <br>
          <br>
      <h1 class="from-left ms-4 text-white">Contato</h1>
        <p class="from-left lead fs-4 ms-4">Entre em contato com nosso atendimento direto pelo WhatsApp:</p>
        <!-- Botão do WhatsApp -->
        <div class="from-left ms-4">
          <a href="https://wa.me/5591982473965" target="_blank" class="btn btn-success btn-lg d-inline-flex align-items-center gap-2 shadow">
            <i class="bi bi-whatsapp fs-4"></i>
            Fale Conosco
          </a>
        </div>
        <br>
        <p class="from-left lead fs-4 ms-4">Ou, se preferir, deixe para nós as suas informações de contato no formulário abaixo:</p>

        <section id="contato" class="py-5 bg-black text-white">
          <div class="container">
            <h2 class="text-center mb-4">Fale com a Gente</h2>

            <form action="https://formspree.io/f/{SEU_ID_AQUI}" method="POST" class="bg-white text-black p-4 rounded shadow">
              <!-- Nome -->
              <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" required>
              </div>

              <!-- WhatsApp -->
              <div class="mb-3">
                <label for="contato" class="form-label">WhatsApp</label>
                <input type="tel" class="form-control" id="contato" name="contato" placeholder="(xx) xxxxx-xxxx" required>
              </div>

              <!-- Mensagem -->
              <div class="mb-3">
                <label for="mensagem" class="form-label">Descreva o serviço desejado</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="4" placeholder="Corte, barba, pintura..." required></textarea>
              </div>

              <!-- Botão -->
              <button type="submit" class="btn btn-dark text-white w-100">Enviar</button>
            </form>
          </div>
        </section>



      </main>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="static/scripts/script.js"></script>
</body>
</html>
