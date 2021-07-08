// FORM VALIDATION
var inputValidation01 = document.getElementById("validation01");
var inputValidation02 = document.getElementById("validation02");
var inputValidation03 = document.getElementById("validation03");
var nextButton = document.getElementById("next");
var errorMessagE = document.getElementById("errorMessage");

// FORM VALIDATION PART1
nextButton.onclick = function(){

  if (inputValidation01.value=='- Choisir votre réponse -') {
    errorMessagE.style.display = "block";
    inputValidation01.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation01.style.borderColor = "#cccccc";
  }

  if (inputValidation02.value=='- Choisir votre réponse -') {
    errorMessagE.style.display = "block";
    inputValidation02.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation02.style.borderColor = "#cccccc";
  }

  if (inputValidation03.value=='- Choisir votre réponse -') {
    errorMessagE.style.display = "block";
    inputValidation03.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation03.style.borderColor = "#cccccc";
  }

  if (inputValidation01.value!=='- Choisir votre réponse -' && inputValidation02.value!=='- Choisir votre réponse -' && inputValidation03.value!=='- Choisir votre réponse -') {
      var text2 = document.getElementById("part2").style.display = "block";
      var text1 = document.getElementById("part1").style.display = "none";
      var next = document.getElementById("next").style.display = "none";
      var previous = document.getElementById("previous").style.display = "block";
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
  } else  {
      var text2 = document.getElementById("part2").style.display = "none";
      var text1 = document.getElementById("part1").style.display = "block";
      var next = document.getElementById("next").style.display = "block";
      var previous = document.getElementById("previous").style.display = "none";
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
  }

}

// BUTTON PREVIOUS

    function MyFunctionprevious() {
      var text2 = document.getElementById("part2").style.display = "none";
      var text1 = document.getElementById("part1").style.display = "block";
      var next = document.getElementById("next").style.display = "block";
      var previous = document.getElementById("previous").style.display = "none";
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

// FORM VALIDATION PART2

var inputValidation04 = document.getElementById("validation04");
var inputValidation05 = document.getElementById("validation05");
var inputValidation06 = document.getElementById("validation06");
var inputValidation07 = document.getElementById("validation07");
var inputValidation08 = document.getElementById("validation08");
var inputValidation09 = document.getElementById("validation09");
var inputValidation10 = document.getElementById("validation10");
var inputValidation11 = document.getElementById("validation11");
var inputValidation12 = document.getElementById("validation12");
var inputValidation13 = document.getElementById("validation13");
var inputValidation14 = document.getElementById("validation14");
var inputValidation15 = document.getElementById("validation15");
var inputValidation16 = document.getElementById("validation16");
var inputValidation17 = document.getElementById("validation17");
var inputValidation18 = document.getElementById("validation18");
var inputValidation19 = document.getElementById("validation19");
var inputValidation20 = document.getElementById("validation20");
var inputValidation21 = document.getElementById("validation21");

var finalButton = document.getElementById("finaliseApplication");
var errorMessagE = document.getElementById("errorMessage");
var checkedConditions = document.querySelectorAll('input#condition_un:checked') || document.querySelectorAll('input#condition_deux:checked');
var obligationone = document.getElementById('obligationOne');
var obligationtwo = document.getElementById('obligationTwo');


finalButton.onclick = function(){


  if (inputValidation04.value=='- Choisir votre réponse -') {
    errorMessagE.style.display = "block";
    inputValidation04.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation04.style.borderColor = "#cccccc";
  }

  if (inputValidation05.value=='') {
    errorMessagE.style.display = "block";
    inputValidation05.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation05.style.borderColor = "#cccccc";
  }

  if (inputValidation06.value=='') {
    errorMessagE.style.display = "block";
    inputValidation06.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation06.style.borderColor = "#cccccc";
  }

  if (inputValidation07.value=='') {
    errorMessagE.style.display = "block";
    inputValidation07.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation07.style.borderColor = "#cccccc";
  }

  if (inputValidation08.value=='') {
    errorMessagE.style.display = "block";
    inputValidation08.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation08.style.borderColor = "#cccccc";
  }

  if (inputValidation09.value=='') {
    errorMessagE.style.display = "block";
    inputValidation09.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation09.style.borderColor = "#cccccc";
  }

  if (inputValidation10.value=='') {
    errorMessagE.style.display = "block";
    inputValidation10.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation10.style.borderColor = "#cccccc";
  }

  if (inputValidation11.value=='') {
    errorMessagE.style.display = "block";
    inputValidation11.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation11.style.borderColor = "#cccccc";
  }

  if (inputValidation12.value=='') {
    errorMessagE.style.display = "block";
    inputValidation12.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation12.style.borderColor = "#cccccc";
  }

  if (inputValidation13.value=='') {
    errorMessagE.style.display = "block";
    inputValidation13.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation13.style.borderColor = "#cccccc";
  }

  if (inputValidation14.value=='') {
    errorMessagE.style.display = "block";
    inputValidation14.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation14.style.borderColor = "#cccccc";
  }

if (inputValidation15.value=='') {
    errorMessagE.style.display = "block";
    inputValidation15.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation15.style.borderColor = "#cccccc";
  }

if (inputValidation16.value=='') {
    errorMessagE.style.display = "block";
    inputValidation16.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation16.style.borderColor = "#cccccc";
  }

if (inputValidation17.value=='') {
    errorMessagE.style.display = "block";
    inputValidation17.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation17.style.borderColor = "#cccccc";
  }

if (inputValidation18.value=='') {
    errorMessagE.style.display = "block";
    inputValidation18.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation18.style.borderColor = "#cccccc";
  }

if (inputValidation19.value=='') {
    errorMessagE.style.display = "block";
    inputValidation19.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation19.style.borderColor = "#cccccc";
  }

if (inputValidation20.value=='') {
    errorMessagE.style.display = "block";
    inputValidation20.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation20.style.borderColor = "#cccccc";
  }

if (inputValidation21.value=='') {
    errorMessagE.style.display = "block";
    inputValidation21.style.borderColor = "red";
  } else {
    errorMessagE.style.display = "none";
    inputValidation21.style.borderColor = "#cccccc";
  }

// GENERAL CONDITION CHECKING

    if (checkedConditions.length === 0) {
      obligationone.style.color = "red";
      obligationtwo.style.color = "red";
    } else {
      obligationone.style.color = "red";
      obligationtwo.style.color = "red";
    }

// SUBMISSION IF ALL IS OK
   if (inputValidation04.value!=='- Choisir votre réponse -' && inputValidation05.value!=='' && inputValidation06.value!=='' && inputValidation07.value!=='' && inputValidation08.value!=='' && inputValidation09.value!=='' && inputValidation10.value!=='' && inputValidation11.value!=='' && inputValidation12.value!=='' && inputValidation13.value!=='' && inputValidation14.value!=='' && inputValidation15.value!=='' && inputValidation16.value!=='' && inputValidation17.value!=='' && inputValidation18.value!=='' && inputValidation19.value!=='' && inputValidation20.value!=='' && inputValidation21.value!=='') {
    // Conditions générales
     if(!form.accept_condition_generale.checked) {
        alert("Please indicate that you accept the Terms and Conditions");
        form.accept_condition_generale.focus();
        return false;
      }
      return true;
    }

}
