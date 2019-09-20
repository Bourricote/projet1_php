function confirm() {
    const message = 'Commande validée, vous allez être redirigié vers l\'accueil';
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