
var blockWidth = 100
var blockHeight = 20
var boardWidth = 600
var boardHeight = 300
var gamescreen =  document.getElementById("gamescreen")
var scoreDisplay = document.getElementById("score")
let userStartPosition = [230, 10]
let currentPosition = userStartPosition

let ballStart = [250, 40]
let ballCurrent = ballStart
let ballDiameter = 20
let xDirection = 2
let yDirection = 2
let timerId;
let score = 0
let stage = document.getElementById("level")
let level = 1
let currentLevel = level

//create block class

class Block{
    constructor(xAxis, yAxis){
        this.bottomLeft = [xAxis, yAxis]
        this.bottomRight = [xAxis + blockWidth, yAxis]
        this.topLeft = [xAxis, yAxis + blockHeight]
        this.topRight = [xAxis + blockWidth, yAxis + blockHeight]
    }
}

//all my blocks
const blocks = [
    new Block(10, 270),
    new Block(120, 270),
    new Block(230, 270),
    new Block(340, 270),
    

    new Block(10, 240),
    new Block(120, 240),
    new Block(230, 240),
    new Block(340, 240),
    
    new Block(10, 210),
    new Block(120, 210),
    new Block(230, 210),
    new Block(340, 210),

   
]


// to draw block
function drawBlock(){
    for (let i = 0; i < blocks.length; i++) {
        var block = document.createElement('div')

        block.classList.add('avatar')
        block.style.left = blocks[i].bottomLeft[0] + 'px'
        block.style.bottom =  blocks[i].bottomLeft[1] + 'px'

       gamescreen.append(block)
        
    }



}
drawBlock()

// add a user
    var user = document.createElement('div')
    user.classList.add('user')
    user.style.left = currentPosition[0] + 'px'
    user.style.bottom = currentPosition[1] + 'px'
    gamescreen.append(user)



//move user


document.addEventListener("keydown", event => {
    switch (event.keyCode) {
        case 37:
            if (currentPosition[0] > 0) {
                currentPosition[0] -= 10
            user.style.left = currentPosition[0] + 'px'
            user.style.bottom = currentPosition[1] + 'px'
            }
            
            break;

        case 39:
            if (currentPosition[0] < boardWidth - blockWidth) {
                currentPosition[0] += 10
            user.style.left = currentPosition[0] + 'px'
            user.style.bottom = currentPosition[1] + 'px'
            }
            

             break;


            
    
    }


})

// creating a game level


//add ball
var ball = document.createElement('div')
ball.classList.add('ball')
ball.style.left = ballCurrent[0] + 'px'
ball.style.bottom = ballCurrent[1] + 'px'
gamescreen.append(ball)

//moving ball

function moveBall(){
    ballCurrent[0] += xDirection
    ballCurrent[1] += yDirection
    ball.style.left = ballCurrent[0] + 'px'
    ball.style.bottom = ballCurrent[1] + 'px'
    collision()
} 

//move ball over a given frame per seconds
timerId = setInterval(moveBall, 30)

//check for collision

function collision(){
    //chech for block collision
    for (let i = 0; i < blocks.length; i++) {
        if (
            (ballCurrent[0] > blocks[i].bottomLeft[0] && ballCurrent[0] < blocks[i].bottomRight[0]) &&
            ((ballCurrent[1] + ballDiameter ) > blocks[i].bottomLeft[1] && ballCurrent[1] < blocks[i].topLeft[1])
        ) {
            const allblocks = Array.from(document.querySelectorAll('.avatar'))
            allblocks[i].classList.remove('avatar')
            blocks.splice(i, 1)
            changeDirection()
            score++
            scoreDisplay.innerHTML = score
            if (blocks.length === 0) {
                scoreDisplay.innerHTML = 'YOU WON'
                clearInterval(timerId)
                document.removeEventListener('keydown')
            }

        }
        
    }
    if (ballCurrent[0] >= (boardWidth - ballDiameter) || 
        ballCurrent[1] >= (boardHeight - ballDiameter) || 
        ballCurrent[0] <= 0  ) {
        changeDirection()

    }

    //user collision
      if (
          (ballCurrent[0] > currentPosition[0] && ballCurrent[0] < currentPosition[0] + blockWidth) &&
          (ballCurrent[1] > currentPosition[1] && ballCurrent[1] < currentPosition[1] + blockHeight) 
      )
      {
          changeDirection()
      }

    if (ballCurrent[1] <= 0) {
        clearInterval(timerId)
        scoreDisplay.innerHTML = 'you loose'
        document.removeEventListener('keydown')
    }
}

function changeDirection(){
    if (xDirection === 2 && yDirection === 2) {
        yDirection = -2
        return
    }
    if (xDirection === 2 && yDirection === -2) {
        xDirection = -2
        return
    }
    if (xDirection === -2 && yDirection === -2) {
        yDirection = 2
        return
    }

    if (xDirection === -2 && yDirection === 2) {
        xDirection = 2
        return
    }

}

