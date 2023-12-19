
/* change color on click in nav item
let nav1 = document.querySelectorAll(".ab");
nav1.forEach((i) => {
  i.addEventListener("click", function () {
    nav(nav1);
    i.setAttribute("style", "color:red;font-weight:bold;");
  });
});
function nav(nav1) {
  nav1.forEach((i) => {
    i.setAttribute("style", "color:#23a990;font-weight:normal;");
  });
}
*/

let button = document.querySelectorAll(".btn");
button.forEach((i) => {
  i.addEventListener("click", function () {
    i.setAttribute("style", "pointer-events:none;background-color:grey;");
    let data = i.getAttribute("data_id");
    alert(data + " paid success");
  });
});

let cart = document.querySelectorAll(".add-to-cart");
var j = 1;
cart.forEach((i) => {
  var x = document.getElementById("count").innerHTML;
  i.addEventListener("click", function () {
    document.getElementById("count").innerHTML = j;
    console.log(j);
    j++;
  });
});



var imgId = document.getElementById('slider');
var imgList = ['../photoes/rog_font.webp', '../photoes/2nd_front.webp', '../photoes/front3.jpg','../photoes/macbook.jpg'];
let imgNo = 0;

let carouseId = setInterval(sliderOne, 3000);

function sliderOne() {
  if (imgNo < imgList.length) {
    imgId.setAttribute('src', 'slider/' + imgList[imgNo]);
    imgNo++;
  } else {
    imgNo = 0;
  }
}

imgId.addEventListener("mouseover", function(){
  clearInterval(carouseId);
});

imgId.addEventListener("mouseout", function(){
  carouseId = setInterval(sliderOne, 3000);
});
 
// working with window element and scroll event

const backtoTop = document.querySelector(".to-top");

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
  if (window.scrollY > 900) {
    backtoTop.style.display = "block";
  } else {
    backtoTop.style.display = "none";
  }
}

backtoTop.addEventListener("click", backTOTop);

function backTOTop() {
  window.scrollTo(0, 0);
}

// var toTop = document.getElementById("upperArrow");
// toTop.addEventListener("click",function(){
//   window.scrollTo(0,0);
// });

// let a= document.querySelectorAll('.ab');
// a.forEach((e))=>{
//   addEventListener(())
// }

// var popBoxJs = document.querySelector(".dropdown");
// var nav = document.querySelectorAll(".ab");
// nav.forEach((i)=>{
//   i.addEventListener("click", function () {
//     popBoxJs.style.display = "flex";
//     i.addEventListener("click", function () {
//       popBoxJs.style.display = "none";
//     });
//   });  
// });

// var popup1 = document.querySelectorAll(".popup");
// var popbtn =document.getElementById("popbtn");
// var closebtn = document.querySelector(".close"); // Add this line to select the close button
// popbtn.addEventListener("click",function(){
//   popup1[0].style.display = "block"; // Assuming the first popup element is the one to be shown
// });

// closebtn.addEventListener("click", function() { // Add this event listener for the close button
//   popup1[0].style.display = "none"; // Hide the popup when the close button is clicked
// });

// let popId1 = document.getElementById('popbx');
// let closebtnId = document.getElementById('deleteMeetingClose');
// popId.style.display = "none";

// function showPopup() {
//   popId1.style.display = "block";
//   setTimeout(function() {
//     popId1.style.display = "none";
//   }, 3000);
// }

// window.addEventListener('load', () => {
//   var showOnce = setInterval(showPopup, 2000);
//   closebtnId.addEventListener("click", ()=>{
//     popId1.style.display = "none";
//     clearInterval(showOnce);
//   })
// } );

// // chatbox
// var msgBtn = document.querySelector(".messenger");
// var toggle;
// window.addEventListener("load", function () {
//   setTimeout(() => {
//     msgBtn_show(msgBtn);
//   }, 3000);
// });
// msgBtn.addEventListener("click", function () {
//   if (toggle == 1) {
//     document.querySelector(".msg-box").style.display = "flex";
//     toggle = 0;
//   } else {
//     document.querySelector(".msg-box").style.display = "none";
//     toggle = 1;
//   }
// });

// function msgBtn_show(element) {
//   objFade(element);
//   element.style.display = "block";
// }

// ADD to cart Popup
document.addEventListener('DOMContentLoaded', () => {
  const addToCartButton = document.querySelector('.add-to-cart');
  const popupOverlay = document.querySelector('.popup-overlay');
  const closeButton = document.querySelector('.close-button');

  addToCartButton.addEventListener('click', () => {
    popupOverlay.classList.add('show');
  });

  closeButton.addEventListener('click', () => {
    popupOverlay.classList.remove('show');
  });
});


// const btn = document.getElementsByClassName('.add-to-cart');

// btn.addEventListener('click', function onClick() {
//   btn.style.backgroundColor = 'salmon';
//   btn.style.color = 'white';
// });
