(function(){
    var showFilter = function(a, animations){
      if (animations === undefined){
        animations = true
      }
      var li = a.parentNode;
      var div = a.parentNode.parentNode.parentNode.parentNode; 
      var activeFilter = div.querySelector('.filter-content.active') // contenue active
      var target = div.querySelector(a.getAttribute('href')) // contenue a afficher
        if (li.classList.contains('active')){
          return false
        } 
        
        div.querySelector('.filters .active').classList.remove('active')
        li.classList.add('active')
       
        if(animations){
          activeFilter.classList.add('fade')
          activeFilter.classList.remove('in')
          var transitionend = function (){
          this.classList.remove('fade')
          this.classList.remove('active')
          target.classList.add('active')
          target.classList.add('fade')
          target.offsetWidth
          target.classList.add('in')
          activeFilter.removeEventListener('transitionend', transitionend)        
        }
        activeFilter.addEventListener('transitionend', transitionend )
        } else {
          target.classList.add('active')
          activeFilter.classList.remove('active')
        }
        //div.querySelector('.filter-content.active').classList.remove('active')
        //div.querySelector(a.getAttribute('href')).classList.add('active')
  }

    var filters = document.querySelectorAll('.filters a');
    for( var i = 0; i < filters.length; i++){
      filters[i].addEventListener('click', function (e) {
        showFilter(this)
      })
    }


    var hashChange = function (e) {
      var hash = window.location.hash
      var a = document.querySelector('a[href="' + hash + '"]')
      if (a !== null && !a.classList.contains('active')) {
        showFilter(a, e !== undefined)
      }
    }

    window.addEventListener('hashchange', hashChange)
    hashChange()
  })()
