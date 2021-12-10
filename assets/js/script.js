const motif = document.querySelector('.showhiddenmotif');
const warna = document.querySelector('.showhiddenwarna');
const slide = document.querySelectorAll('.showhiddenslide');
const checkmotif = document.querySelector('.checkmotif');
const checkwarna = document.querySelector('.checkwarna');
const checkslide = document.querySelector('.slidecheck');

checkmotif.addEventListener('click', function(){
    motif.classList.toggle('d-none');
});

checkwarna.addEventListener('click', function(){
    warna.classList.toggle('d-none');
});

checkslide.addEventListener('click', function(){
    slide[0].classList.toggle('d-none');
    slide[1].classList.toggle('d-none');
});

$(document).ready( function () {
    $('#myTable').DataTable();
} );

