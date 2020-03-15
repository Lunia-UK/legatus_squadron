<script>
// Bloc acces
let rapport_mission = document.querySelector("#rapport_mission")
let gestion_membres = document.querySelector("#gestion_membres")
let rapport_mission_icon = document.querySelector("#svg-fill-rapport")
let gestion_membres_icon = document.querySelector("#svg-fill-gestion-membres")
let gestion_membres_icon2 = document.querySelector("#svg-fill-gestion-membres2")
// Academie group Acces
if (<?php // echo $_SESSION['id_groupe_principal']; ?> 0 == 0){
  rapport_mission.href = ''
  rapport_mission.classList.add('blocked')
  rapport_mission_icon.classList.remove('svg-fill')
}

// Lietenant group Acces
if (<?php // echo $_SESSION['rank']; ?> 0 < 7){
  gestion_membres.href = ''
  gestion_membres.classList.add('blocked')
  gestion_membres_icon.classList.remove('svg-fill')
  gestion_membres_icon2.classList.remove('svg-fill')
}


// Animation menu
let arrow = document.querySelector('.arrow');
let nav = document.querySelector('.block-nav');
let ul = document.querySelector('.list-menu-admin');
let containerAdm = document.querySelector('.container-adm');
let link = document.querySelectorAll('.link-nenu-adm');

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
</script>