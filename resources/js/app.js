import Splide from '@splidejs/splide';



var btn = document.getElementById("whatsapp")
if(btn){
    btn.addEventListener('click', () => {
        window.location.href = 'https://api.whatsapp.com/send?phone=6285346741110&text=Thank you for your time, I look forward ...';
    });
}
  


function toggleMenu(){
    const navToggle = document.getElementsByClassName("js-toggle");
    for(let i = 0; i < navToggle.length; i++){
        navToggle.item(i).classList.toggle("hidden");
    }
    
}

document.getElementById("hamburger").addEventListener("click", toggleMenu)

var options = {
    heightRatio : 0.5,
    width       : '65vw',
    height      : '32vh',
    type        : 'loop',
	perPage     : 1,
	cover       : true,
	// breakpoins: {
	// 	640: {
	// 		perPage: 1,
	// 	}
	// }
}

new Splide( '.splide', options).mount();


var modal = document.getElementById('myModal');
var modalImg = document.getElementById("img01");

var imgs = document.getElementsByClassName('zoom') 
Array(...imgs).forEach(element => {
    element.addEventListener('click',imgonclick)
});


var captionText = document.getElementById("caption");
function imgonclick(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// var img = document.getElementById('myImg');
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }

// var img = document.getElementById('myImg2');
// var modalImg = document.getElementById("img02");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }


var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
    modal.style.display = "none";
  }

