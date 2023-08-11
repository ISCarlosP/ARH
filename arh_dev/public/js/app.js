

const floatNav = document.querySelector('#floatNav')
/*const elementChild = Array.from(floatNav.children)

elementChild.forEach(element => {

  element.addEventListener('mouseover', (event) => {
      if(!event.target){
        element.style.width = '50px'
      }
      event.target.children[1].style.display = 'block'
  })

})*/

floatNav.children[0].addEventListener('mouseover', () => {
  floatNav.children[0].children[1].style.display = 'block'
  floatNav.children[1].style.width = '50px'
  floatNav.children[2].style.width = '50px'
  floatNav.children[3].style.width = '50px'

})

floatNav.children[0].addEventListener('mouseout', () => {
  floatNav.children[0].children[1].style.display = 'none'
  floatNav.children[1].style.width = 'auto'
  floatNav.children[2].style.width = 'auto'
  floatNav.children[3].style.width = 'auto'
})

floatNav.children[1].addEventListener('mouseover', () => {
  floatNav.children[0].style.width = '50px'
  floatNav.children[1].children[1].style.display = 'block'
  floatNav.children[2].style.width = '50px'
  floatNav.children[3].style.width = '50px'
})

floatNav.children[1].addEventListener('mouseout', () => {
  floatNav.children[0].style.width = 'auto'
  floatNav.children[1].children[1].style.display = 'none'
  floatNav.children[2].style.width = 'auto'
  floatNav.children[3].style.width = 'auto'
})

floatNav.children[2].addEventListener('mouseover', () => {
  floatNav.children[0].style.width = '50px'
  floatNav.children[1].style.width = '50px'
  floatNav.children[2].children[1].style.display = 'block'
  floatNav.children[3].style.width = '50px'
})

floatNav.children[2].addEventListener('mouseout', () => {
  floatNav.children[0].style.width = 'auto'
  floatNav.children[1].style.width = 'auto'
  floatNav.children[2].children[1].style.display = 'none'
  floatNav.children[3].style.width = 'auto'
})

floatNav.children[3].addEventListener('mouseover', () => {
  floatNav.children[0].style.width = '50px'
  floatNav.children[1].style.width = '50px'
  floatNav.children[2].style.width = '50px'
  floatNav.children[3].children[1].style.display = 'block'
})

floatNav.children[3].addEventListener('mouseout', () => {
  floatNav.children[0].style.width = 'auto'
  floatNav.children[1].style.width = 'auto'
  floatNav.children[2].style.width = 'auto'
  floatNav.children[3].children[1].style.display = 'none'
})

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
});
