$('#pagination-container').pagination({
    dataSource: obj,
    autoHidePrevious: true,
    autoHideNext: true,
    pageSize: 5,
    callback: function (data, pagination) {
        var html = data;
        scroll();
        $('#data-container').html(html);
    }
})

scrollToTop();

function scroll() {
    var elmnt = document.getElementById("reviews");
    elmnt.scrollIntoView();
}

function scrollToTop() {
    window.scrollTo(0, 0);
}

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none";
    } else {
        document.getElementById("nextBtn").style.display = "inline";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
        //...the form gets submitted:
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y1 = x[currentTab].getElementsByTagName("input");
    y2 = x[currentTab].getElementsByTagName("select");
    // A loop that checks every input field in the current tab:
    var isChecked = false;
    for (i = 0; i < y1.length; i++) {
        if (y1[i].checked == true) {
            isChecked = true;
            break;
        }
    }

    if (isChecked == false) {
        for (i = 0; i < y1.length; i++) {
            y1[i].className += " invalid";
            // and set the current valid status to false:
            valid = false;
        }
    } else {
        for (i = 0; i < y1.length; i++) {
            if (y1[i].classList.contains("invalid")) {
                y1[i].className -= "invalid";
            }
        }
    }

    for (i = 0; i < y2.length; i++) {
        // If a field is empty...
        if (y2[i].value == "---Please select an option---") {
            // add an "invalid" class to the field:
            y2[i].className += " invalid";
            // and set the current valid status to false:
            valid = false;
        } else {
            if (y2[i].classList.contains("invalid")) {
                y2[i].className -= "invalid";
            }
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
    //... and adds the "active" class to the current step:
    x[n].className += " active";
}
