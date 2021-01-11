const fixedHeader = () => {
  const header = document.querySelector('.header');

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 250) {
      // header.classList.add('header--fixed');
      document.body.classList.add('page-scrolled');
    }
    else {
      // header.classList.remove('header--fixed');
      document.body.classList.remove('page-scrolled');
    }
  });
}

const menu = () => {
  const burger = document.querySelector('[data-burger]');

  burger.addEventListener('click', () => {
    document.body.classList.toggle('nav-active');
  });

  // const menuWrapper = document.querySelector('.header__nav__menu');
  // menuWrapper.addEventListener('click', e => {
  //   if (e.target.nodeName == 'A') {
  //     document.body.classList.remove('nav-active');
  //   }
  // });
}

const menuItemHover = () => {
  const menuItems = document.querySelectorAll('[data-hover-img]');

  let hoverMenuImageVisible = false;

  if (menuItems) {
    menuItems.forEach(item => {
      item.addEventListener('mouseenter', () => {
        const hoverImgUrl = item.dataset.hoverImg;

        if (hoverImgUrl) {
          if (item.parentElement.parentElement.className == 'menu-menu-first-container') {
            if (!hoverMenuImageVisible) {
              hoverMenuImageVisible = true;

              document.querySelector('.nav__bg__item--first').style.backgroundImage = 'url('+hoverImgUrl+')';
              setTimeout(() => {
                document.querySelector('.nav__bg__item--first').style.opacity = 0.4;
              }, 200);
            }
          }
        }
      });

      item.addEventListener('mouseleave', () => {
        document.querySelector('.nav__bg__item--first').style.opacity = 0;
        hoverMenuImageVisible = false;
      });
    });
  }
}

export { fixedHeader, menu, menuItemHover };