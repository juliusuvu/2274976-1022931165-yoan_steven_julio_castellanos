var z = aleatorio(10, 20);
document.write(z)
function aleatorio (min,maxl)
{
    var resultado;
    resultado = Math.floor(Math.random()* (maxl - min + 1)) + min;
    return resultado;
}
