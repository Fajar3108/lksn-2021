class Board {
    constructor(canvas, ctx){
        this.row = 30;
        this.col = 48;
        this.board = [];
        this.canvas = canvas;
        this.ctx = ctx;
        this.init();
    }

    init() {
        for(let i = 0; i < row; i++){
            let rowTemp = [];
            for(let j = 0; j < col; j++){
                rowTemp.push(0);
            }
        }
    }

    draw(){
        let color = "blue";
        for(let i = 0; i < row; i++){
            for(let j = 0; j < col; j++){
                if (j % 2 == 0) color = "blue"; 
                else color = "cyan";
                this.ctx.context.fillStyle = color;
            }
        }
    }
}

export default Board;