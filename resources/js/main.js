const navbar = document.querySelector('#nav')

window.addEventListener('scroll', function(e) {
  const lastPosition = window.scrollY
  if (lastPosition > 80 ) {
    navbar.classList.add('nav-active')
  } else if (navbar.classList.contains('active')) {
    navbar.classList.remove('nav-active')
  } else {
    navbar.classList.remove('nav-active')
  }
})

//ANIMATION CLICK ON CHEVRON SEZIONE CONTATTA

const chevronDown = document.querySelector('#contChevron');

if (chevronDown) {
  chevronDown.addEventListener('click', function() {
    let nextSection = document.querySelector('#contForm');
    nextSection.scrollIntoView({ behavior: 'smooth' });
  });
}


//ANIMATIONS HIDDEN - HIDDEN LEFT - HIDDEN RIGHT E CUSTOMS
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
      console.log(entry)
      if (entry.isIntersecting) {
          entry.target.classList.add('show');
      } else {
          entry.target.classList.remove('show');
      }
  });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

const hiddenLeftElements = document.querySelectorAll('.hidden-left');
hiddenLeftElements.forEach((el) => observer.observe(el));

const hiddenRightElements = document.querySelectorAll('.hidden-right');
hiddenRightElements.forEach((el) => observer.observe(el));

const hiddenTop = document.querySelectorAll('.hidden-top');
hiddenTop.forEach((el) => observer.observe(el));

const hiddenDown = document.querySelectorAll('.hidden-down');
hiddenDown.forEach((el) => observer.observe(el));

const popoutIn = document.querySelectorAll('.popoutin');
popoutIn.forEach((el) => observer.observe(el));

//CHANGE AVATAR BTN
/* let chooseAvatarBtn = document.getElementById('choose-avatar-btn');
    chooseAvatarBtn.addEventListener('click', function() {
        let fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.name = 'avatar';
        fileInput.style.display = 'none';
        fileInput.addEventListener('change', function() {
            let avatarForm = document.getElementById('avatar-form');
            avatarForm.submit();
        });
        /* document.body.appendChild(fileInput);
        fileInput.click(); */


// MODAL LOGIN
// const myModal = document.getElementById('myModal')
// const myInput = document.getElementById('myInput')

// myModal.addEventListener('shown.bs.modal', () => {
//   myInput.focus()
// })