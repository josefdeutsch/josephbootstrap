

<div class="container vh-100 d-flex align-items-center" >
        <div class="row justify-content-center" >
        
          <div class="col-md-4">
            <img class="img-fluid rounded" src="<?=get_template_directory_uri().'/png/Placeholder.png'?>" alt="Cinque Terre">
        </div>
        <div class="col-md-8 text-black" >
            <h1>My First Bootstrap Page</h1>
            <p>By default, containers have left and right padding, with no top or bottom padding. Therefore, we often use spacing utilities, such as extra padding and margins to make them look even better. For example, </p>
                  </div>
                </div>
      </div>
<!--main class="container">



<div class="item">
            <h1 id="header">Digital space is true</h5>
                <hr id="divider">
                <p id="article">Once admitted that art is the bringing into work of truth and truth means the unconcealment of being, then in the work of fine art the true space, that which denotes its own, must also become authoritative.</p>
                <button class="collapsible" id="collapsible">READ MORE</button>
                <div class="readmore" id="readmore">
                    <p>The structures are bodies. Its mass consists of information and is designed in a variety of ways. They are plastic. The design takes place in the delimitation as inclusion and exclusion. This is where space comes into play. It is occupied by the plastic structure and thus mentally identified as a closed, transparent and empty volume.

                        The digital body embodies something. He embodies the space. The sculpture is the occupation of space. She conquers and rules the void. The digital space, within which the plastic structure can be found like an existing object, is the space that is enclosed by voluminous figures.
                        
                    </p>
                </div>
        </div>

 <div class="item">
                <img id="avatar">

                
</main-->


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
