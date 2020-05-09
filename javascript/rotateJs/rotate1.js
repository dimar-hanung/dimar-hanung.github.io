

function runRotate({onlyAnimRotate = true , rotateRadius = 10 , className = 'g' , transitionTime = 'all ease 1s', 
showTransition = true}){



}


let onlyAnimRotate	=true;
	let rotateRadius	=10000;
	let className 		='g,contoh,contoh2';
	let transitionTime	='all ease 2s';
	let showTransition	=false;


	class elemen{

		constructor(className,radius){
			this.className 	= className;
			this.radius		= radius;
			//console.log(this.className)
			let transition=document.getElementsByClassName(this.className);

			for (var i = 0; i < transition.length; i++) {

				transition[i].style.transition=transitionTime;
			}


			
		}

		rotate(min,max){

			let getClass = document.getElementsByClassName(this.className);
			let n=Math.floor(Math.random() * 2);
			for (var i = 0; i < getClass.length; i++) {

				let minRadius =getRandomInt(min,-this.radius+min);
				let maxRadius =getRandomInt(max,this.radius+max);
				if (i%2==n) {
					getClass[i].style.transform+='rotate('+minRadius+'deg)';
				}else{
					getClass[i].style.transform+='rotate('+maxRadius+'deg)';
				}
				
			}

		}

		showAll(){
			let getClass = document.getElementsByClassName(this.className);
			for (var i = 0; i < getClass.length; i++) {
				getClass[i].style.transform='scale(0)';
			}
			console.log(this.className)
			start(0,this.className);
		}
		


	}


function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min; //The maximum is exclusive and the minimum is inclusive
}


function start(counter,className){
		let getClass = document.getElementsByClassName(className);

		  if(counter < getClass.length){
		    setTimeout(function(){


		    	if (onlyAnimRotate==true) {
		    		getClass[counter].style.transform='scale(1)';
		    	}else{
		    let deleteScale0=getClass[counter].style.transform;
		    deleteScale0=deleteScale0.replace('scale(0)','scale(1)');
		    	getClass[counter].style.transform=deleteScale0;
		      }
		      
		    	
		    counter++;
		    	start(counter,className);
		    }, 100);
		  }
		}
function runAnim(){
classNameSplit=className.split(',');
for (var i = 0; i < className.length; i++) {
	
resetTransform=document.getElementsByClassName(classNameSplit[i]);
	for (var x = 0; x < resetTransform.length; x++) {
		resetTransform[x].style.transform='inherit';
		resetTransform[x].style.transform='scale(1)';
	}

	let el = new elemen(classNameSplit[i],rotateRadius);

	if (showTransition==true) {el.showAll();}
	
	el.rotate(-2,2);
}
}