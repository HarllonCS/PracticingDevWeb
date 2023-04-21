var field = document.querySelectorAll('.input-style')
var current_year = new Date().getFullYear()-1

document.querySelector('button').addEventListener('click', () => {
    if (field[0].value.length == 0) {
        alert("ERROR: Insert a Username.")
    } else if (field[1].value.length == 0) {
        alert("ERROR: Insert a E-mail.")
    } else if (field[2].value.length == 0) {
        alert('ERROR: Insert a passowrd.')
    }
})