function searchByTags(parameter, tag) {
    var parameters = ['include', 'exclude'];
    var param = parameters[parameter];

    var newUrl = window.location.href;
    var position = newUrl.indexOf(param);
    if (position > -1) {
        var sub = newUrl.substring(position);
        if (sub.indexOf("&") > -1) {
            sub = sub.substring(0, sub.indexOf("&"));
        }
        var ids = sub.substring(sub.indexOf('=') + 1);
        var arrayOfIds = ids.split(",");
        var indexOfId = arrayOfIds.indexOf(tag);
        if (~indexOfId) {
            arrayOfIds.splice(indexOfId, 1);
        } else {
            arrayOfIds.push(tag);
        }
        var forReplace = "";
        if (arrayOfIds.length > 0) {
            forReplace = param.concat("=").concat(arrayOfIds.toString());
        }
        newUrl = newUrl.replace(sub, forReplace);
    } else {
        if (newUrl.indexOf("?") > -1) {
            newUrl = newUrl.concat("&");
        } else {
            newUrl = newUrl.concat("?");
        }
        newUrl = newUrl.concat(param).concat("=").concat(tag);
    }
    var another = parameters[parameter ^ 1];
    newUrl = removeTag(newUrl, another, tag);
    newUrl = cleanUrl(newUrl);

    window.location.href = newUrl;
}

function removeTag(url, parameter, tag) {
    var newUrl = url;
    var position = newUrl.indexOf(parameter);
    if (position > -1) {
        var sub = newUrl.substring(position);
        if (sub.indexOf("&") > -1) {
            sub = sub.substring(0, sub.indexOf("&"));
        }
        var ids = sub.substring(sub.indexOf('=') + 1);
        var arrayOfIds = ids.split(",");
        var indexOfId = arrayOfIds.indexOf(tag);
        if (~indexOfId) {
            arrayOfIds.splice(indexOfId, 1);
        }
        var forReplace = "";
        if (arrayOfIds.length > 0) {
            forReplace = parameter.concat("=").concat(arrayOfIds.toString());
        }
        newUrl = newUrl.replace(sub, forReplace);
    }

    return newUrl;
}

function cleanUrl(url) {
    var newUrl = url;
    var patt = /\?\&+/g;
    var result = patt.exec(newUrl);
    if (result) {
        newUrl = newUrl.replace(result, "?");
    }
    if (newUrl.length === newUrl.indexOf("?") + 1) {
        newUrl = newUrl.replace("?", "");
    }
    if (newUrl.length === newUrl.indexOf("&") + 1) {
        newUrl = newUrl.replace("&", "");
    }

    return newUrl;
}