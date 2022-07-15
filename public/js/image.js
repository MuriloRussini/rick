const imgBtn = document.getElementById("image-btn");


imgBtn.addEventListener('click', () => {
  console.log('clicked');
  const recipeImg = document.querySelector('.container__image');
  recipeImg.classList.toggle('clicked');
})