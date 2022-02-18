const toggleButton = document.getElementsByClassName('toggle-buttonn')[0]
const navbarLinks = document.getElementById('navUl')[0]

toggleButton.addEventListener('click', ()=>{
    navbarLinks.classList.toggle('active')
})