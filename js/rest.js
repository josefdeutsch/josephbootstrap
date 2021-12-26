self.postMessage("uschi");

// Listen for messages from the main thread
self.addEventListener("message", function(event) {
    // `event.data` contains the value or object sent from main
    console.log("Message from parent1:", event.data); // "Sample message"
});

