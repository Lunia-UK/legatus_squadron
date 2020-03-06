function search(){
     let textValue, article, input, a, filter;
     input = document.querySelector('.search-bar');
     filter = input.value.toUpperCase();
     article = document.querySelectorAll('article');
     for(i=0; i < article.length; i++){
        a = article[i].getElementsByTagName('a')[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          article[i].style.display = "";
        } else {
          article[i].style.display = "none";
        }
     }
    }