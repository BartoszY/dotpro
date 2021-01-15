import { menu, fixedHeader, menuItemHover } from './components/header';

menu();
fixedHeader();
menuItemHover();

AOS.init({
  disable: function() {
    var maxWidth = 768;
    return window.innerWidth < maxWidth;
  }
});


const scrollToTopButton = document.querySelector('.scroll-to-top');
if (scrollToTopButton) {
  scrollToTopButton.addEventListener('click', () => {
    window.scrollTo(0, 0);
  });
}