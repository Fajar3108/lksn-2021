class Board {
    constructor(canvas, ctx){
        this.row = 30;
        this.col = 48;
        this.board = [];
        this.canvas = canvas;
        this.ctx = ctx;
    }

    init() {
        for(let i = 0; i < this.row; i++){
            let rowTemp = [];
            for(let j = 0; j < this.col; j++){
                rowTemp.push(0);
            }
        }
    }

    draw(){
        let color = "#001337";
        for(let i = 0; i < this.row; i++){
            for(let j = 0; j < this.col; j++){
                if ((i % 2 !== 0 && j % 2 == 0) || (i == 0 && j % 2 !== 0) || (i % 2 == 0 && j % 2 !== 0)) color = '#001337';
                else color = '#192a4b';
                this.ctx.beginPath();
                this.ctx.fillStyle = color;
                this.ctx.rect(j * (this.canvas.width / this.col), i * (this.canvas.height / this.row), this.canvas.width / this.col, this.canvas.height / this.row);
                this.ctx.strokeStyle = '#303003';
                this.ctx.stroke(); 
                this.ctx.fill();
                this.ctx.closePath();
            }
        }
    }
}

export default Board;