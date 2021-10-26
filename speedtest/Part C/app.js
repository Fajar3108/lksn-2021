const canvas = document.querySelector('canvas');
const context = canvas.getContext('2d');

const imageChoosen = document.querySelector('#image').value;

document.addEventListener('DOMContentLoaded', () => {
    const image = new Image;
    image.src = `./images/${imageChoosen}`;
    context.drawImage(image, 10, 10, canvas.width / 3 * 2, canvas.height / 3 * 2);
    context.fill();
});