//Toggle sidebar
function toggleSidebar() {
   document.querySelector('body').classList.toggle('sidebar-mini');
}

//Togle Navbar
function toggleNavbar() {
   document.querySelector('.navbar-nav').classList.toggle('show');
}

//Toggle menu
document.querySelector('.dropdown-toggle').addEventListener('click', function () {
   document.querySelector('.dropdown-menu').classList.toggle('show');
});

(function () {
   'use strict'

   if (window.innerWidth < 768) {
      document.querySelector('body').classList.add('sidebar-mini')
   }

   var dropdowns = document.querySelectorAll('.dropdown-toggle')

   Array.prototype.forEach.call(dropdowns, function (dropdown) {
      dropdown.addEventListener('click', function (event) {
         event.preventDefault()
         var isOpen = this.parentElement.classList.contains('show')
         if (isOpen) {
            this.parentElement.classList.remove('show')
            this.setAttribute('aria-expanded', 'false')
            this.nextElementSibling.classList.remove('show')
         } else {
            this.parentElement.classList.add('show')
            this.setAttribute('aria-expanded', 'true')
            this.nextElementSibling.classList.add('show')
         }
      })

   })
   document.addEventListener('click', function (event) {
      var target = event.target
      if (!target.closest('.dropdown')) {
         var dropdowns = document.querySelectorAll('.dropdown')
         Array.prototype.forEach.call(dropdowns, function (dropdown) {
            dropdown.classList.remove('show')
            dropdown.querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'false')
            dropdown.querySelector('.dropdown-menu').classList.remove('show')
         })
      }
   })
   document.addEventListener('keydown', function (event) {
      var dropdown = event.target.closest('.dropdown')
      if (event.key === 'Escape' && dropdown) {
         dropdown.classList.remove('show')
         dropdown.querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'false')
         dropdown.querySelector('.dropdown-menu').classList.remove('show')
         dropdown.querySelector('.dropdown-toggle').focus()
      }
   })
})()