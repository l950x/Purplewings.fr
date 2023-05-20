
const btn = document.querySelector('#btn');
const sb = document.querySelector('#version')
const text1 = document.querySelector('#text1');
const text2 = document.querySelector('#text2');
const text3 = document.querySelector('#text3');
const text4 = document.querySelector('#text4');
sb.onchange = (event) => {
    event.preventDefault();
    if (sb.selectedIndex == 0) {
        text1.innerHTML = "<p>Ajout de la boutique</p>";
        text2.innerHTML = "<p>Revue de l'algoritme</p>";
        text3.innerHTML = "Changement de polices";
        text4.innerHTML = "<p>Ajout du mode jour/nuit</p>";
    }
    else if (sb.selectedIndex == 1) {
        text1.innerHTML = "<p>170505</p>"
        text2.innerHTML = "<p>Corrections de bugs divers</p>"
        text3.innerHTML = "<p>Ajout du mode jour/nuit</p>";
        text4.innerHTML = "<p></p>"
    }
    else if (sb.selectedIndex == 2) {
        text1.innerHTML = "<p>Amelioration des graphismes</p>";
        text2.innerHTML = "<p>Ajout du score, record</p>"
        text3.innerHTML = "<p>Corrections de bugs divers</p>"
        text4.innerHTML = "<p></p>"
    }
    else if (sb.selectedIndex == 3) {
        text1.innerHTML = "<p>23/04/23</p>";
        text2.innerHTML = "<p>Ajout des fonctionalités basique</p>";
        text3.innerHTML = "<p>Correction de bugs divers</p>";
        text4.innerHTML = "<p>Creation du projet</p>";
    }
};