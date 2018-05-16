(function(){

    function addProfile( nom,prenom,email,password,numero){

        var profile ={

            nom :nom,
            prenom:prenom,
            emmil:email,
            password:password,
            numero:numero
        };

    }

    function isCompleteProfile(profile){

        if (profile['nom'] != null && profile['prenom'] != null&&
         profile['email'] != null && profile['password'] != null&& 
         profile['numero']!=null){

            return true;
         }

        return false ;

    }

    




})();