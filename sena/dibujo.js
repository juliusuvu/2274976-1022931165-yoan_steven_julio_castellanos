function dibujarlinea(color, xinicial, yinicial, xfinal, yfinal)
{
lienzo.beginPath();
lienzo.strokeStyle = color;
lienzo.moveTo(xinicial, yinicial);
lienzo.lineTo(xfinal, yfinal);
lienzo.stroke();
lienzo.closePath();
}

var d = document.getElementById("goku");
var lienzo = d.getContext("2d")

dibujarlinea("blue", 10, 300, 220, 10);
dibujarlinea("red", 10, 220, 300, 10);