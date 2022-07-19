var imagenes=[
    '../public/img/img1.jpg','../public/img/img3.jpg','../public/img/img4.jpg','../public/img/img6.jpg','../public/img/img8.jfif','../public/img/img10.jpg'
]
contador = 0;

console.log(contador)
function carrousel(contenedor){
    contenedor.addEventListener('click',e =>{
        let atras = contenedor.querySelector('.atras'),
            adelante = contenedor.querySelector('.adelante'),
            img = contenedor.querySelector('img'),
            tgt = e.target;
            if(tgt==atras){
                if(contador>0){
                    img.src = imagenes[contador-1];
                    contador--;
                }else{
                    img.src = imagenes[imagenes.length-1];
                    contador = imagenes.length-1;
                }
            }else if(tgt==adelante){
                if(contador<imagenes.length-1){
                    img.src = imagenes[contador+1];
                    contador++;
                }else{
                    img.src = imagenes[0];
                    contador=0;
                }
            }
    })
}

document.addEventListener("DOMContentLoaded",()=>{
    const contenedor = document.querySelector('.slideshow');
    const overlay = document.querySelector('.overlay');
    const galeria_imagenes = document.querySelectorAll('.galeria img');
    const img_slideshow = document.querySelector('.slideshow img'); 
    carrousel(contenedor);

    Array.from(galeria_imagenes).forEach(img=>{
        img.addEventListener('click',event=>{
            const imagen_Seleccionada = +event.target.dataset.imgMostrar;
            img_slideshow.src = imagenes[imagen_Seleccionada];
            contador = imagen_Seleccionada;
            overlay.style.opacity = 1;
            overlay.style.visibility = 'visible';
        })
    })

    document.querySelector('.btn_cerrar').addEventListener('click',()=>{
        overlay.style.opacity = 0;
        overlay.style.visibility = 'hidden';
    })
})