const inputField = document.getElementById('inputField');
const saveButton = document.getElementById('saveButton');
const savedParagraph = document.getElementById('savedParagraph');

saveButton.addEventListener('click', () => {
  saveParagraph();
});

inputField.addEventListener('keydown', (event) => {
  if (event.key === 'Enter') {
    event.preventDefault();
    saveParagraph();
  }
});

function saveParagraph() {
  const text = inputField.value;
  savedParagraph.textContent = text;
  inputField.value = '';
}
