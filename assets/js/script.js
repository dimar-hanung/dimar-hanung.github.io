if (typeof(Storage) !== "undefined") {
	      
    } else {
      document.getElementsByClassName('flex-button').style.display="none";
    }


    let key = "status";


   
    
    $(document).ready(function() {
    	tema();
    });

    function tema(toggle) {

    	 /*
	fungsi : tema(dark/light) 
	sumber : diri sendiri
	jquery : true
	paham  : 100%
	*/

        let temaStatus = '';
        if (toggle == "dark" || toggle != "light") {
            temaStatus = sessionStorage.getItem(key);
        }

        if (toggle == "dark" || temaStatus == 1) {
            sessionStorage.setItem(key, 1);
            darkId.checked=true;

            $('#blackWhite').html(`

                body,.timeline-wrap{
                    background-color:#343a40;
                    color:white;
                }

                .profile-wrap,.peribahasa-box,footer{
                    background-color:#24272b;
                    color:white;
                }


                `);

            // $('body,.timeline-wrap').css({
            //     backgroundColor: '#343a40',
            //     color: 'white'
            // });

            // $('.profile-wrap,.peribahasa-box,footer').css({
            //     backgroundColor: '#24272b',
            //     color: 'white'
            // });;

        } else if (toggle == "light" || temaStatus == 0) {
            sessionStorage.setItem(key, 0);
            lightId.checked=true;

            $('#blackWhite').html('');

            // $('body,.timeline-wrap').css({
            //     backgroundColor: 'white',
            //     color: 'black'
            // });

            // $('.profile-wrap,.peribahasa-box,footer').css({
            //     backgroundColor: '#ccc3',
            //     color: 'black'
            // });;
        }

    }




    function smoothScroll(ID) {
        /*
	fungsi : smoothScroll()
	sumber : stackoverflow
	jquery : true
	paham  : 100%
	*/
        $('body,html').animate({
            scrollTop: $(ID).offset().top
        }, 1000);
        return false;
    }

    let navId = [
        	{
        		id:"homeSaya",
        		class: "home-wrap"
        	},
        	{
        		id:"aboutSaya",
        		class: "timeline-wrap"
        	},
        	{
        		id:"portoSaya",
        		class: "content2-wrap"
        	}

        ]

    $(window).scroll(function(event) {

        /*
	fungsi : onscroll
	sumber : diri sendiri
	jquery : true
	paham  : 100%
	*/

        let scroll = $(window).scrollTop();
        // console.log(scroll);
        $('.header-bg').css('transform', 'translateY(' + (scroll / 5) + 'px)');

        

        for (let nv = 0; nv < navId.length; nv++) {
        	let _class = document.getElementsByClassName(navId[nv].class)[0];
        	if (_class.offsetTop - scroll <=20 && (_class.offsetTop+_class.offsetHeight)-scroll >=20) {
        	document.getElementById(navId[nv].id).style.color="yellow";
        }else{
        	document.getElementById(navId[nv].id).style.color="white";
        }
        }

        if (scroll>500) {
        	document.getElementsByClassName('main-up')[0].style.opacity = "1";
        }else{
        	document.getElementsByClassName('main-up')[0].style.opacity = "0";
        }


        if (scroll > 5) {
            $('.navbar-wrap').css({
                transform: 'scale(0.9)',
                backgroundColor: '#232b33de',
                padding: '0rem 1rem',
                borderRadius: '0px 0px 10px 10px'
            });
            $('.nav-logo-span').css({
                width: '0px',
                transform: 'scale(0)'
            });
        } else {
            $('.navbar-wrap').css({
                transform: 'scale(1)',
                background: 'rgb(15, 17, 19)',
                padding: '.5rem 1rem',
                borderRadius: '0px'
            });
            $('.nav-logo-span').show('medium');
            $('.nav-logo-span').css({
                width: '150px',
                transform: 'scale(1)'
            });
        }

    });


    function cari(value) {



        let cardx = document.getElementsByClassName('list-judul');
        for (var i = 0; i < cardx.length; i++) {
            //console.log('masuk')
            let card = document.getElementsByClassName('list-judul')[i];
            // console.log(cardx[i].innerHTML)
            if (cardx[i].innerHTML.toLowerCase().indexOf(value.toLowerCase()) == -1) {
                $(card).hide('medium');
            } else {
                $(card).show('medium')

            }


        }


    }
