import Board from './objects/Board.js';

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.querySelector('#game');
    const ctx = canvas.getContext('2d');
    console.log(ctx);

    const board = new Board(canvas, ctx);
    board.draw();
})