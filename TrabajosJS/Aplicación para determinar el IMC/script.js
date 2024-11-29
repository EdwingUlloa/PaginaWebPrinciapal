function calcularIMC(){
    const peso = parseFloat(document.getElementById('peso').value);
    const estatura = parseFloat(document.getElementById('estatura').value);

    if (isNaN(peso) || isNaN(estatura) || estatura <= 0) {
        alert("Por favor, ingrese valores válidos");
        return;
    }

    const imc = peso / (estatura * estatura);
    let codigoColor = '';
    let mensaje = '';

    if(imc < 18.5) {
        codigoColor = 'blue';
        mensaje = 'Bajo Peso';
    } else if(imc < 24.9) {
        codigoColor = 'green';
        mensaje = 'Peso Normal';
    } else if (imc < 29.9){
        codigoColor = 'yellow';
        mensaje = 'Sobrepeso';
    } else {
        codigoColor = 'red';
        mensaje = 'Obesidad';
    }

    const resultadoDiv = document.getElementById('resultado');
    resultadoDiv.textContent = `IMC: ${imc.toFixed(2)} - ${mensaje}`;
    resultadoDiv.style.backgroundColor = codigoColor;
}
