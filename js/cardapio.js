function mostrar(id){
conteudos=document.getElementsByClassName('itensclass');
for (var i= 0 ; i < conteudos.length; i++){
    conteudos[i].style.display='none'; /* deixa não visiveis*/
}
click= document.getElementById(id); /*pega o id do argumento */
click.style.display='inherit';
}

