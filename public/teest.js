
function test() {
    setInterval(myFunction, 2500);
}

function myFunction() {
    document.getElementById("popup").style.display = "none";
}

test();