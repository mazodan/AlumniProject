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
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
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
  var element = document.createElement('input');
  element.setAttribute('class', 'form-control form-control-sm mb-2');
  element.setAttribute('type', 'text');
  var col = element.cloneNode(true);
  var year = element.cloneNode(true);
  var hon = element.cloneNode(true);
  document.getElementById('degreeColumn').append(element);
  document.getElementById('collegeColumn').append(col);
  document.getElementById('yearColumn').append(year);
  document.getElementById('awardColumn').append(hon);
}