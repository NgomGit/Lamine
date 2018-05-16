
(function(){


    // alert("tout fonctionne")
    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];
    var containerDiv =$('.row').get(0);

    $('#newArticle').click(function () {

    
        modal.style.display = "block";

    
        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
            containerDiv.classList.remove('container-anime');

        }

      
      containerDiv.classList.add('container-anime');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
                containerDiv.classList.remove('container-anime');
            }
        }
    });

})();


