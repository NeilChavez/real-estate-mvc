
const d = document;
const $ = (selector) => {
  const element = d.querySelector(selector)
  if (element) return element
  throw new Error(
    `Something went wrong, make sure that ${element} exists or is typed correctly`
  )
}


const toogleMenu = () => { 
  const $header = $('.header');
  $header.classList.toggle('active');
}

document.addEventListener('DOMContentLoaded', () => {
  //call here the functions
  d.addEventListener("click", (e) => { 
    
    if (e.target.matches('#hamburger-1') || e.target.matches('#hamburger-1 *' )) {
       toogleMenu();
    }
    
  })
})
