var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("ats-form-tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("ats-form-tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }

  // Otherwise, display the correct tab:
  showTab(currentTab);
  scrollToTop();
}


function validateForm() {
  console.log('executed');
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("ats-form-tab");
  y = x[currentTab].getElementsByTagName("input");


   // A loop that checks every input field in the current tab:
   for (i = 0; i < y.length; i++) {
    // If a field is empty with a required value
    if (y[i].value == "" && y[i].required == true) {
      // Use set custom validity to false
      y[i].setCustomValidity('Please insert data/value');
      // and set the current valid status to false
      valid = false;
    } else {
      y[i].setCustomValidity('');
    }
  }
  
  // Revising validation methods per page
  if (currentTab === 0) {
    // check tab 0
    // Regular expressions for valid values
    var regExpNumbers = RegExp('^[0-9-]+$');
    var regExpEmail = RegExp('^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$');

    var telno = document.getElementById('telno');
    var mobile = document.getElementById('mobile');
    var emailInput = document.getElementById('email');
    // At lease one input in the Contact numbers set
    if (telno.value != '' || mobile.value != '' || emailInput.value != '') {
      // Make all input elements valid before checking
      telno.setCustomValidity('');
      mobile.setCustomValidity('');
      emailInput.setCustomValidity('');

      // For each input element with values, validate
      if (telno.value != '') {
        if (regExpNumbers.test(telno.value) === false) {
          valid = false;
          telno.setCustomValidity('Wrong Telephone Number Format');
        } else {
          telno.setCustomValidity('');
        }
      }

      if (mobile.value != '') {
        if (regExpNumbers.test(mobile.value) === false) {
          valid = false;
          mobile.setCustomValidity('Wrong Mobile Number Format');
        } else {
          mobile.setCustomValidity('');
        }
      }

      if (emailInput.value != '') {
        if(regExpEmail.test(emailInput.value) === false) {
          valid = false;
          emailInput.setCustomValidity('Email format invalid');
        } else {
          emailInput.setCustomValidity('');
        }
      }

    } else {
      valid = false;
    }

    // Check if all inputs on educational attainment are all filled up, only for inputs values
    // ignore all blanked inputs on each row

    // Get all generated inputs on each column
    var degRows = document.getElementById('degreeColumn').getElementsByTagName('input');
    var collRows = document.getElementById('collegeColumn').getElementsByTagName('input');
    var yearRows = document.getElementById('yearColumn').getElementsByTagName('input');
    var awardRows = document.getElementById('awardColumn').getElementsByTagName('input');

    var numberOfRows = degRows.length;

    for (var i = 0; i < numberOfRows; i++) {
      // Checks if all values are null or filled
      if ((degRows[i].value === '' && collRows[i].value === '' && yearRows[i].value === '' && awardRows[i].value === '') || (degRows[i].value !== '' && collRows[i].value !== '' && yearRows[i].value !== '' && awardRows[i].value !== '')) {
        // If valid, remove any existing setCustomValidity values
        degRows[i].setCustomValidity('');
        collRows[i].setCustomValidity('');
        yearRows[i].setCustomValidity('');
        awardRows[i].setCustomValidity('');
      } else {
        // Find offending input element and make that element invalid
        if (degRows[i].value === '') {
          degRows[i].setCustomValidity('Please enter the degree/specialization');
        }
        if (collRows[i].value === '') {
          collRows[i].setCustomValidity('Please enter the college or university attended');
        }
        if (yearRows[i].value === '') {
          yearRows[i].setCustomValidity('Plase enter the year graduated');
        }
        if (awardRows[i].value === '') {
          awardRows[i].setCustomValidity('Please enter the honors or awards earned')
        }

        valid = false;
      }
    }

    // Check if any values in the educational attainment section are filled at all
    var blankCounter = 0;
    for (var i = 0; i < numberOfRows; i++) {
      if (degRows[i].value === '') {
        blankCounter++;
      }
    }

    // If user has not entered any values in the educational attainment section
    // Make it invalid
    if (blankCounter === numberOfRows) {
      valid = false;
    }

  }

  if (currentTab === 1) {
    // Using the employment status as a conditional switch, verify relevant inputs
    if (document.getElementById('emp_never').checked === true || document.getElementById('emp_no').checked === true) {
      // If alumnus is unemployed or never employed
      console.log('emp_no');

      // Reset custom validation message for re-checking
      document.getElementById('otherps').setCustomValidity('');


      // Get all elements from the checklist
      var unemp_reason_chkboxes = document.getElementById('unemp_reason_chklst').getElementsByTagName('input');

      var unchecked_counter = 0;
      // Check if any of the checkbox elements are unchecked.
      for (var element of unemp_reason_chkboxes) {
        if (element.type === 'checkbox' ) {
          if (element.checked == false) {
            unchecked_counter++;
          }
        }
      }

      // If number of unchecked checkboxes equals number of checkboxes
      // Meaning that the user never checked anything, then make validation false
      if (unchecked_counter === 7) {
        valid = false;
      }

      if (document.getElementById('otherChkbox').checked == true) {
        if (document.getElementById('otherps').value === '') {
          document.getElementById('otherps').setCustomValidity('Specify other reasons');
          valid = false;
        }
      }



    } else if (document.getElementById('emp_yes').checked === true) {
      // If alumnus is employed
      console.log('emp_yes');
      // Reset custom validity
      document.getElementById('pres_org_name').setCustomValidity('');
      document.getElementById('pres_emp_add').setCustomValidity('');
      document.getElementById('org_type_other_text').setCustomValidity('');
      document.getElementById('self_emp_skills').setCustomValidity('');




      // Check if present employment and address is entered
      if (document.getElementById('pres_org_name').value === '') {
        document.getElementById('pres_org_name').setCustomValidity('Required');
        valid = false;
      }

      if (document.getElementById('pres_emp_add').value === '') {
        document.getElementById('pres_emp_add').setCustomValidity('Required');
        valid = false;
      }

      // Check type of organization employed in
      var org_type_emp_checkboxes = document.getElementById('org_pres_emp_chklst').getElementsByTagName('input');

      var unchecked_counter = 0;
      for (var element of org_type_emp_checkboxes) {
        if (element.type === 'checkbox' ) {
          if (element.checked == false) {
            unchecked_counter++;
          }
        }
      }

      // Check if the any checkboxes are checked
      if (unchecked_counter === 7) {
        valid = false;
      }

      if (document.getElementById('org_type_other_chkbox').checked == true) {
        if (document.getElementById('org_type_other_text').value === '') {
          document.getElementById('org_type_other_text').setCustomValidity('Specify other reasons');
          valid = false;
        }
      }

      if (document.getElementById('pres_occup').value === '') {
        document.getElementById('pres_occup').setCustomValidity('Required');
        valid = false;
      }

      // Check if alumnus is self employed
      if (document.getElementById('self_emp_status').checked === true) {

        if (document.getElementById('self_emp_skills').value !== '') {
          document.getElementById('self_emp_skills').setCustomValidity('Provide input');
          valid = false;
        }

        // Check if any checkboxes are pressed
        var self_emp_checklists = document.getElementById('self_emp_chklst').getElementsByTagName('input');
        var unchecked_counter = 0;
        for (var element of self_emp_checklists) {
          if (element.type === 'checkbox' ) {
            if (element.checked == false) {
              unchecked_counter++;
            }
          }
        }

        if (unchecked_counter === 9) {
          valid = false;
        }

        if (document.getElementById('selfemp_bustype_other_chkbox').checked == true) {
          if (document.getElementById('selfemp_bustype_other_text').value === '') {
            document.getElementById('selfemp_bustype_other_text').setCustomValidity('Specify other reasons');
            valid = false;
          }
        }
      }

      


    }
    //for debugging purposes
    // valid = false;

  }

  
 


  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  // For debugging purposes
  return valid; // return the valid status
}


