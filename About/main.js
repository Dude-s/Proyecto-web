// sidebar toggle
const btnToggle = document.querySelector('.toggle-btn');
const contenido = document.getElementById('contenido');

/*btnToggle.addEventListener('click', function () {
  console.log('clik')
  document.getElementById('sidebar').classList.toggle('active');
  console.log(document.getElementById('sidebar'))
});*/

btnToggle.addEventListener('click', function () {
  document.getElementById('sidebar').classList.toggle('active');
  contenido.classList.toggle('active');
});