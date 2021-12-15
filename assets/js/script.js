// insert data
const motif = document.querySelector('.showhiddenmotif');
const warna = document.querySelector('.showhiddenwarna');
const slide = document.querySelectorAll('.showhiddenslide');
const checkmotif = document.querySelector('.checkmotif');
const checkwarna = document.querySelector('.checkwarna');
const checkslide = document.querySelector('.slidecheck');
const stok = document.querySelector('.stokbarang');

// update data
const motifu = document.querySelector('.motifupdate');
const warnau = document.querySelector('.warnaupdate');
const slideu = document.querySelectorAll('.showhiddenupdate');
const checkmotifu = document.querySelector('.cekmotifupdate');
const checkwarnau = document.querySelector('.cekwarnaupdate');
const checkslideu = document.querySelector('.cekslideupdate');
const stoku = document.querySelector('.stokupdate');

// insert data
checkmotif.addEventListener('click', function(){
    if(checkmotif.checked){
       stok.classList.add('d-none');
       motif.classList.remove('d-none');
    }else{
       motif.classList.add('d-none');
       stok.classList.remove('d-none');
    }
});

checkwarna.addEventListener('click', function(){
    if(checkwarna.checked){
       warna.classList.remove('d-none');
       stok.classList.add('d-none');
    }else{
       warna.classList.add('d-none');
       stok.classList.remove('d-none');
    }
});

checkslide.addEventListener('click', function(){
    if(checkslide.checked){
       slide[0].classList.add('d-none');
       slide[1].classList.remove('d-none');
    }else{
       slide[0].classList.remove('d-none');
       slide[1].classList.add('d-none');
    }
});

// update data
checkmotifu.addEventListener('click', function(){
    if(checkmotifu.checked){
       stoku.classList.add('d-none');
       motifu.classList.remove('d-none');
    }else{
       motifu.classList.add('d-none');
       stoku.classList.remove('d-none');
    }
});

checkwarnau.addEventListener('click', function(){
    if(checkwarnau.checked){
       warnau.classList.remove('d-none');
       stoku.classList.add('d-none');
    }else{
       warnau.classList.add('d-none');
       stoku.classList.remove('d-none');
    }
});

checkslideu.addEventListener('click', function(){
    if(checkslideu.checked){
       slideu[0].classList.add('d-none');
       slideu[1].classList.remove('d-none');
    }else{
       slideu[0].classList.remove('d-none');
       slideu[1].classList.add('d-none');
    }
});



$(document).ready( function () {
    $('#myTable').DataTable();
} );




