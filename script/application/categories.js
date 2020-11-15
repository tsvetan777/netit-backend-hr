var categoryEditorForm          = document.getElementById("category-editor");
var categoryEditorFormSubmit    = document.getElementById("category-editor-submit");
var categoryEditorFormCancel    = document.getElementById("category-editor-cancel");

var categoryTitleInput  = document.getElementById("category-title");
var messageBanner       = document.getElementById("message-banner");
var categoryContainer   = document.getElementById("category-container");

messageBanner.style.display             = "none";
categoryEditorFormCancel.style.display  = "none";

var categoryId              = null;
var categoryCollectionRef   = [];

var renderCategory = function() {

    Ajax.getJSON('categories', function(collection) {

        categoryCollectionRef = collection;
        renderCategoryContainer(categoryCollectionRef);
    });
};

var renderCategoryContainer = function(collection) {

    var templateCollection = [];
    for(var $index = 0; $index < collection.length; $index++) {

        var element = collection[$index];
        var template = `<div class="job">
                            <div class="col-11">
                                <div class="row">
                                    <div class="d-flex col-8">
                                        <span>${element.jobTitle}</span>
                                    </div>

                                    <div class="d-flex col-2">
                                        <button class="btn btn-primary" onclick="editCategory(${$index})">Edit</button>
                                    </div>
                                    
                                    <div class="d-flex col-2">
                                        <button class="btn btn-dark" onclick="deleteCategory(${$index})">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>`;

        templateCollection.push(template);
    }
    categoryContainer.innerHTML = templateCollection.join('');
};

var editCategory = function(index) {
    categoryTitleInput.value                = categoryCollectionRef[index].categoryTitle;
    categoryId                              = categoryCollectionRef[index].categoryId;
    categoryEditorFormSubmit.value          = "Submit";
    categoryEditorFormCancel.style.display  = "inline";
};

var deleteCategory = function(index) {

    var URLEncodedRequest = {

        category_id : categoryCollectionRef[index].categoryId
    };

    Ajax.post('categories/delete', URLEncodedRequest, function() {

        renderCategory();
    }, function() {

        console.log("Error");
    });
};

renderCategory();

categoryEditorFormCancel.addEventListener('click', function() {

    categoryEditorFormSubmit.value          = "Add new category";
    categoryEditorFormCancel.style.display  = "none";
    categoryId                              = null;
});

categoryEditorForm.addEventListener('submit', function(e) {

    e.preventDefault();
    var categoryTitleInputValue = categoryTitleInput.value;

    if(categoryTitleInputValue.length < 3) {
        alert("Minimum length of 3 charecters required!");
        return;
    }

    var URLEncodedRequest = {
        category_id     : categoryId,
        category_title  : categoryTitleInputValue
    };

    if(categoryId) {

        Ajax.post('categories/update', URLEncodedRequest, function(collection) {

            messageBanner.style.display = "block";
            categoryTitleInput.value    = "";

            categoryCollectionRef.push(collection[0]);
            renderCategoryContainer(categoryCollectionRef);

            setTimeout(function() {

                messageBanner.style.display = "none";
            }, 3000);

        }, function() {
            console.log("Error");
        });

    } else {

        Ajax.postJSON('categories/create', URLEncodedRequest, function(collection) {

            messageBanner.style.display = "block";
            categoryTitleInput.value    = "";

            categoryCollectionRef.push(collection[0]);
            renderCategoryContainer(categoryCollectionRef);

            setTimeout(function() {

                messageBanner.style.display = "none";
            }, 3000);
            
        }, function() {
            console.log("Error");
        });
    };
});