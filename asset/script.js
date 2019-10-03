/*Menu burger = header.php*/
const navBar = document.getElementById("myTopnav");
const burgerIcon = document.getElementById("burger_icon");
burgerIcon.addEventListener('click', () => {
    navBar.classList.toggle('responsive')
});


/* 1ère version du menu burger
function burgerResponsive() {
    var x = document.getElementById("myTopnav");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}*/

/*Modif éléments du menu au clic et scroll*/

const menuLinks = document.getElementsByClassName("menu_link");

for(let i = 0; i < menuLinks.length; i++) {
    menuLinks[i].addEventListener('click', event => {
        menuLinks[i].classList.toggle('active')
    })
}

let linkActives = document.getElementsByClassName("active");

window.addEventListener('DOMMouseScroll', () => {
    if (linkActives[0].className === 'menu_link active') {
        linkActives[0].className = 'menu_link';
    }
});

/*Message confirmation = page2.php*/
const confirmButton = document.getElementById('confirmButton');

confirmButton.addEventListener('click', () => {
    alert('Commande validée, vous allez être redirigé vers l\'accueil');
});
