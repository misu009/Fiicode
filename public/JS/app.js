var loadFile = function (event) {
    var image = document.getElementById("output");
    var input = document.getElementById("file");
    console.log(input.value);
    image.src = URL.createObjectURL(event.target.files[0]);
};

