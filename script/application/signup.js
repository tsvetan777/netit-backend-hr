var registrationFormAdmin       = document.getElementById("signup-form-admin");
var registrationFormHr          = document.getElementById("signup-form-hr");
var registrationFormEmployer    = document.getElementById("signup-form-employer");
var registrationFormEmployee    = document.getElementById("signup-form-employee");

registrationFormAdmin.style.display     = "none";
registrationFormHr.style.display        = "none";
registrationFormEmployer.style.display  = "none";
registrationFormEmployee.style.display  = "none";

var showAdminForm = function() {

    registrationFormAdmin.style.display     = "block";
    registrationFormHr.style.display        = "none";
    registrationFormEmployer.style.display  = "none";
    registrationFormEmployee.style.display  = "none";
};

var showHrForm = function() {

    registrationFormAdmin.style.display     = "none";
    registrationFormHr.style.display        = "block";
    registrationFormEmployer.style.display  = "none";
    registrationFormEmployee.style.display  = "none";
};

var showEmployerForm = function() {

    registrationFormAdmin.style.display     = "none";
    registrationFormHr.style.display        = "none";
    registrationFormEmployer.style.display  = "block";
    registrationFormEmployee.style.display  = "none";
};

var showEmployeeForm = function() {

    registrationFormAdmin.style.display     = "none";
    registrationFormHr.style.display        = "none";
    registrationFormEmployer.style.display  = "none";
    registrationFormEmployee.style.display  = "block";
};