(function(){
// on met un # en face du burger seulement quand c'est .querySelector et non .getElementbyId
let bar1 = document.querySelector("#burger div:nth-of-type(1)"); 
let bar2 = document.querySelector("#burger div:nth-of-type(2)");    
let bar3 = document.querySelector("#burger div:nth-of-type(3)");  
let burger =  document.getElementById("burger");  
console.log(burger.id);
burger.addEventListener("mousedown", function(){
    console.log(burger.id);
    // si il n'y a pas deja l'animation d'ouverture...
    if (bar1.classList.contains("ouvrirX1") == false){
       // ---BARRE1
            //ajoute l'animation d'ouverture
            bar1.classList.add("ouvrirX1");
            // enlève l'animation de fermeture
            bar1.classList.remove("fermeX1");
        // ---BARRE2
            bar2.classList.add("ouvrirX2");    
            bar2.classList.remove("fermeX2");
        // ---BARRE3
            bar3.classList.add("ouvrirX3");
            bar3.classList.remove("fermeX3");     
        
      /* bar1.classList.remove("fermeX1");
       bar1.classList.add("ouvrirX1");
       bar2.classList.remove("fermeX2");
       bar2.classList.add("ouvrirX2");    
       bar3.classList.remove("fermeX3");     
       bar3.classList.add("ouvrirX3");
        */
    }
    // si l'animation d'ouverture est déjà là..
    else{
        // ---BARRE1
            // ajoute l'animation de fermeture
            bar1.classList.add("fermeX1");
            // enlève l'animation d'ouverture
            bar1.classList.remove("ouvrirX1");
            
        // ---BARRE2 
            bar2.classList.remove("ouvrirX2");
            bar2.classList.add("fermeX2");   
        // ---BARRE3   
            bar3.classList.remove("ouvrirX3");
            bar3.classList.add("fermeX3"); 
        
       /*bar1.classList.remove("ouvrirX1");
       bar1.classList.add("fermeX1");
       bar2.classList.remove("ouvrirX2");
       bar2.classList.add("fermeX2");   
       bar2.classList.remove("ouvrirX3");
       bar2.classList.add("fermeX3"); */

    }
    
 
    
})

})()