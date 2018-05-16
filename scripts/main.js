(function(){
    var ticking = false;

    firstDiv = $("#first-slide")[0];
    secondDiv = $("#second-slide")[0];
    thirdDiv = $("#third-slide")[0];

    firstDiv.classList.remove('anime-rotate');
    secondDiv.classList.add('anime-left');
    thirdDiv.classList.add('anime-right');

    // alert("Tout fonctionne bien alhamdoulilahii") 

    var firstSlide = $("#first-slide").get(0);
    var secondSlide = $("#second-slide").get(0);
    var thirdSlide = $("#third-slide").get(0);


    var degTrans = -2000;
    var degTrans2 =-2000;

    

    scale=1;

    

    // var animeSecondslide = function () {

    //     if (degTrans == 2000) {

    //         degTrans = 0;
    //     }

    //     $('#second-slide').css('transform', 'translateX(' + degTrans + 'px) ');

    //     degTrans += 2000;



    //     // secondSlide.classList.add()



    //     if (degTrans == 0) {

    //         window.clearInterval(idTimer1);
    //     }


    // } 

    // var animeThirdSlide = function () {

    //     if (degTrans2 == 2000) {

    //         degTrans2 = 0;
    //     }

    //     $('#third-slide').css('transform', 'translateX(' + degTrans2 + 'px) ');

    //     degTrans2 += 2000;



    //     // secondSlide.classList.add()



    //     if (degTrans2 == 0) {

    //         window.clearInterval(idTimer2);
    //     }


      

    // } 


    // var animateDiv = function(){


    // }

    // var idTimer1 = window.setInterval(animeSecondslide, 500);
    // var idTimer2 = window.setInterval(animeThirdSlide, 600);

    // animateScrollBar =function(position){

      
       
    //     if(position>=0 &&position<10){

    //         degTrans =2000;
    //         degTrans2 =-2000;
          
           
    //     }

    //    if(position>600&&position <1000){

    //      window.setInterval(animeSecondslide, 300);
           
    //    }

    //    if(position>1200 && position< 3000){

    //         window.setInterval(animateDiv,500);

    //        window.setInterval(animeThirdSlide,1000);
    //    }


    //    console.log(position);
    // //    if(position>800&&position<2000){

    // //        $("#first-slide").classList.remove("animate-direction");
    // //        $("#second-slide").classList.add("animate-direction");
    // //        $("#third-slide").classList.remove("animate-rotate");
    // //    }

    // //     if (position > 2000) {

    // //         $("#second-slide").classList.remove("animate-direction");
    // //         $("#third-slide").classList.add("animate-rotate");
    // //     }
    // }

    window.addEventListener('scroll', function (e) {

        positionScroll = window.scrollY;

        if (!ticking) {

            window.requestAnimationFrame(function () {

                // animateScrollBar(positionScroll)

                animeDiv(positionScroll);

                ticking = false;

            });
        }

    });

  

    var animeDiv = function(position){

        if(position>0&& position <570){

            firstDiv.classList.remove('anime-left');
            secondDiv.classList.add('anime-left');
            thirdDiv.classList.add('anime-right');
        }

      if(position >700 && position <849){

          firstDiv.classList.add('anime-left');
      }

        if(position>900&&position <1600){

            secondDiv.classList.remove('anime-left');
            firstDiv.classList.remove('anime-rotate');
            
        }

        if (position>1700){

            thirdDiv.classList.remove('anime-right');

        
            
        }

        if(position>2000){

            secondDiv.classList.add('anime-left');

            // firstDiv.classList.add('anime-rotate');

        }

       

        

        console.log(position) ;
    }


})();