(function(){'use strict';
const button=document.querySelector('.jgbb-mobile-toggle');
const nav=document.getElementById('jgbb-navigation');
if(button && nav){button.addEventListener('click',()=>{const open=button.getAttribute('aria-expanded')==='true';button.setAttribute('aria-expanded',String(!open));nav.classList.toggle('is-open',!open);document.body.classList.toggle('jgbb-menu-open',!open)});nav.addEventListener('click',event=>{if(event.target.closest('a')){nav.classList.remove('is-open');button.setAttribute('aria-expanded','false');document.body.classList.remove('jgbb-menu-open')}})}
})();
