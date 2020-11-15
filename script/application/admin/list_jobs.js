var contentContainer = document.getElementById("content");
var categoryDropdown = document.getElementById("category-dropdown");

var jobCollectionRef = [];
var objectCollection = { jobCollection : [] };

var render = function() {

    Ajax.getJSON("jobs", function(data) {

        var jobCollection   = [];
        jobCollectionRef    = data;
        for(var $index = 0; $index < data.length; $index++) {

            var jobElement = data[$index];
            
            var temp = `<div class="job">
                            <div class="col-8">
                                <header class="job-title">${jobElement.jobTitle}</header>
                                <div class="job-content">${jobElement.jobContent}</div>
                                <div class="job-timestamp">Today</div>
                            </div>
                            
                            <div class="d-flex col-2">
                                <button class="btn btn-primary" onclick="editJob(${$index})">Edit</button>
                            </div>
                            <div class="d-flex col-2">
                                <button class="btn btn-dark" onclick="deleteJob(${$index})">Delete</button>
                            </div>
                        </div>`;

            jobCollection.push(temp);
        };

        var jobTemplate = jobCollection.join('');
        contentContainer.innerHTML = jobTemplate;
        
    }, function() {
        console.log("GET error");
        console.log(error);
    });
};

var renderJob = function(data) {

    var jobCollection = [];
    for(var i = 0; i < data.length; i++) {

        var jobElement = data[i];
        
        var temp = `<div class="job">
                        <div class="col-8">
                            <header class="job-title">${jobElement.jobTitle}</header>
                            <div class="job-content">${jobElement.jobContent}</div>
                            <div class="job-timestamp">Today</div>
                        </div>
                        
                        <a class="d-flex" href="#"> + </a>
                        
                        <div class="d-flex col-2">
                            <button class="btn btn-primary" onclick="editJob(${i})">Edit</button>
                        </div>
                        <div class="d-flex col-2">
                            <button class="btn btn-dark" onclick="deleteJob(${i})">Delete</button>
                        </div>
                    </div>`;
    
        jobCollection.push(temp);
    }

    var jobTemplate = jobCollection.join('');
    contentContainer.innerHTML = jobTemplate;
};

var renderRelatedCategoryJobs = function(categoryId) {

    Ajax.getJSON(`jobs/category/${categoryId}`, function(data) {
        renderJob(data);
    });
};

Ajax.getJSON("categories", function(collection) {

    var templateCollection = [];
    for(var i = 0; i < collection.length; i++) {
        templateCollection.push(`<a class="dropdown-item" href="#" onclick="renderRelatedCategoryJobs(${collection[i].id})">${collection[i].jobTitle}<a/>`);
    };

    categoryDropdown.innerHTML = templateCollection.join('');
});

var deleteJob = function(index) {

    var URLEncodedRequest = {
        job_id : jobCollectionRef[index].id
    };

    Ajax.post('jobs/delete', URLEncodedRequest, function() {
        render();
    });
};

render();