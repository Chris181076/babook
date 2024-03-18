document.addEventListener("DOMContentLoaded", function() {
    const openPopupButton = document.getElementById("openPopupButton");
    const closePopupButton = document.getElementById("closePopupButton");
    const popup = document.getElementById("popup");

    openPopupButton.addEventListener("click", function() {
      popup.style.display = "flex";
    });
  
    closePopupButton.addEventListener("click", function() {
      popup.style.display = "none";
    });
  });

  let formulaire = document.getElementById("formulaire");
  let image = document.getElementById("image");
  let croix = document.getElementById("croix");
  
  image.addEventListener("click", function() {
    formulaire.style.display = "flex";
  });
  
  croix.addEventListener("click", function() {
    formulaire.style.display = "none";
  });
  let searchResultsDiv = document.getElementById("resultats");
  function clearSearchResults() {
    searchResultsDiv.innerHTML = "";
}

function checkAndClear() {
    if (searchResultsDiv.innerHTML.trim() !== "") {
        document.getElementById("clearButton").style.display = "block";
    } else {
        document.getElementById("clearButton").style.display = "none";
    }
}