function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function scrollToTop() {
    var position = document.body.scrollTop || document.documentElement.scrollTop;
    if (position) {
        window.scrollBy(0, -Math.max(1, Math.floor(position / 10)));
        scrollAnimation = setTimeout("scrollToTop()", 2);
    } else clearTimeout(scrollAnimation);
}

$(window).resize(function(){
  // console.log('resize called');
  var width = $(window).width();
  if(width < 576){
      // $('#govt').removeClass('col-2').addClass('col-4');
      // $('#priv').removeClass('col-2').addClass('col-4');
      $('.sw-col-4').removeClass('col-auto col-2').addClass('col-4');
  }
}).resize();//trigger the resize event on page load.

// Add more elements on educational attainment section
function AddMoreInputForms() {
  // Creates element dynamically
  var degree = document.createElement('input');
  // Sets default attributes
  degree.setAttribute('class', 'form-control form-control-sm mb-2');
  degree.setAttribute('type', 'text');
  degree.setAttribute('name', 'deg[]');
  // Gets default attribute values and clones it.
  var defaultClass = degree.getAttributeNode('class');
  var defaultType = degree.getAttributeNode('type');
  // Sets the cloned attribute to new inputs, very verbose, blame javascript
  var col = document.createElement('input');
  col.setAttributeNode(defaultClass.cloneNode(true));
  col.setAttributeNode(defaultType.cloneNode(true));
  col.setAttribute('name', 'col[]');
  var year = document.createElement('input');
  year.setAttributeNode(defaultClass.cloneNode(true));
  year.setAttributeNode(defaultType.cloneNode(true));
  year.setAttribute('name', 'year[]');
  var hon = document.createElement('input');
  hon.setAttributeNode(defaultClass.cloneNode(true));
  hon.setAttributeNode(defaultType.cloneNode(true));
  hon.setAttribute('name', 'award[]');
  // Appends new elements to document
  document.getElementById('degreeColumn').append(degree);
  document.getElementById('collegeColumn').append(col);
  document.getElementById('yearColumn').append(year);
  document.getElementById('awardColumn').append(hon);
}


