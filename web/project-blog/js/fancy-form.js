function intializeFancyForm() {
    let inputs = Array.from(document.querySelectorAll('.fancy-input'));
    inputs.forEach((input) => {
        if (input.children[0].value != '') {
            input.children[1].classList.add('persist-focus');
        } else {
            input.children[1].classList.remove('persist-focus');
        }
        input.children[0].onblur = (e) => {
            if (e.currentTarget.value != '') {
                input.children[1].classList.add('persist-focus');
            } else {
                input.children[1].classList.remove('persist-focus');
            }
        }
    });
}

intializeFancyForm();