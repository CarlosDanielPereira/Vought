const slides = document.querySelector(".slides");
const items = document.querySelectorAll(".slides a");
const prevBtn = document.getElementById("prev");
const nextBtn = document.getElementById("next");

const slideWidth = 900; 
let currentIndex = 0;

function showSlide() {
    slides.style.transform = `translateX(${-currentIndex * slideWidth}px)`;
}

nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % items.length;
    showSlide();
});

prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    showSlide();
});

// Inicializa o carrossel na primeira imagem (índice 0)

showSlide();

