window.addEventListener("load",()=>{

    fetch("https://josef-292214.appspot.com/_ah/api/echo/v1/echo?n=1", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'

        }
    }).then(r=>r.json()).then(j=>{

        const cards = JSON.parse(j.message)

        const gallery = document.getElementById("gallery")
        gallery.innerHTML = ""

        let html = '<div class="container-fluid"><div class="row">'

        for(const card of cards) {
            html += `
                <div class="card col-6 col-md-4 col-lg-3 col-xl-2" datasrc="${card.png}">
                    <a href="${card.url}" style="aspect-ratio: 256 / 144; width=100%;">
                        <img src="" class="card-img-top" alt="${card.name}" title="${card.name}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">${card.name}</h5>
                        <p class="card-text">${card.tag}</p>
                        <div class="text-end">
                            <a href="${card.buy}" class="btn btn-primary">BUY</a>
                        </div>
                    </div>
                </div>
            `
        }

        html += '</div></div>'

        gallery.innerHTML = html

    })

})

const cardIsInViewport = (card) => {
    const currentScrollPosition = document.scrollingElement.scrollTop
    const cardPosition = card.offsetTop
    return cardPosition > currentScrollPosition && cardPosition < currentScrollPosition + window.innerHeight
}

const lazyLoadImages = ()=>{
    document.querySelectorAll(".card").forEach(card=>{
        if(cardIsInViewport(card)) {
            //console.log("KARTE SICHTBAR bitte!")
            if(!card.getAttribute("src")) {
                const imgSrc = card.getAttribute("datasrc")
                console.log(card.getAttribute("datasrc"))
                console.log(card.getAttribute("class"))
                card.setAttribute("src", imgSrc)
                card.getElementsByClassName("card-img-top")[0].setAttribute("src", imgSrc)
            }
        }
    })
}

window.addEventListener("scroll", lazyLoadImages)
window.addEventListener("load", lazyLoadImages)