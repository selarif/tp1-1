(function(){
// on met un # en face du burger seulement quand c'est .querySelector et non .getElementbyId
let bar1 = document.querySelector("#burger div:nth-of-type(1)"); 
let bar2 = document.querySelector("#burger div:nth-of-type(2)");    
let bar3 = document.querySelector("#burger div:nth-of-type(3)");  
let burger =  document.getElementById("burger");  
console.log(burger.id);
burger.addEventListener("mousedown", function(){
    console.log(burger.id);
    // -----------BARRE 1----------
    // si il n'y a pas deja l'animation d'ouverture...
    if (bar1.classList.contains("ouvrirX1") == false){
        // ---BARRE1
            //ajoute l'animation d'ouverture
            bar1.classList.remove("fermeX1");
            bar1.classList.add("ouvrirX1");
    }
    // si l'animation d'ouverture est deja la...
    else{
        // ---BARRE1
            // enleve l'animation d'ouverture
            bar1.classList.remove("ouvrirX1");
            // ajoute l'animation de fermeture
            bar1.classList.add("fermeX1");
    }

    // -----------BARRE 2-----------
    if (bar1.classList.contains("ouvrirX2") == false){
        // ---BARRE2    
            //ajoute l'animation d'ouverture
            bar2.classList.remove("fermeX2");
            bar2.classList.add("ouvrirX2");
    }
    else{
        // ---BARRE2    
            // enleve l'animation d'ouverture
            bar2.classList.remove("ouvrirX2");
            // ajoute l'animation de fermeture
            bar2.classList.add("fermeX2");
    }

    // -----------BARRE 3-----------
    if (bar1.classList.contains("ouvrirX2") == false){
        // ---BARRE3    
            //ajoute l'animation d'ouverture
            bar3.classList.remove("fermeX3");
            bar3.classList.add("ouvrirX3"); 
    }
    else{
        // ---BARRE3   
            // enleve l'animation d'ouverture
            bar2.classList.remove("ouvrirX3");
            // ajoute l'animation de fermeture
            bar2.classList.add("fermeX3"); 
    }
})

    // pas besoin dautant de else et if
})()