// Create an event listener for the checkbox (Present employment)
var estatRadios = document.querySelectorAll('input[type=radio][name=estat]');

function changeHandler(event) {
  if (this.value == 'yes') {
    // Enable some form elements related to employment
    var pres_emp = document.getElementById('pres_emp_form').getElementsByTagName('input');
    for (var element of pres_emp) {
      element.removeAttribute('disabled');
    }

    // Disable reasons for unemployment
    var unemp_reasons = document.getElementById('unemp_reason_chklst').getElementsByTagName('input');
    for (var element of unemp_reasons) {
      element.setAttribute('disabled','true');
    }

    var place_of_work = document.getElementById('place_of_work').getElementsByTagName('input');
    for (var element of place_of_work) {
      element.removeAttribute('disabled');
    }
    // Autocheck local
    document.getElementById('pow_loc').checked = true;

    var org_pres_emp_chklst = document.getElementById('org_pres_emp_chklst').getElementsByTagName('input');
    for (var element of org_pres_emp_chklst) {
      element.removeAttribute('disabled');
    }

    document.getElementById('pres_occup').removeAttribute('disabled');

    var pres_emp_stat = document.getElementById('pres_emp_stat').getElementsByTagName('input');
    for (var element of pres_emp_stat) {
      element.removeAttribute('disabled');
    }
    document.getElementById('regu').checked = true;

    // Regarding self employment status
    if (document.getElementById('self_emp_status').checked === true) {
      document.getElementById('self_emp_skills').removeAttribute('disabled');
      var self_emp_chklst = document.getElementById('self_emp_chklst').getElementsByTagName('input');
      for (var element of self_emp_chklst) {
        element.removeAttribute('disabled');
      }
      enableOtherInputField(document.getElementById('selfemp_bustype_other_text'), document.getElementById('selfemp_bustype_other_chkbox'));
    }
    
    enableOtherInputField(document.getElementById('org_type_other_text'), document.getElementById('org_type_other_chkbox'));


    var time_job_after_grad = document.getElementById('time_job_after_grad').getElementsByTagName('input');
    for (var element of time_job_after_grad) {
      element.removeAttribute('disabled');
    }

    document.getElementById('q10oth').checked = true;


  } else if (this.value == 'no' || this.value == 'never_employed') {
    // Disable some form elements related to employment
    var pres_emp = document.getElementById('pres_emp_form').getElementsByTagName('input');
    for (var element of pres_emp) {
      element.setAttribute('disabled', 'true');
    }

    var unemp_reasons = document.getElementById('unemp_reason_chklst').getElementsByTagName('input');
    for (var element of unemp_reasons) {
      element.removeAttribute('disabled');
    }

    var place_of_work = document.getElementById('place_of_work').getElementsByTagName('input');
    for (var element of place_of_work) {
      element.setAttribute('disabled', 'true');
    }

    var org_pres_emp_chklst = document.getElementById('org_pres_emp_chklst').getElementsByTagName('input');
    for (var element of org_pres_emp_chklst) {
      element.setAttribute('disabled', 'true');
    }

    document.getElementById('pres_occup').setAttribute('disabled','true');

    var pres_emp_stat = document.getElementById('pres_emp_stat').getElementsByTagName('input');
    for (var element of pres_emp_stat) {
      element.setAttribute('disabled', 'true');
    }

    document.getElementById('self_emp_skills').setAttribute('disabled','true');

    var self_emp_chklst = document.getElementById('self_emp_chklst').getElementsByTagName('input');
    for (var element of self_emp_chklst) {
      element.setAttribute('disabled', 'true');
    }

    enableOtherInputField(document.getElementById('otherps'), document.getElementById('otherChkbox'));

    var time_job_after_grad = document.getElementById('time_job_after_grad').getElementsByTagName('input');
    for (var element of time_job_after_grad) {
      element.setAttribute('disabled', 'true');
    }

  }
}

