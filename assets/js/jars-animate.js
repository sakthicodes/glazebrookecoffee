document.addEventListener("DOMContentLoaded", function () {
  const jars = document.querySelectorAll('.coffee-jar');
  setTimeout(() => { jars[0].classList.add('animated'); jars[4].classList.add('animated'); }, 200);
  setTimeout(() => { jars[1].classList.add('animated'); jars[3].classList.add('animated'); }, 700);
  setTimeout(() => { jars[2].classList.add('animated'); }, 1200);
});
