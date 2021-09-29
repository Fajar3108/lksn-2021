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
        switch(e.key) {
            case "d" :
                dx = 1;
                dy = 0;
                break; 
            case "w" :
                dx = 0;
                dy = -1;
                break; 
            case "a" :
                dx = -1;
                dy = 0;
                break; 
            case "s" :
                dx = 0;
                dy = 1;
                break; 
        }
    })
})