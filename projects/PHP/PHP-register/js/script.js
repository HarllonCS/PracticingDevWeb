// Variables
var field = document.querySelectorAll('.input-style')

// change language
function selectLang(sec) {open(sec, "_parent")}

// conditions for empty fields
document.querySelector('button').addEventListener('click', () => {
    if (field[0].value.length == 0) {
        alert("ERROR: Insert a Username.")
    } else if (field[1].value.length == 0) {
        alert("ERROR: Insert a E-mail.")
    } else if (field[2].value.length == 0) {
        alert('ERROR: Insert a passowrd.')
    }
})