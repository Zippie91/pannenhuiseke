function CreateCORSRequest(method, url) {
    var xhr = new XMLHttpRequest();
    
    if ( xhr.withCredentials !== "undefined" ) {
        console.log("XMLHTTPRequest Object2");
        xhr.open(method, url, true);
    } else if ( typeof XDomainRequest != "undefined") {
        console.log("XDomainRequest used!");
        xhr = new XDomainRequest();
        xhr.send();
    } else {
        xhr = null;
    }
    
    return xhr;
}

function GetRemoteJSON(url, params) {
    var xhr = CreateCORSRequest('GET', url);
}

var url = "https://mijnbeheer.sportafederatie.be/competities/publiek/schema/1/json";
var params = "team=51";

var xhr = CreateCORSRequest('GET', url);

if ( !xhr ) {
    throw new Error("CORS not supported!");
}

xhr.onload = function() {
    var responseText = xhr.responseText;
    console.log(responseText);
};

xhr.onerror = function() {
    console.log("There was an error.")
}

xhr.send(params);