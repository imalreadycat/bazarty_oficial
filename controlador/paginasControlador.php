<?php

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */


/** anon */
function index() {
    exibir("paginas/inicial");
}


function sobre() {
    exibir("paginas/sobre");
 
}
function mapa() {
    exibir("paginas/mapa");
 
}
