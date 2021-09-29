import Board from './objects/Board.js';
import Phyton from './objects/Phyton.js';

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.querySelector('#game');
    const ctx = canvas.getContext('2d');

    const board = new Board(canvas, ctx);
    const phyton = new Phyton(canvas, ctx, board);

    board.draw();
    phyton.draw();

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        phyton.move(1, 0);
        board.draw();
        phyton.draw();
        requestAnimationFrame(animate);
    }
    animate();
})