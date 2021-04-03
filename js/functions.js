function post(url, data, callback) {

    let xhr = new XMLHttpRequest();

    xhr.open("POST", url, true);
    xhr.responseType = 'text';
    xhr.send(data);

    xhr.onload = function () {
        if (xhr.status != 200) {
            console.log('Ошибка' + xhr.status + ':' + xhr.statusText);
        } else {
            callback(xhr.response);
        }
    }

}