window.addEventListener("scroll", () => {
  const hero = document.querySelector(".hero");
  const title = document.querySelector(".hero-title");
  const character = document.querySelector(".hero-astarion");
  const overlay = document.querySelector(".hero .overlay");

  const scrollY = window.scrollY;
  const heroHeight = hero.offsetHeight;
  const progress = Math.min(scrollY / heroHeight, 1); // 0 → 1

  // Le titre monte
  title.style.transform = `translate(-50%, calc(-50% - ${progress * 100}px))`;
  title.style.opacity = `${1 - progress * 1.2}`;

  // L’image d’Astarion descend
  character.style.transform = `translate(-50%, ${progress * 100}px)`;
  character.style.opacity = `${1 - progress * 1.2}`;

  // Le fond s’assombrit
  overlay.style.background = `rgba(0, 0, 0, ${progress * 0.8})`;

  // Optionnel : fondu global du hero (légère transition vers section suivante)
  hero.style.filter = `brightness(${1 - progress * 0.3})`;
});