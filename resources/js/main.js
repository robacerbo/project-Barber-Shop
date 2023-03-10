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

//ANIMATION SCROLL CONTATTACI

let myRichiesta = document.querySelector('.myRichiesta');
let imgContatta = document.querySelector('#imgContatta');
let contactForm = document.querySelector('#contactForm');
let newCourse = document.querySelector('#newCourse');

myRichiesta.classList.remove('myRichiestaAni');
imgContatta.classList.remove('myImgContatta');
contactForm.classList.remove('contactFormAni');


let observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      myRichiesta.classList.add('myRichiestaAni');
      imgContatta.classList.add('myImgContatta');
      contactForm.classList.add('contactFormAni');
      return;
    }

    myRichiesta.classList.remove('myRichiestaAni');
    imgContatta.classList.remove('myImgContatta');
    contactForm.classList.remove('contactFormAni');
  });
});

observer.observe(document.querySelector('#ColForm'));
observer.observe(document.querySelector('#imgContatta'));
observer.observe(document.querySelector('#contactForm'));


//ANIMATION CLICK ON CHEVRON SEZIONE CONTATTA

let chevron = document.querySelector('#contChevron');

// Aggiungi l'evento di click all'elemento
chevron.addEventListener('click', function() {
  // Seleziona l'elemento a cui eseguire lo scrolling
  let nextSection = document.querySelector('#contForm');

  // Esegui lo scrolling
  nextSection.scrollIntoView({ behavior: 'smooth' });
});