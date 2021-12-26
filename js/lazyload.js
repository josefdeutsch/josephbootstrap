var array;

async function getUserAsync() {
    return await fetch(
        'https://josef-292214.appspot.com/_ah/api/echo/v1/echo?n=1',
        {
            method: 'POST',
            headers: new Headers({
                'Content-Type': 'application/x-www-form-urlencoded',
                'Content-Type': 'multipart/form-data',
                'Content-Type': 'text/plain',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
            )
        }
    ).then((response) => response.json())
    .then((response) => response.message)
    .then((message) => JSON.parse(message));
}

async function createHTML(posts, gallery) {

    let myPromise = new Promise(function (resolve, reject) {

        var outerHtml = '';
        for (i = 0; i < array.length; i++) {

            var png = '"' + array[i].png + '"';
            outerHtml += '<div class="galleryCard">' +
                '<img src=' + png + 'id="picture">' +
                '<div class="cardRow">' +
                '<h5 id="name">' + array[i].name + '</h5>' +
                '<img src="../svg/Options.svg" id="options" width="12px" height="12px">' +
                '</div>' +
                '<p id="scheme">' + array[i].tag + '</p>' +
                '</div>'
        }
        
        resolve(outerHtml);
    });

    gallery.innerHTML = await myPromise;
}

function once(fn, context) { 
	var result;
	return function() { 
		if(fn) {
			result = fn.apply(context || this, arguments);
			fn = null;
		}

		return result;
	};
}

var supplyDiv = once(() => createHTML(array,document.getElementById("gallery")));
    

window.onload = function loadJs(){ getUserAsync().then((data) => array = data); }
    

window.addEventListener('scroll',(event) => {
    if(array == null)return;
    supplyDiv();
});



