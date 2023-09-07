
const d = document;
const $ = (selector) => {
  const element = d.querySelector(selector)
  if (element) return element
  throw new Error(
    `Something went wrong, make sure that ${element} exists or is typed correctly`
  )
}


const menuToggleIcon = $('.menu-toggle'),
  headerElement = $('.header')

menuToggleIcon.addEventListener('click', () => {
  headerElement.classList.toggle('open')
})

document.addEventListener('DOMContentLoaded', () => {
  //call here the functions
})
