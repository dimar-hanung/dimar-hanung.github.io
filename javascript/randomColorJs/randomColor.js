function randomColor({className,colorList}){



	className 		= document.getElementsByClassName(className);
	colorList 		= colorList.split(',');
	let trackerA 	= Math.floor(Math.random() * colorList.length);
	let trackerB 	= trackerA;


	for (var i = 0; i < className.length; i++) {

		trackerB = trackerA;
		trackerA = Math.floor(Math.random() * colorList.length);
		if (trackerB!=trackerA) {
		className[i].style.background = colorList[trackerA];
		}else{
			i=i-1;
		}

	}



}
