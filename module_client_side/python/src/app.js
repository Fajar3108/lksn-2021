import Board from './objects/Board.js';
import Phyton from './objects/Phyton.js';

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.querySelector('#game');
    const ctx = canvas.getContext('2d');

    const board = new Board(canvas, ctx);
    const phyton = new Phyton(canvas, ctx, board);

    board.draw();
    phyton.draw();
})