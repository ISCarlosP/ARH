

const floatNav = document.querySelector('#floatNav')

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


