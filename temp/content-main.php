<main class="container">

<div class="item">
        <h1 id="header">Joseph Deutsch</h5>
            <hr id="divider">
            <p id="article">The ideal digital artwork is the vision of an idea that magically drives me
                every day.</p>
            <button class="collapsible" id="collapsible">READ MORE</button>
            <div class="readmore" id="readmore">
                <p>At the beginning of 2010 the young Joseph D. was working as a photographer in Vienna, but
                    that wasn't good enough for him. He wanted to become a painter & sculptor and study fine
                    arts, but failed several times at the university entrance exams and decided to go his
                    own way. In a market dominated by status and money and without training or craft, he had
                    to rely on his intuition. How should it go on now? His gut told him that it was possible
                    that digital art could one day prevail. Then, under free conditions, the perfect
                    environment would surely arise to create the ideal work of art.
                </p>
            </div>
</div>

 <div class="item">
                <img id="avatar">

</main>


<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>
