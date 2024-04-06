function addHoverStyle(element) {
    element.classList.toggle('hovered');
}

document.getElementById("AllDis").addEventListener("click", ()=> {
    let elements2 = document.getElementsByClassName("kakus");
    Array.prototype.forEach.call(elements2, function (elements2) {
        elements2.classList.add("hovered");
    });
});
document.getElementById("AllUnDis").addEventListener("click", ()=> {
    let elements3 = document.getElementsByClassName("kakus");
    Array.prototype.forEach.call(elements3, function (elements3) {
        elements3.classList.remove("hovered");
    });
});