// window.onload = () => {
//     let button1 = document.getElementById("click_button");
//     button1.onclick = () => {
//         alert("Clicked!");
//     };

//     let div1 = document.getElementById("first_div");
//     let button2 = document.getElementById("color_button");
//     button2.onclick = () => {
//         let color = document.getElementById("color_input").value;
//         div1.style.backgroundColor = color;
//     };
// };


$(document).ready(function () {
    $("#click_button").click(() => {
        alert("Clicked!");
    });

    $("#color_button").click(() => {
        $("#first_div").css({
            backgroundColor: $("#color_input").val()
        });
        $("#color_input").val("");
    });

    let $visible = true;

    $("#visibility_button").click(() => {
        $visible = !$visible;

        let $style = $visible ? "1" : "0";

        $("#third_div").css({
            opacity: $style
        });
    });
});