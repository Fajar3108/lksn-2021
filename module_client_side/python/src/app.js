import Board from './objects/Board.js';
import Phyton from './objects/Phyton.js';

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.querySelector('#game');
    const ctx = canvas.getContext('2d');

    const board = new Board(canvas, ctx);
    const phyton = new Phyton(canvas, ctx, board);

    board.draw();
    phyton.draw();

    // Speed
    let dx = 1;
    let dy = 0;

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        phyton.move(dx, dy);
        board.draw();
        phyton.draw();
        requestAnimationFrame(animate);
    }
    animate();

    document.addEventListener('keypress', (e) => {
        if (e.key == "d" && dx != -1) {
            dx = 1;
            dy = 0;
        } else if (e.key == "a" && dx != 1) {
            dx = -1;
            dy = 0;
        } else if (e.key == "w" && dy != 1) {
            dx = 0;
            dy = -1;
        } else if (e.key == "s" && dy != -1) {
            dx = 0;
            dy = 1;
        }
    })
})