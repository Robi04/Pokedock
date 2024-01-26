document.getElementById("burger").addEventListener("click", function () {
    var headerCol = document.getElementById("header-col");
    if (headerCol.style.display === "block") {
        headerCol.style.display = "none";
        document.getElementById("lil-flex")
    } else {
        headerCol.style.display = "block";
    }
});


