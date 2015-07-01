// ============ allows nav bar to tab to front page sections

function hideSections() {
    document.getElementById("section-2").className = "hide";
    document.getElementById("section-3").className = "hide";
    }

function showSection1()
    {
        document.getElementById("section-1").className = "show";
        document.getElementById("section-2").className = "hide";
        document.getElementById("section-3").className = "hide";
    }

function showSection2()
    {
        document.getElementById("section-2").className = "show";
        document.getElementById("section-1").className = "hide";
        document.getElementById("section-3").className = "hide";
    }


 function showSection3()
    {
        document.getElementById("section-3").className = "show";
        document.getElementById("section-1").className = "hide";
        document.getElementById("section-2").className = "hide";
    }





// ============ allows nav bar to tab to shift size and color to indicate active section


function tabSize () {
  if (window.location.href === "http://localhost/thundernixon2015wp/" || window.location.href === "http://localhost/thundernixon2015wp/#section-1"){
		document.getElementById("tab-1").className = "active-tab";
		document.getElementById("tab-2").className = "inactive-tab";
		document.getElementById("tab-3").className = "inactive-tab";
  }
}

function growTab1 () {
		document.getElementById("tab-1").className = "active-tab";
		document.getElementById("tab-2").className = "inactive-tab";
		document.getElementById("tab-3").className = "inactive-tab";
}

function growTab2 () {
		document.getElementById("tab-2").className = "active-tab";
		document.getElementById("tab-1").className = "inactive-tab";
		document.getElementById("tab-3").className = "inactive-tab";
}

function growTab3 () {
		document.getElementById("tab-3").className = "active-tab";
		document.getElementById("tab-1").className = "inactive-tab";
		document.getElementById("tab-2").className = "inactive-tab";
}

function navRight() {
    if (window.location.href === "http://localhost/thundernixon2015wp/#section-2") {
      showSection2();
      growTab2();
    }
    else if (window.location.href === "http://localhost/thundernixon2015wp/#section-3") {
      showSection3();
      growTab3();
    } else {
      return;
    }
  }


// =========== Instafeed Load More Button =============

var loadButton = document.getElementById('load-more');
var feed = new Instafeed({
  // every time we load more, run this function
  after: function() {
    // disable button if no more results to load
    if (!this.hasNext()) {
      loadButton.setAttribute('disabled', 'disabled');
    }
  },
});

// bind the load more button
loadButton.addEventListener('click', function() {
  feed.next();
});

// run our feed!
feed.run();