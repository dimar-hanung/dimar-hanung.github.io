class randomBox {
  constructor({
    count = 5,
    delay = 1000,
    transition = "scale",
    id = "randomBox",
  } = {}) {
    this.staticCount = count;
    this.count = count;
    this.delay = delay;
    this.transition = transition;
    this.id = id;
  }

  start() {
    // // console.log(this.count)
    // setInterval(() => {
    //   document.getElementsByClassName("content-wrap")[0].style.filter
    // }, 1000)
  }

  showBox() {
    this.count -= 1;
    let count = this.count;
    let id = this.id;
    let boxReload = (count, delay) => {
      this.showBox();
    };
    let random = (min, max) => {
      return this.getRandomInt(min, max);
    };

    setTimeout(() => {
      console.log(random(29, 100));
      count < 1
        ? setTimeout(() => {
            // xmitraDetail("dicoding", "0");
          }, 100)
        : boxReload({ count });

      let append = document.createElement("div");
      let height = random(80, 160);
      append.style.cssText += `
              position:absolute;
              box-shadow:0px 0px 15px -5px black;
              background:linear-gradient(${random(0, 360)}deg, hsl(${random(
        0,
        360
      )},50%,20%), hsl(${random(0, 360)},50%,20%));
              top:${random(0, 500 - height)}px;
              left:${random(0, 100)}%;
              transition:all ease 1s;
              transform:scale(2) rotate(${random(-10, 10)}deg);
              opacity:0;
              width:${random(80, 160)}px;
              height:${height}px;
              `;
      append.classList.add("box-box");
      setTimeout(() => {
        // setTimeout(()=>{append.style.animation = "updown 3s ease infinite alternate";},1000)
        append.style.transform = `scale(1) rotate(${random(-10, 10)}deg)`;
        append.style.opacity = 1;
      }, 100);

      document.getElementById(id).appendChild(append);
      // boxReload();
    }, this.delay);
  }
  getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min; //The maximum is exclusive and the minimum is inclusive
  }
}

let box = new randomBox({ count: 10, delay: 200 });
box.showBox();
box.start();
