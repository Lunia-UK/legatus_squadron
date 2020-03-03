document.getElementById("btn-filter").addEventListener("click", displayFilter);
    function displayFilter() {
        document.querySelector(".filter-container-mobile").classList.toggle("btn-filter-open");
        var x = document.querySelector(".filtre-mobile");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
}