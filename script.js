let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let formClose = document.querySelector('#form-close');
let loginForm = document.querySelector('.login-form-container');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let imageBtn = document.querySelectorAll('.image-btn');

window.onscroll = () => {
  searchBtn.classList.remove('fa-times');
  searchBtn.classList.remove('active');
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
  loginForm.classList.remove('active');
}

menu.addEventListener('click', () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () => {
  searchBtn.classList.toggle('fa-times');
  searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () => {
  loginForm.classList.add('active');
});

formClose.addEventListener('click', () => {
  loginForm.classList.remove('active');
});

imageBtn.forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelector('.controls .active').classList.remove('active');
    btn.classList.add('active');
    let src = btn.getAttribute('data-src');
    document.querySelector('#image-slider').src = src;
  });
})

var swiper = new Swiper(".reviews-slider", {
  loop: true,
  spaceBetween: 20,
  autoHeight: true,
  grabCursor: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

// let loadMoreBtn = document.querySelector('.packages .load-more .btn');
// console.log(loadMoreBtn)
// let currentItem = 6;


// loadMoreBtn.onclick = () => {
//   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
//   console.log(boxes)
//   for (var i = currentItem; i < currentItem + 3; i++) {
//     boxes[i].style.display = 'inline-block';
//   };
//   currentItem += 3;
//   if (currentItem >= boxes.length) {
//     loadMoreBtn.style.display = 'none';
//   }
// }



