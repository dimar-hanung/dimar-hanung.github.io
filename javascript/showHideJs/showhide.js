 let classIndex = [];
    let clickIndex='';
    let classToggle = '';

//#just for fun
    // for (var i = 0; i < 150; i++) {
        
    //     $('.ctnBox4').eq(i).find('div').eq(0).append(' <div class="ctnBox4">        <label>ya</label>   <div></div>   </div>     ');

    // }
//#end just for fun
   setTimeout(function() {$('body').eq(0).append('<div id="rotateScript">x</div>');},1);
        


        //============================= start fungsi ====================================
        function randid({ className = 'ctnBox' , labelClassName = 'lblToggle', randomColor = true, numbering = false }) {
           
            //angka=angka untuk random id dan for , sebagai penghubung label dan input
            classIndex.push('.' + className);

            // console.log('classIndex: '+classIndex[0])

            let iptClassName    = 'ipt' + labelClassName;
            classToggle         = iptClassName;
            nama                = className;
            className           = document.getElementsByClassName(className);
    
            //console.log(className.length);

            for (var i = 0; i < className.length; i++) {
               // console.log('x: ' + $(className).eq(i));
            $(className).eq(i).prepend('<span class="nomorId"></span><input  class="' + iptClassName + '" id="idp2" type="checkbox">');
            }

            let wrnrnd  = ("lightgreen,yellow,#28a745,#17a2b8,pink,aqua").split(',');
            let wrnrnd2 = ("#ccffbc,#fff294,#a4ec77,#c0f1ff,#f5dcff,lightblue").split(',');
            let lbl = document.getElementsByClassName(labelClassName);
            let ipt = document.getElementsByClassName(iptClassName);
            let isiClassName = 'isiContent';

            let generateId  = 0;
            let jjk1        = Math.floor(Math.random() * wrnrnd.length);
            let jjk2        = jjk1;

            //untuk random id dan for supaya tidak di lakukan penamaan manual
            for (var i = 0; i < className.length ; i++) {

                generateId  = i;
                jjk2        = jjk1;
                jjk1        = Math.floor(Math.random() * wrnrnd.length);


                if (jjk1 != jjk2) {

                    let random = 'dps' + generateId + nama;
                    console.log('no: ' + lbl.length);
                    let sblm;
                    sblm       = className[i].getElementsByClassName('nomorId');
                    //console.log('length: ' + $(className).eq(i).find('.nomorId').length)

                    //## jika class tidak lbltoggle dan isicontent tidak ditemukan ##
                        if ($(className).eq(i).find('.lblToggle').length <= 0) {
                        className[i].getElementsByTagName('label')[0].setAttribute("class",'lblToggle');
                        }
                        if ($(className).eq(i).find('.isiContent').length <= 0) {
                        className[i].getElementsByTagName('div')[0].setAttribute("class",'isiContent');
                        }
                    //## end class tidak ditemukan ##

                    console.log('randomColor ' + randomColor)

                    //### jika setting random color = on
                    if (randomColor == true) {

                        //jika class lblToggle tidak ditemukan
                       
                        //jika class nomor id ditemukan
                        if ($(className).eq(i).find('.nomorId').length >= 1) {
                            sblm[0].style.background = wrnrnd[jjk1];
                        }

                        className[i].getElementsByClassName(isiClassName)[0].style.borderColor = wrnrnd[jjk1];
                        className[i].getElementsByClassName(isiClassName)[0].style.boxShadow = '0px 0px 10px ' + wrnrnd[jjk1] + ' 0px 0px 2px black';
                        className[i].getElementsByClassName(labelClassName)[0].style.background = wrnrnd2[jjk1];

                        
                    }
                    //### end dari kondisi random color


                    
                    if ($(className).eq(i).find('.nomorId').length >= 1) {

                        
                       // sblm[0].style.height= className[i].offsetHeight - 10 + 'px';

                       //## option numbering
                        if (numbering==true) {

                        sblm[0].innerHTML   = '#' + parseInt(i + 1);
                        }
                        //##end option numbering

                    }


                    className[i].getElementsByClassName(labelClassName)[0].setAttribute("for", random);
                    className[i].getElementsByClassName(iptClassName)[0].setAttribute("id", random);
                    //ipt[i].setAttribute("id", random);

                } else {
                    i = i - 1;
                    console.log("sama muncul");
                }
            }


          




 }



    //============================= end fungsi ====================================



setTimeout(function() {

  clickIndex = '';
            for (var i = 0; i < classIndex.length; i++) {
                clickIndex += classIndex[i] + ',';


            }

            let clickWrite = ()=>{

            clickIndex = clickIndex.slice(0, -1);
            console.log('click index: ' + clickIndex)
            $(clickIndex).click(function() {
                console.log('masukc:');
                //coba = mendapatkan innerhtml dari ctnBox
                let ctnBox = $(this);
                //mencari class iptToggle (pilihjawab)
                $(this).find('.' + classToggle).eq(0).each(function() {
                    //jika  iptToggle checked


                    if ($(this).is(':checked')) {
                        $(ctnBox).find(".isiContent").eq(0).each(function() {
                            $(this).slideDown('slow');
                        });

                    } else {
                        $(ctnBox).find(".isiContent").eq(0).each(function() {
                            $(this).slideUp('slow');
                        });
                    }

                });

                //   $(this).find(".lblToggle").each(function () {
                //      $(this).hide('slow')

                // });

            });

        }

        let clickWriteString=clickWrite.toString();
            clickWriteString=clickWriteString.replace('()=>','')

        $('#rotateScript').html('');
        $('#rotateScript').append('<script>'+clickWriteString+'</'+'script>');



}, 10);


