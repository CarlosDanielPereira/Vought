// Usando 'const' para referências de elementos que não mudam
const slides = document.querySelector(".slides");
const items = document.querySelectorAll(".slides a");
const prevBtn = document.getElementById("prev");
const nextBtn = document.getElementById("next");

// Largura fixa de 600px, conforme definido no seu CSS (home.css)
const slideWidth = 900; 
let currentIndex = 0; // Usando 'currentIndex' para clareza

function showSlide() {
    // Aplica o deslocamento: (índice * largura)
    slides.style.transform = `translateX(${-currentIndex * slideWidth}px)`;
}

// Botão PRÓXIMO: Avança o índice e volta para 0 se chegar ao final (loop)
nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % items.length;
    showSlide();
});

// Botão ANTERIOR: Retrocede o índice. Adiciona items.length antes de aplicar o módulo 
// para garantir que o resultado seja sempre um índice positivo (loop reverso)
prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    showSlide();
});

// Inicializa o carrossel na primeira imagem (índice 0)
showSlide();