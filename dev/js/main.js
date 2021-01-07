import { menu, fixedHeader, menuItemHover } from './components/header';

menu();
fixedHeader();
menuItemHover();



/* Helpers */
function isMobile() {
  return window.innerWidth <= 1024 ? true : false;
}