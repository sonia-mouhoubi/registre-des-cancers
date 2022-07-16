// window.addEventListener("DOMContentLoaded", () => {

//     document.getElementById("form-connexion-admin").addEventListener("submit", function(e) {
//         e.preventDefault();

//         var data = new FormData(this); // Récupére les données du formulaire, this permet de recupére le formulaire 

//         var xhr = new XMLHttpRequest(); // Permet d'intéragir avec le  serveur avec appel ansynchrone.

//         xhr.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 console.log(this.response);
//                 var res = this.response;
//             } 
//             else if (this.readyState == 4) {
// 			    alert("Une erreur est survenue...");
// 		    }
            
//         };

//         xhr.open("POST", "treatments/treatments-front/treatment-admin.php", true);
//         xhr.responseType = "json";

//         xhr.send(data);

//         return false; // Eviter comportement par default

//     });


// })
