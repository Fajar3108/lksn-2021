const canvas = document.querySelector('canvas');
const context = canvas.getContext('2d');

const selectImage = document.querySelector('#image')
let imageChoosen = selectImage.value;

const selectFilter = document.querySelector('#filter');

selectImage.addEventListener('change', () => {
    imageChoosen = selectImage.value;
    init();
});

selectFilter.addEventListener('change', () => {
    filter(selectFilter.value);
});

document.addEventListener('DOMContentLoaded', () => {
    init();
});

const init = () => {
    const image = new Image;
    image.src = `./images/${imageChoosen}`;
    image.onload = () => {
        context.drawImage(image, 10, 10);
    }
}

const drawFilteredImage = () => {
    const image = new Image;
    image.src = `./images/${imageChoosen}`;
    image.onload = () => {
        context.drawImage(image, canvas.width - image.width - 10, 10);
    }
}

const filter = (type) => {
    if (type == 'darken') {
        context.filter = 'brightness(50%)';
    } else if (type == 'lighten') {
        context.filter = 'brightness(150%)';
    } else {
        context.filter = 'none';
    }

    drawFilteredImage();
}