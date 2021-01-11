import { menu, fixedHeader, menuItemHover } from './components/header';

menu();
fixedHeader();
menuItemHover();

AOS.init({
  // duration: 400,
  disable: function() {
    var maxWidth = 768;
    return window.innerWidth < maxWidth;
  }
});

/* Helpers */
// function isMobile() {
//   return window.innerWidth <= 1024 ? true : false;
// }