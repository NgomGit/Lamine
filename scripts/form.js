(function(){


    var degform = -100;
    var scale = 0.0;

    var angle = 100;
    var i = 0;
    //  

var idTimer =window.setInterval(function(){



        $('form').css('transform','translateY('+degform+'%) rotate('+angle+'deg) scale('+scale+','+scale+')');

        degform +=10;
        scale +=0.1;
        angle -=10;



        if(i==10){

            window.clearInterval(idTimer);
        }

        console.log(i);

        i++;

    },100);



})();