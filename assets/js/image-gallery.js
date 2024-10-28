const left=document.querySelector('.galleryModal span.left');
const right=document.querySelector('.galleryModal span.right');
const modalImg=document.querySelector('.galleryModal .img-modal img');
const modal=document.querySelector('.galleryModal');
const close=document.querySelector('.closeBtn');

const allImg=document.querySelectorAll('.imgEffect4 a img');

let iterator=0;
for(let i=0;i<allImg.length;i++){
   allImg[i].addEventListener('click',function(){
     const urlImg=this.getAttribute('src');
     // alert(urlImg);
     modal.classList.add('show');
     modalImg.setAttribute('src',urlImg);
     iterator=i;
});
}

left.addEventListener('click',function(){
     iterator===0?iterator=allImg.length-1:iterator-=1;
     const urlImg=allImg[iterator].getAttribute('src');
     modalImg.setAttribute('src',urlImg);
});
right.addEventListener('click',function(){
 iterator===allImg.length-1?iterator=0:iterator+=1;
 const urlImg=allImg[iterator].getAttribute('src');
 modalImg.setAttribute('src',urlImg);
});

close.addEventListener('click',function(){
 modal.classList.remove('show');
});