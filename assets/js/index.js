window.addEventListener('load', () => {
    const houses = document.querySelectorAll('.house');
    const redButton = document.getElementById('redButton');

    redButton.addEventListener('click', () => {

        houses.forEach(element => {
            element.classList.add('red');
            element.classList.remove('green');
            element.classList.remove('blue');         
        });
    });
});