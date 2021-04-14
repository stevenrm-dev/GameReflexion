jQuery(document).ready($ => {
  //Responsive Menu
  $('#menu > ul').slicknav({
    label: '',
    appendTo: $('.contain-menu1')
  });
});

// Agregar posición fija en el header al hacer scroll
window.onscroll = () => {
  const scroll = window.scrollY;
  const headerNav = document.querySelector('.site-header');
  const documentBody = document.querySelector('body');

  //Si la cantidad de scroll es mayor a, agregar una clases
  if(scroll > 80) {
    headerNav.classList.add('fixed-top');
    documentBody.classList.add('ft-activo');
  } else {
    headerNav.classList.remove('fixed-top');
    documentBody.classList.remove('ft-activo');
  }
}
