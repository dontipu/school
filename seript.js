const button = document.querySelector(".bars-icons")
const links = document.querySelector("#navelinks")
button.addEventListener("click",() => {
 if (links.classList.contains('nav-links-small')){
  links.classList.remove('nav-links-small')
  button.innerHTML = '<i class="fa-solid fa-bars fa-2xl"></i>'
 }else {
  links.classList.add('nav-links-small')
  button.innerHTML = '<i class="fa-solid fa-xmark fa-2xl"></i>'
 }
 
})

{/* <i class="fa-solid fa-xmark fa-2xl"></i> */}