let imagenes=[1,2,3,4,5,6,7,8,9,10,11,12];
let gal= document.getElementById('galeria');

for(imagen of imagenes){
    galeria.innerHTML +=`
    <div class="card justify-content-evenly bg-transparent" style="margin:1em;">
        <a href="#" data-bs-toggle="modal" data-bs-target="#imagen${imagen}" >
            <img src="../img/galeria/${imagen}.jpg" alt="imagen galeria" class="card-img-top" loading="lazy" >
        </a>
    </div>
    <div class="modal fade" id="imagen${imagen}" tabindex="-1" role="dialog" aria-labelledby="imagen" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered" role="document">
              <img src="../img/galeria/${imagen}.jpg" class="img-fluid rounded" alt="imagen galeria" loading="lazy"> 
     </div>        
    `;}