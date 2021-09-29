class Phyton {
    constructor(canvas, ctx, board){
        this.canvas = canvas;
        this.ctx = ctx;
        this.board = board;
        this.phyton = [
            {
                row: 14,
                col: 4,
            },
            {
                row: 14,
                col: 3,
            },
            {
                row: 14,
                col: 2,
            },
            {
                row: 14,
                col: 1,
            },
        ];
    }

    draw() {
        for (let i = 0; i < this.phyton.length; i++) {
            this.ctx.beginPath();
            this.ctx.fillStyle = 'orange';
            this.ctx.rect(this.phyton[i].col * (this.canvas.width / this.board.col), this.phyton[i].row * (this.canvas.height / this.board.row), this.canvas.width / this.board.col, this.canvas.height / this.board.row);
            this.ctx.strokeStyle = '#fff';
            this.ctx.stroke(); 
            this.ctx.fill();
            this.ctx.closePath();
        }
    }

    move(dx, dy){
        for(let i = this.phyton.length - 1; i >= 0; i--){
            if (
                    this.phyton[0].row + dy < 0 || this.phyton[0].col + dx < 0 ||
                    this.phyton[0].row + dy >= this.board.row || this.phyton[0].col + dx >= this.board.col
                ) return;
            if (i == 0) {
                this.phyton[i].row += dy;
                this.phyton[i].col += dx;
            } else {
                this.phyton[i].row = this.phyton[i - 1].row;
                this.phyton[i].col = this.phyton[i - 1].col;
            }
        }
    }
}

export default Phyton;