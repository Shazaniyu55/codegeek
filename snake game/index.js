const gameBoard = document.getElementById('game-board');
const width = 20;
const height = 20;
const gameCells = [];
let snake = [{ x: 10, y: 10 }];
let direction = 'right';
let score = 0;
let food = { x: getRandomInt(width), y: getRandomInt(height) };

function createBoard() {
  for (let y = 0; y < height; y++) {
    const row = [];
    for (let x = 0; x < width; x++) {
      const cell = document.createElement('div');
      cell.classList.add('cell');
      gameBoard.appendChild(cell);
      row.push(cell);
    }
    gameCells.push(row);
  }
}

function updateBoard() {
  gameCells.forEach((row, y) => {
    row.forEach((cell, x) => {
      cell.classList.remove('snake', 'food');
      if (snake.some((part) => part.x === x && part.y === y)) {
        cell.classList.add('snake');
      }
      if (food.x === x && food.y === y) {
        cell.classList.add('food');
      }
    });
  });
}

function moveSnake() {
  let x = snake[0].x;
  let y = snake[0].y;

  if (direction === 'right') x++;
  else if (direction === 'left') x--;
  else if (direction === 'up') y--;
  else if (direction === 'down') y++;

  const newHead = { x, y };
  snake.unshift(newHead);

  if (food.x === x && food.y === y) {
    score++;
    updateScore();
    generateFood();
  } else {
    snake.pop();
  }
}

function checkCollisions() {
  const head = snake[0];
  if (head.x < 0 || head.x >= width || head.y < 0 || head.y >= height) {
    endGame();
  }
  if (snake.some((part, i) => i !== 0 && part.x === head.x && part.y === head.y)) {
    endGame();
  }
}

function generateFood() {
  food = { x: getRandomInt(width), y: getRandomInt(height) };
}

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

function endGame() {
  clearInterval(gameInterval);
  alert('Game Over!');
  location.reload()
}

function updateScore() {
  const scoreDisplay = document.getElementById('score-display');
  scoreDisplay.textContent = `Score: ${score}`;
}

function update() {
  moveSnake();
  checkCollisions();
  updateBoard();
}

function handleKeyDown(event) {
    if (event.code === 'ArrowRight' && direction !== 'left') direction = 'right';
    else if (event.code === 'ArrowLeft' && direction !== 'right') direction = 'left';
    else if (event.code === 'ArrowUp' && direction !== 'down') direction = 'up';
    else if (event.code === 'ArrowDown' && direction !== 'up') direction = 'down';
  }
  
  createBoard();
  let gameInterval = setInterval(update, 100);
  document.addEventListener('keydown', handleKeyDown);