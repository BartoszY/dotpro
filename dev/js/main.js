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



// load more modules on main LP
if (document.body.classList.contains('page-template-template-foto')) {
  const loadMoreModulesButton = document.querySelector('.load-more-photos');
  const moreModulesWrapper = document.querySelector('.more-modules-wrapper');

  if (loadMoreModulesButton && moreModulesWrapper) {
    loadMoreModulesButton.addEventListener('click', () => {
      loadMoreModulesButton.classList.add('load-more-photos--active');
      moreModulesWrapper.classList.add('more-modules-wrapper--active');
    });
  }
}


// load more modules after 10 modules
const showLoadMoreAfterIndex = 9;

if (document.body.classList.contains('page-template-template-foto-flex')) {
  const flexibleContentWrapper = document.querySelector('.flexible-content');

  if (flexibleContentWrapper.children) {
    if (flexibleContentWrapper.children.length > showLoadMoreAfterIndex + 1) {
      let childrenIndex = 0;
  
      for (const module of flexibleContentWrapper.children) {
        if (childrenIndex == showLoadMoreAfterIndex) {
          // dodajemy strzałkę
          let loadMoreHtml = `<div class="load-more-photos-wrapper" data-aos="fade-up" data-aos-delay="300">
            <button class="load-more-photos"><img src="/wp-content/themes/dotpro/prod/img/arrow.svg" alt="Load more"></button>
          </div>`;
          
          module.insertAdjacentHTML('afterend', loadMoreHtml);
  
          const loadMoreModulesButton = document.querySelector('.load-more-photos');
          loadMoreModulesButton.addEventListener('click', () => {
            loadMoreModulesButton.classList.add('load-more-photos--active');
  
            for (const module of flexibleContentWrapper.children) {
              module.style.visibility = null;
              module.style.overflow = null;
              module.style.maxHeight = null;
              module.style.margin = null;
            }
          });
  
        } else if (childrenIndex > showLoadMoreAfterIndex) {
          // ukrywamy moduły
          if (!module.classList.contains('load-more-photos-wrapper')) {
            module.style.visibility = 'hidden';
            module.style.overflow = 'hidden';
            module.style.maxHeight = 0;
            module.style.margin = 0;
          }
        }
  
        childrenIndex++;
      }
    }
  }
}