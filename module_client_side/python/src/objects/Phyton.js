class Phyton {
    constructor(canvas, ctx, board){
        this.canvas = canvas;
        this.ctx = ctx;
        this.board = board;
        this.phyton = [
            {
                head: true,
                row: 14,
                col: 4,
            },
            {
                head: false,
                row: 14,
                col: 3,
            },
            {
                head: false,
                row: 14,
                col: 2,
            },
            {
                head: false,
                row: 14,
                col: 1,
            },
        ];
    }

    draw() {
        for (let i = 0; i < this.phyton.length; i++) {
            this.ctx.beginPath();
            this.ctx.rect(this.phyton[i].col * (this.canvas.width / this.board.col), this.phyton[i].row * (this.canvas.height / this.board.row), this.canvas.width / this.board.col, this.canvas.height / this.board.row);
            this.ctx.fillStyle = this.phyton[i].head ? 'yellow' : 'orange';
            this.ctx.strokeStyle = '#fff';
            this.ctx.stroke(); 
            this.ctx.fill();
            this.ctx.closePath();
        }
    }
}

export default Phyton;