(function(){

    $('.detail').click(function(){

        var parent = $(this).parent().parent().children(2).get(2);

        parent.classList.toggle("more");
        console.log(parent);

        // .toggleClass("more"); .parent("description")
    })

    $('.img-post').hover(function(){

        this.classList.toggle('grossir')
    });

    $('.show-comments').click(function(){

        var parent = $(this).parent().children() ;

        

        // parent.classList.toggle("show")
        parent[4].classList.toggle("hide")


        // if ($(this).text() == "Masquer Commentaires"){
            
        //     $(this).text("Commenter")

        // }else{

        //     $(this).text("Masquer Commentaires")

        // }

    })


    // $('#newArticle').click(function(){


    //     alert("je marche bien ");
        
    // });
   




})();

