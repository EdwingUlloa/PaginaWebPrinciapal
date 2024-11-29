function convertTemp() {
    const temp = parseFloat(document.getElementById('inputTemp').value);
    const unit = document.getElementById('inputUnit').value;
    let result = '';

    if (isNaN(temp)){
        result = 'por favor, ingresa un numero valido.';
    } else{
        switch (unit) {
            case 'C':
                result = `${temp} °C = ||  ${(temp * 9/5) + 32} °F ||  ${temp + 273.15} K ||  ${(temp + 273.15) * 9/5} R`;
                break;

            case 'F':
                result = `${temp} °F = ||  ${(temp - 32) * 5/9} °C ||  ${((temp - 32) * 5/9) + 273.15} K || ${temp + 459.67} R`;
                break;

            case 'K':
                result = `${temp} K = ||  ${temp - 273.15} °C ||  ${(temp - 273.15) * 9/5 + 32} °F || ${temp * 9/5} R`;
                break;

            case 'R':
                result = `${temp} R = ||  ${(temp - 491.67) * 5/9} °C ||  ${(temp - 491.67) * 5/9 + 273.15} K || ${temp - 459.67} °F`;
                break;
        }
    }
    document.getElementById('result').innerText = result;
}

    