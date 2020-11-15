(function() {

    var requestTransform = function(requestBody) {

        var transformCollection = [];
        for(var index in requestBody) {
            transformCollection.push(`${index}=${requestBody[index]}`);
        };
        return transformCollection.join('&');
    };

    var baseUrlTransform = function(url) {

        function urlSplit(url) {
            const array = url.split("/");
        }
        
        var endpoint                = urlSplit[0];
        var method                  = urlSplit[1] || 'index';
        var requestId               = urlSplit[2] || null;

        function queryParameterCollection(url){
            const array = url.split("/?");
        }
        var queryParameter              = queryParameterCollection[1];
        
        if(queryParameter) {
            return `http://localhost/netit-backend-hr/routes.php?endpoint=${endpoint}&method=${method}&${queryParameter}`;
        }

        if(requestId) {
            return `http://localhost/netit-backend-hr/routes.php?endpoint=${endpoint}&method=${method}&id=${requestId}`;
        }

        return `http://localhost/netit-backend-hr/routes.php?endpoint=${endpoint}&method=${method}`;
    };

    var ajaxHelper = function(callbackSuccess, callbackError) {

        var xmlHttpRequest  = new XMLHttpRequest();
        var requestMethod   = (requestObject) ? "POST" : "GET";
        var isJSONRequest   = isJSONRequest || false;
        var url             = baseUrlTransform(url);
        var requestObject   = requestTransform(requestObject);

        xmlHttpRequest.open(requestMethod, url);
        xmlHttpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlHttpRequest.send(requestObject);

        xmlHttpRequest.onreadystatechange = function() {

            var statusGroup = ((this.status).toString())[0];

            var HTTPStatus = {
                SUCCESS : (statusGroup == 2),
                FAIL    : (statusGroup == 4 || statusGroup == 5)
            };

            var isHTTPRequestProcessed  = (this.readyState == xmlHttpRequest.DONE);
            var isHTTPRequestSuccess    = isHTTPRequestProcessed && HTTPStatus.SUCCESS;
            var isHTTPRequestFail       = isHTTPRequestProcessed && HTTPStatus.FAIL;

            if(isHTTPRequestProcessed) {
                
                var responseObject = isJSONRequest ? JSON.parse(this.responseText) : this.responseText;
            };

            if(isHTTPRequestSuccess) {
                
                return callbackSuccess(responseObject);
            };

            if(isHTTPRequestFail) {

                return callbackError(responseObject);
            };
        };
    };

    window.Ajax = {

        get : function(url, successCallback, errorCallback) {
            
            return ajaxHelper(url, null, false, successCallback, errorCallback);
        },

        getJSON : function(url, successCallback, errorCallback) {
            
            return ajaxHelper(url, null, true, successCallback, errorCallback);
        },

        post : function(url, body, successCallback, errorCallback) {
            
            return ajaxHelper(url, body, false, successCallback, errorCallback);
        },

        postJSON : function(url, body, successCallback, errorCallback) {

            return ajaxHelper(url, body, true, successCallback, errorCallback);
        }
    };
})();
