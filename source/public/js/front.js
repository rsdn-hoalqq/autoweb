$('[data-toggle="tooltip"]').tooltip(); 
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

// var slideIndex = 1;

// // showSlides(slideIndex);
// showSlidesHeader(slideIndex);

// function plusSlides(n,header = '') {
//   if(header == ''){
//     showSlides(slideIndex += n);
//   }else{
//     showSlidesHeader(slideIndex += n);
//   }  
// }

// function currentSlide(n,header = '') {
//   if(header == ''){
//     showSlides(slideIndex = n);
//   }else{
//     showSlidesHeader(slideIndex = n);
//   }  
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("demo");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
// }
// function showSlidesHeader(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlidesHeader");
//   var dots = document.getElementsByClassName("demoHeader");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
// }