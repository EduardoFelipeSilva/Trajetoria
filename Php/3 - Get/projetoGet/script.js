let btnDark = document.querySelector('#btnDark')
let body = document.querySelector('body')


btnDark.addEventListener('click', ()=>{
    console.log ("clicou")
   document.body.classList.toggle('dark-mode');
})