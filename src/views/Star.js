export default function (el) {
  class Star {
    constructor(x, y, r, color, speed) {
      this.speed = speed;
      this.x = x;
      this.y = y;
      this.r = r;
      this.rChange = 0.2;
      // this.vx = Math.floor(Math.random()*4+1);
      // this.vy = Math.floor(Math.random()*4+1);
      this.color = color;
    }
    render() {
      context.beginPath();
      if (this.r <= 0) {
        this.r = 0;
      }
    //   context.fillText(this.x, this.x, this.y);
      context.arc(this.x, this.y, this.r, 0, 2 * Math.PI, false);
      // context.shadowBlur = 10;
      //context.shadowColor = "lightblue";
      context.fillStyle = this.color;
      context.fill();
    }
    update() {
      this.y += this.speed;
      if (this.y >= window.innerHeight) {
        this.y -= window.innerHeight;
      }
      if (this.r >= 2 || this.r <= 0) {
        this.rChange = -this.rChange;
      }
      this.r += this.rChange;
    }
    update2() {
      this.y += this.speed;
      if (this.r >= 2 || this.r < 0.8) {
        this.rChange = -this.rChange;
      }
      this.r += this.rChange;
    }
  }

  let canvas = el;
  let context = canvas.getContext("2d");

  let C_WIDTH = (canvas.width = document.body.offsetWidth);
  let C_HEIGHT = (canvas.height = document.body.offsetHeight);

  window.addEventListener('resize', function(){
    // do stuff here
    C_WIDTH = (canvas.width = document.body.offsetWidth);
    C_HEIGHT = (canvas.height = document.body.offsetHeight);
  });

  
  // console.log(C_WIDTH)
  function randomColor() {
    let arrColors = ["orange", "#ffecd3", "#bfcfff", "#ffecd3", "#bfcfff"];
    return arrColors[Math.floor(Math.random() * 3)];
  }

  let arrStars = [];
  for (let i = 0; i < 100; i++) {
    let speed = Math.random() * 1;
    let randX = Math.floor(Math.random() * C_WIDTH + 1);
    let randY = Math.floor(Math.random() * C_HEIGHT + 1);
    let randR = Math.random() * 1.5 + 0.5;

    let star = new Star(randX, randY, randR, randomColor(), speed);
    arrStars.push(star);
  }

  function update() {
    for (let i = 0; i < arrStars.length; i++) {
      let randUpdate = Math.floor(Math.random() * 2);
      // console.log(randUpdate)
      if (randUpdate == 1) arrStars[i].update();
      else arrStars[i].update2();
    }
  }

  function animate() {
    update();
    /*
Remove comments below these for a cool trailing effect & comment
out the context.clearRect.
*/
    context.fillStyle = "red";
    //context.fillRect(0,0,C_WIDTH,C_HEIGHT);
    context.clearRect(0, 0, C_WIDTH, C_HEIGHT);
    for (let i = 0; i < arrStars.length; i++) {
      arrStars[i].render();
    }
    requestAnimationFrame(animate);
  }
  animate();
}
