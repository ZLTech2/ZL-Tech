// efeito que some os elementos

// criação de um evento
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible');
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    const fadeInElements = document.querySelectorAll('.fade-in');
    fadeInElements.forEach(element => observer.observe(element));

    var myIndex = 0;
    carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);
    }

});

const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');

hamburger.addEventListener('click', () => {
    menu.classList.toggle('show');
});

document.getElementById('contatoForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('cadastro.act.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro HTTP: ' + response.status); // Lança erro se o status não for "ok"
        }
        return response.json(); // Tenta converter para JSON apenas se o status for "ok"
    })
    .then(data => {
        console.log(data);
        document.getElementById('msg').innerText = data.msg;
        this.reset();
    })
    .catch(error => {
        console.error('Erro:', error);
        document.getElementById('msg').innerText = 'Ocorreu um erro ao enviar o formulário';
    });
});

// Acessa o botão de alternância de tema
const toggleButton = document.getElementById('toggle-theme');

// Verifica se há um tema salvo no localStorage
const savedTheme = localStorage.getItem('theme');

// Se um tema foi salvo, aplica esse tema
if (savedTheme) {
    document.body.classList.add(savedTheme);
} else {
    // Se nenhum tema foi salvo, define o modo claro como padrão
    document.body.classList.add('light-mode');
}

// Função para alternar entre os temas
toggleButton.addEventListener('click', () => {
    if (document.body.classList.contains('light-mode')) {
        // Mudar para modo escuro
        document.body.classList.remove('light-mode');
        document.body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark-mode'); // Salva a escolha do tema
    } else {
        // Mudar para modo claro
        document.body.classList.remove('dark-mode');
        document.body.classList.add('light-mode');
        localStorage.setItem('theme', 'light-mode'); // Salva a escolha do tema
    }
});
