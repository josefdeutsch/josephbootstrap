var worker;

function startWorker() {
    console.log(get_template_directory_uri());
    if (typeof (Worker) !== "undefined") {
        if (typeof (w) == "undefined") {

            try {
                console.log(decodeURI(encoded));
                // expected output: "https://mozilla.org/?x=шеллы"
            } catch (e) { // catches a malformed URI
                console.error(e);
            }
           worker = new Worker("<?php bloginfo('template_url'); ?>/js/rest. js");
        }
        worker.postMessage = (worker.webkitPostMessage || worker.postMessage);
        // Send information to worker
        worker.postMessage("Sample message");

        // Listen for messages from the worker
        worker.addEventListener("message", function (event) {
            // `event.data` contains the value or object sent from the worker
            console.log("Message from worker:", event.data); // ["foo", "bar", "baz"]
        });




    } else {
        console.log("no web support");
        document.getElementById("result").innerHTML = "Sorry! No Web Worker support.";
    }
}

function stopWorker() {
    w.terminate();
    w = undefined;
}



window.onload = function loadJs() {
    startWorker();

}