const swiperSentences = () => {
  let swiperSentences = document.querySelector(".swiper-container.sentences");

  if (swiperSentences) {
    swiperSentences = new Swiper(".swiper-container.sentences", {
      loop: true,
      speed: 1000,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
    });
  }
};

const showMenu = () => {
  const menuIcon = document.querySelector(".menu-icon");
  if (menuIcon) {
    menuIcon.addEventListener("click", () => {
      document.querySelector(".menu-section").classList.toggle("show");
    });
  }
};

const menuMobilePosition = () => {
  document.addEventListener("scroll", (e) => {
    if (document.querySelector("#wpadminbar")) {
      if (window.innerWidth < 600) {
        const menuBar = document.querySelector(".menu-section");

        if (window.scrollY < 46) {
          menuBar.style.top = 46 - window.scrollY + "px";
        } else {
          menuBar.style.top = "0";
        }
      }
    }
  });
};

showMenu();
swiperSentences();
menuMobilePosition();
