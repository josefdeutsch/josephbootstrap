async function getUserAsync() {
    
    return new Promise(function (resolve) {


        fetch(
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
        )




        resolve(outerHtml);

        setTimeout(function () {
            resolve()
            console.log('bar');
        }, 3000);
    }); 
    
    
    
    
    
    
    
    await fetch(
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
    ).then((response) => response.json());
}