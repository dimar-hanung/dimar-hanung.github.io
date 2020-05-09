class elemen {

    constructor(className, radius, transitionTime, delayTime = 100, onlyAnimRotate = false) {
        this.className = className;
        this.radius = radius;
        this.delayTime = delayTime;
        this.onlyAnimRotate = onlyAnimRotate;
        //console.log(this.className)
        let transition = document.getElementsByClassName(this.className);
        for (var i = 0; i < transition.length; i++) {
            transition[i].style.transition = transitionTime;
        }



    }

    rotate(min, max, oneDirection) {

        let getClass = document.getElementsByClassName(this.className);
        let n = Math.floor(Math.random() * 2);
        for (var i = 0; i < getClass.length; i++) {

            let minRadius = getRandomInt(min, -this.radius + min);
            let maxRadius = getRandomInt(max, this.radius + max);
            if (oneDirection == 'right') { minRadius = getRandomInt(Math.abs(min), this.radius + min); }
            if (oneDirection == 'left') { maxRadius = getRandomInt(-max, -this.radius + max) }
            if (i % 2 == n) {
                getClass[i].style.transform += 'rotate(' + minRadius + 'deg)';
            } else {
                getClass[i].style.transform += 'rotate(' + maxRadius + 'deg)';
            }

        }

    }

    showAll() {
        let getClass = document.getElementsByClassName(this.className);
        for (var i = 0; i < getClass.length; i++) {
            getClass[i].style.transform = 'scale(0)';
        }
        //console.log(this.className);
        //console.log('rotate:'+this.onlyAnimRotate)
        start({ counter: 0, className: this.className, delayTime: this.delayTime, onlyAnimRotate: this.onlyAnimRotate });
    }



}


function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min; //The maximum is exclusive and the minimum is inclusive
}


function start({ counter, className, onlyAnimRotate, delayTime }) {
    let getClass = document.getElementsByClassName(className);

    if (counter < getClass.length) {
        setTimeout(function() {


            if (onlyAnimRotate == true) {
                getClass[counter].style.transform = 'scale(1)';
                //console.log(onlyAnimRotate);
            } else {
                let deleteScale0 = getClass[counter].style.transform;
                deleteScale0 = deleteScale0.replace('scale(0)', 'scale(1)');
                getClass[counter].style.transform = deleteScale0;
                //console.log(onlyAnimRotate);
            }


            counter++;
            start({ counter: counter, className: className, delayTime: delayTime, onlyAnimRotate: onlyAnimRotate });
        }, delayTime);
    }
}


function runAnim({ className, transitionTime = 'all ease 1s', rotateRadius = 10, oneDirection=false, delayTime = 100, onlyAnimRotate = false, showTransition = true }) {
    let classNameSplit = className.split(',');
    className = className.split(',');

    for (var i = 0; i < className.length; i++) {
        let resetTransform;
        resetTransform = document.getElementsByClassName(classNameSplit[i]);
        for (var x = 0; x < resetTransform.length; x++) {
            resetTransform[x].style.transform = 'inherit';
            resetTransform[x].style.transform = 'scale(1)';
        }

        let el = new elemen(className[i], rotateRadius, transitionTime, delayTime, onlyAnimRotate);


        if (showTransition == true) { el.showAll(); }
        el.rotate(-2, 2, oneDirection);
    }
}