function validateQuestionMinimal() {
    // Die 'id' des input elements muss hier exakt eingetragen werden.
    // Damit ist diese Funktion nur in bestimmten Fällen wieder verwendbar.
    let inputElement = document.getElementById("text-input-field");
    let value = inputElement.value;

    // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
    if (!value) {
        // Früher mit alert("Bla bla ...");
        setWarning("Please fill with a quantity");
        return false;
    }
}

function validateQuestion(inputID, radioName) {
    // MUSS FÜR VERSCHIEDENE TYPEN VON INPUT FELDERN FUNKTIONIEREN.
    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
        // Prüfe, ob der Range Slider verändert wurde.
        if (!sliderHasChanged()) {
            setWarning("Please change the position of the slider.");
            return false;
        }
    }
    else if (inputElement.type === 'radio') {
        let radioButtons = document.getElementsByName(radioName);
        let selectedValue;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }

        if (!selectedValue) {
            setWarning("Please choose, before moving on.");
            return false;
        }
    }
    else {
        // Prüfe den 'generellen' Fall für Text-, Zahlenfelder etc.
        let value = inputElement.value;

        // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
        if (!value) {
            // Früher mit alert("Bla bla ...");
            setWarning("Please tell us how many...");
            return false;
        }
    }
}


/*NUMBER QUESTIONS*/
function validateNumber() {

    let value = document.getElementById("number-text").value;
    // wenn kein wert, soll stoppen
    if (value == "") {
        setWarning("Please fill with a number.");

        return false;
    }

}

/*RADIO BOTTONS*/
function validateRadio(radioName) {
    let radioBottons = document.getElementsByName(radioName);

    for (let i = 0; i < radioBottons.length; i++) {
        let radioBtn = radioBottons[i];

        if (radioBtn.checked == true) {
            return true;
        }

    }
    setWarning("Please choose, before moving on...");
    return false;

}


/*RANGE SLIDERS*/
function sliderChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}


/*CHECKBOXES*/

function validateCheckboxes(){
    let array = [];
    let checkboxes = document.querySelectorAll('input[type=checkbox]:checked');

    for (let i = 0; i < checkboxes.length; i++){
        array.push(checkboxes[i].value);
    }

    if (array.length === 0) {
        setWarning ("At least choose 'other'...")
        return false;
    }

    document.getElementById("checkboxValues").value = array.toString();
}

// TOOLS -------------------------------------------------------------------

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}

// TOTAL POINTS
/*  if (array_sum($a) < 5)
        {
            echo "<p class='final-feedback'>You should improve your health routines</p>";
    
        }
        else {
            echo "<p class='final-feedback'>You are in a good shape</p>";
        } */