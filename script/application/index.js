var contentContainer    = document.getElementById("content");
var categoryPanel       = document.getElementById("category-panel");
var categoryDropdown    = document.getElementById("category-dropdown");

var searchForm          = document.getElementById("search-form");
var searchInput         = document.getElementById("search-job");
var searchAction        = document.getElementById("search-job-action");
var clearAction         = document.getElementById("search-job-clear");
var searchCombobox      = document.getElementById("search-job-combobox");

var activeJobid = null;

var objectCollection = { jobCollection : [] };

var renderFullView = function(jobId) {

    activeJobid = jobId;

    Ajax.getJSON(`jobs/index/${jobId}`, function(collection) {

        var templateFullViewCollection = [];
        for(var i = 0; i < collection.length; i++) {

            templateFullViewCollection.push(`<div class="job" id="full-view-job-container">
                                                <div class="col-11">
                                                    <header class="job-title">${collection[i].jobTitle}</header>
                                                    <div class="job-content">${collection[i].jobContent}</div>
                                                    <div class="job-preview-content">${collection[i].jobPreviewContent}</div>
                                                </div>
                                            </div>`);
        };

        contentContainer.style.display  = 'none';
        searchForm.style.display        = 'none';
    });
};

var renderJob = function(data) {

    var jobCollection = [];
    for(var i = 0; i < data.length; i++) {

        var jobElement = data[i];

        var template = `<div class="job">
                            <div class="col-11">
                                <header class="job-title">${jobElement[i].jobTitle}</header>
                                <div class="job-content">${jobElement[i].jobContent}</div>
                                <div class="job-timestamp">Today</div>
                            </div>
                            <button class="btn btn-primary job-read-button" href="#">View</button>
                        </div>`;
        
        jobCollection.push(template);
    };

    var jobTemplate             = jobCollection.join('');
    contentContainer.innerHTML  = jobTemplate;

    var jobReadButtonCollection = document.getElementsByClassName("job-read-button");
    for(let i = 0; i < jobReadButtonCollection.length; i++) {

        jobReadButtonCollection[i].addEventListener('click', function() {
            renderFullView(data[i].id);
        });
    };
};

var renderRelatedCategoryJobs = function(categoryId) {

    Ajax.getJSON(`jobs/category/${categoryId}`, function(data) {

        renderJob(data);
    });
};

searchAction.addEventListener('click', function(e) {

    var searchInputQuery    = searchInput.value;
    var searchBy            = searchCombobox.value;
    
    Ajax.getJSON(`jobs/search/?q=${searchInputQuery}&searchBy=${searchBy}`, function(data) {

        renderJob(data);
    });
});

clearAction.addEventListener('click', function() {

    Ajax.getJSON("jobs", function(data) {
        
        renderJob(data);

    }, function() {

        console.log("GET error");
        console.log(error);
    });
});

Ajax.getJSON("categories", function(collection) {

    var templateCollection = [];
    for(var i = 0; i < collection.length; i++) {

        templateCollection.push(`<a class="dropdown-item" href="#" onclick="renderRelatedCategoryJobs(${collection[i].id})">${collection[i].categoryTitle}</a>`);
    };

    categoryDropdown.innerHTML = templateCollection.join('');
});

Ajax.getJSON("jobs", function(data) {

    renderJob(data);

}, function() {

    console.log("GET error");
    console.log(error);
});