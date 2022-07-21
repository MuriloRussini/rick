const imgBtn = document.getElementById("image-btn");
const checkbox = document.getElementById('ingredient');

imgBtn.addEventListener('click', () => {
  if (checkbox.checked) {
    console.log('clicked');
    const recipeImg = document.querySelector('.container__image');
    recipeImg.classList.toggle('clicked');
  } else {
    
  }
});

// Checkboxes
