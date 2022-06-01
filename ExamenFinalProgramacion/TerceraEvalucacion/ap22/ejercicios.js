document.addEventListener("DOMContentLoaded", main);

function main() {
    ej2();
    ej3("nulla");
    ej4();
    ej5();
    ej6();
    ej7();
}

function ej2() {
    let parrafos = document.getElementsByTagName("p");
    for (let i = 0; i < parrafos.length; i++) {
        let parrafo = parrafos[i];
        let texto = parrafo.innerHTML;
        let numPalabras = texto.split(" ").length;
        let muestraNumPalabras = document.createElement("div");
        let mensaje = document.createElement("strong");
        mensaje.innerHTML = "total palabras: " + numPalabras;
        muestraNumPalabras.appendChild(mensaje);
        parrafo.appendChild(muestraNumPalabras);
        console.log(numPalabras);
    }
}

function ej3(palabra) {

    /*         let parrafos = document.getElementsByTagName("p");
            for (let i = 0; i < parrafos.length; i++) {
                let texto = parrafos[i].innerHTML;
                texto = texto.replace(/nulla/gi, "<a href='http://google.com'>nulla</a>");
                parrafos[i].innerHTML = texto;
            }  */

    let parrafos = document.getElementsByTagName("p");
    for (let i = 0; i < parrafos.length; i++) {
        let texto = parrafos[i].innerHTML;
        let bloques = texto.split(palabra);
        parrafos[i].innerHTML = "";
        for (let j = 0; j < bloques.length; j++) {
            parrafos[i].innerHTML += bloques[j];
            if (j < bloques.length - 1) {
                let enlace = document.createElement("a");
                enlace.href = "http://google.com";
                enlace.innerHTML = palabra;
                parrafos[i].appendChild(enlace);
            }
        }
    }
}

function ej4() {
    let h1 = document.getElementsByTagName("h1");
    for (let i = 0; i < h1.length; i++) {
        let imagen = document.createElement("img");
        imagen.src = "https://lledogrupo.com/wp-content/uploads/2019/01/star-256.png";
        imagen.style.width = "16px";
        imagen.style.marginLeft = "10px";
        h1[i].appendChild(imagen);
    }
}

function ej5() {
    let abstract = document.getElementById("abstract");
    abstract.addEventListener("click", function () {
        let colorActual = window.getComputedStyle(this).getPropertyValue("background-color");
        console.log(colorActual);
        if (colorActual == 'rgb(144, 238, 144)') {
            this.style.backgroundColor = 'rgb(128, 0, 0)';
        } else {
            this.style.backgroundColor = 'rgb(144, 238, 144)';
        }
    });
    /* let abstract = document.getElementById("abstract");
    abstract.addEventListener("click", cambiaColor); */
}

/* function cambiaColor() {
    let colorActual = window.getComputedStyle(this).getPropertyValue("background-color");
    console.log(colorActual);
    if (colorActual == 'rgb(144, 238, 144)') {
        this.style.backgroundColor = 'rgb(128, 0, 0)';
    } else {
        this.style.backgroundColor = 'rgb(144, 238, 144)';
    }
} */

function ej6() {
    let content = document.getElementById("content");
    content.addEventListener("click", function () {
        let documentFontSize = window.getComputedStyle(document.body).getPropertyValue("font-size");
        let doubleDocumentFontSize = parseInt(documentFontSize) * 2;
        let fontSize = window.getComputedStyle(this).getPropertyValue("font-size");
        let newSize = parseInt(fontSize) + 1;
        if (newSize < doubleDocumentFontSize) {
            this.style.fontSize = newSize + "px";
        } else {
            this.style.fontSize = documentFontSize;
        }

    });
}

function ej7() {
    let botones = document.getElementsByClassName("oculta");
    for (let i = 0; i < botones.length; i++) {
        botones[i].addEventListener("click", function () {
            let hermano = this.nextElementSibling;
            let textoBoton = this.innerHTML;
            if (textoBoton == "Oculta") {
                this.innerHTML = "Muestra";
                hermano.style.display = "none";
            } else {
                this.innerHTML = "Oculta";
                hermano.style.display = "block";
            }
        });

    }

}