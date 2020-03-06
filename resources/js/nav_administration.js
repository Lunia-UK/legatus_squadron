var arrow = document.querySelector('.arrow');
var nav = document.querySelector('.block-nav');
var ul = document.querySelector('.list-menu-admin');
var containerAdm = document.querySelector('.container-adm');
var link = document.querySelectorAll('.link-nenu-adm');

arrow.addEventListener('click', bigMenu );

function bigMenu (){
  nav.classList.toggle('block-nav-big');
  containerAdm.classList.toggle('container-adm-big');
  ul.classList.toggle('list-menu-admin-big');
  document.querySelectorAll('.nav-admin-text').forEach(el => {
    el.classList.toggle('nav-admin-text-big');
  });
  
  document.querySelectorAll('list-menu-admin > li').forEach(x => {
    x.classList.toggle('list-menu-admin-big > li');
  }); 
  link.forEach(y => {
    y.classList.toggle('link-menu-adm-big');
  });
  arrow.classList.toggle('arrow-big');
}