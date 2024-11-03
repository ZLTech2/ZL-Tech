<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <title>ZL Tech</title>
    
</head>
<body>
    <header>
        <nav>
        <div class="nav-list">
                <div class="logo">
                    <a href="./index.html"><img src="./assets/images/logo_branca.png" alt="Logo da ZL Tech"></a>
                </div>

                <div class="hamburger" id="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>

                <ul class="menu" id="menu">
                    <li><a href="#produtos">Produtos</a>
                        <ul>
                            <li><a href="#">Negócio na Área</a></li>
                        </ul>
                    </li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#equipe">Equipe</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="slideshow">
            <div class="fade-in">
                <img src="./assets/images/Fechamento.png" alt="Imagem de duas pessoas apertando as mãos">
                <div class="texto">
                    <p>Impulsione suas vendas</p>
                    <a href="#"><button type="button">Cadastre-se</button></a>
                </div>
            </div>
        </div>
        
        <div class="container">
            <section id="sobre">
                <div class="tech">
                <h1 class="fade-in">Quem somos?</h1>
                <img src="./assets/images/logo.png" alt="Logo da ZL Tech" class="fade-in">
                <p class="fade-in">
                    A ZL Tech é uma empresa criada pelos alunos Artur Normandia Silva e Rafael Benício Santos da Fatec Ferraz de Vasconcelos. A empresa foi criada com o slogan "Mesmo distante, ainda pode chegar longe.", que leva em consideração, as pequenas empresas que possam divulgar seu negócio no nosso serviço e assim alavancar suas vendas.
                </p>
                </div>
            </section>
            </div>

        <section id="produtos">
            <div class="fade-in" id="image">
            <h1 class="fade-in">Produto da ZL Tech</h1>
        </div>
            <h2 class="fade-in">Negócio na Área</h2>
            <p class="fade-in">Principal produto da empresa, uma plataforma de divulgação para pequenos negócios na zona Leste de São Paulo.</p>
            <img src="./assets/images/logo rd.png" alt="Logo negócio na área" class="fade-in">
            <a href="#"><button type="button" class="fade-in"">Saiba mais</button></a>
        </section>
 
        <div class="container">
            <div class="title" id="equipe">
                <h1 class="fade-in">Nossa equipe</h1>
            </div>
        </div>

        <div class="container">
            <section id="autores">
                <div class="autor">
                    <p class="fade-in"> Artur Normandia </p>
                    <p class="fade-in">Front-end </p>
                    <img src="./assets/images/foto artur.jpg" alt="Foto dp Artur" class="fade-in">
                <div class="icons">
                    <p class="fade-in"><a href="https://www.linkedin.com/in/artur-normandia-64a865265/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a></p>
                    <p class="fade-in"><a href="https://www.instagram.com/artuzaou/ "target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></p>
                    <p class="fade-in"><a href="https://github.com/ArturNSilvaa" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-github"></i></a></p>
                </div>
            </div>
            <div class="autor">
                    <p class="fade-in">Rafael Benício</p>
                    <p class="fade-in">Full Stack</p>
                    <img src="./assets/images/foto1.jpg" alt="Foto do Rafael" class="fade-in">
                <div class="icons">
                    <p class="fade-in"><a href="https://www.linkedin.com/in/rafael-ben%C3%ADcio-santos-b2a8a3235/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a></p>
                    <p class="fade-in"><a href="https://www.instagram.com/rafael.b_/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></p>
                    <p class="fade-in"><a href="https://github.com/rafaeelb" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-github"></i></a></p>
                </div>
            </div>
            </section>
        </div>

        <div id="fale-conosco" class="fade-in">
            <h1>Fale conosco</h1>
        </div>

        <div class="container">
            <section id="contato" class="fade-in">
                <?php ?>
                
                <form action="./php/cadastro.act.php" method="post" id="contatoForm">
                    <div class="formulario">    
                        <label>Nome:</label>
                            <input type="text" placeholder="Digite seu nome.." name="nome" required>
                        <label for="email">Email:</label>
                            <input type="email" placeholder="Digite seu email.." name="email" required>
                        <label for="telefone">Telefone:</label>
                            <input type="tel" placeholder="Digite o número de telefone" name="telefone" required>
                        <label for="mensagem">Deixe sua mensagem:</label>
                            <textarea name="mensagem" id="txt_contato" placeholder="Digite sua mensagem" maxlength="200" required></textarea>
                        <button type="submit">Enviar</button>
                    </div>
                    <div id="msg"></div>
                </form> 
            </section>
        </div>
    </main>
        <footer class="rodape">
            <div class="logo-rodape">
                <img src="./assets/images/logo_branca.png" alt="Logo da ZL Tech">
                <div class="texto-rodape">
                    <p>&copy;ZL Tech: Todos os direitos reservados.</p>
                    <div class="redes-sociais">
                        <span><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
                        <span><a href="#"><i class="fa-brands fa-facebook"></i></a></span>
                        <span><a href="#"><i class="fa-brands fa-youtube"></i></a></span>
                    </div>
                </div>
            </div>
        </footer>
 
    <script src="./js/script.js"></script>
</body>
</html>