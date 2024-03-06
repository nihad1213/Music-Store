const searchIcon = document.querySelector("#search-icon");
const searchInput = document.querySelector("#search-input");

searchIcon.addEventListener("click", ()=>{
   searchInput.classList.toggle("hidden");
   searchInput.classList.toggle("fadeInDown");
   // searchInput.classList.toggle("fadeInOut")
   searchIcon.classList.toggle("active-icon");
})

