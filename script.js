function confirm() {
    const message = 'Commande validée, retour à la page 1';
    alert(message);
}

function burgerResponsive() {
    var x = document.getElementById("myTopnav");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
} 