Array.prototype.forEach.call(estatRadios, function(radio) {
  radio.addEventListener('change', changeHandler);
});

var agRadios = document.querySelectorAll('input[type=radio][name=ag]');
Array.prototype.forEach.call(agRadios, function(radio) {
  radio.addEventListener('change', agChangeHandler);
});

function agChangeHandler(event) {
  if(this.value === 'other' && document.getElementById('emp_yes').checked === true) {
    // Enable other box
    document.getElementById('q10othtext').removeAttribute('disabled');
  } else {
    document.getElementById('q10othtext').setAttribute('disabled', 'true');
  }
}


// Check state of the checkbox when employed value changes
function enableOtherInputField(element, checkbox) {
  if (checkbox.checked == true) {
    element.removeAttribute('disabled');
  } else {
    element.setAttribute('disabled', 'true');
  }
}

function handleOrgTypeOther(checkbox) {
  if (checkbox.checked == true) {
    document.getElementById('org_type_other_text').removeAttribute('disabled');
  } else {
    document.getElementById('org_type_other_text').setAttribute('disabled', 'true');
  }
}

function handleBustypeOther(checkbox) {
  if (checkbox.checked == true) {
    document.getElementById('selfemp_bustype_other_text').removeAttribute('disabled');
  } else {
    document.getElementById('selfemp_bustype_other_text').setAttribute('disabled', 'true');
  }
}

function handleUnempReasonOther(checkbox) {
  if (checkbox.checked == true) {
    document.getElementById('otherps').removeAttribute('disabled');
  } else {
    document.getElementById('otherps').setAttribute('disabled', 'true');
  }
}

// Enable input regarding self employment
var presEmpStatChecklst = document.querySelectorAll('input[type=radio][name=pes]');
Array.prototype.forEach.call(presEmpStatChecklst, function(radio) {
  radio.addEventListener('change', presEmpChangeHandler);
});

function presEmpChangeHandler(event) {
  if (this.value === 'self_emp') {
    document.getElementById('self_emp_skills').removeAttribute('disabled');
    var self_emp_chklst = document.getElementById('self_emp_chklst').getElementsByTagName('input');
    for (var element of self_emp_chklst) {
      element.removeAttribute('disabled');
    }
    enableOtherInputField(document.getElementById('selfemp_bustype_other_text'), document.getElementById('selfemp_bustype_other_chkbox'));

  } else {
    document.getElementById('self_emp_skills').setAttribute('disabled','true');

    var self_emp_chklst = document.getElementById('self_emp_chklst').getElementsByTagName('input');
    for (var element of self_emp_chklst) {
      element.setAttribute('disabled', 'true');
    }
  }
}