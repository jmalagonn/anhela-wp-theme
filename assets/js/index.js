const swiperSentences = () => {
  let swiperSentences = document.querySelector(".swiper-container.sentences");
  
  if(swiperSentences){
    swiperSentences = new Swiper('.swiper-container.sentences', {
      loop: true,
      speed: 1000,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      }
    })
  }
}

const showMenu = () => {
  const menuIcon = document.querySelector(".menu-icon");
  if(menuIcon){
    menuIcon.addEventListener('click', () => {
      menuIcon.classList.toggle('show');
  
      if(document.querySelector(".menu-section .menu-list.menu-list--hidden")){
        document.querySelector(".menu-section .menu-list.menu-list--hidden").classList.remove('menu-list--hidden');
        document.querySelector(".menu-section").style.backgroundColor = 'rgba(96, 97, 97, .75)';
      } else {
        document.querySelector(".menu-section .menu-list").classList.add('menu-list--hidden');
        document.querySelector(".menu-section").style.backgroundColor = 'transparent';
      }
    })
  }
}

showMenu();
swiperSentences();
