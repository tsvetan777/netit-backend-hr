var selectJobCategory   = document.getElementById("select_job_category");
var employerJobTitle    = document.getElementById("job_title");
var employerJobContent  = document.getElementById("job_content");
var employerJobPreview  = document.getElementById("job_preview");
var employerJobCategory = document.getElementById("select_job_category");
var employerJobSubmit   = document.getElementById("employer_job_submit");

employerJobSubmit.addEventListener('click', function() {

    var request = {
        job_title       : employerJobTitle.value,
        job_content     : employerJobContent.value,
        job_preview     : employerJobPreview.value,
        job_category    : employerJobCategory.value
    };

    Ajax.post('job/create', request, function(collection) {
        console.log(collection);
    });
});