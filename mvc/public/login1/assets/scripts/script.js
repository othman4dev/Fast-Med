function toggleForm(i){
    const form = document.querySelectorAll('form');
    form.forEach(element => {
        element.style.display = 'none';
    });
    form[i].style.display = 'flex';
    if (i == 0) {
        document.getElementById('login').style.animationName = 'none';
        document.getElementById('right').style.animationName = 'none';
        document.getElementById('register').style.animationName = 'none';
        document.getElementById('register').style.animationDirection = 'normal';
        document.getElementById('login').style.animationName = 'twitch-one';
        document.getElementById('right').style.animationDirection = 'normal';
        document.getElementById('right').style.animationName = 'twitch-two';
    } else {
        document.getElementById('register').style.animationName = 'none';
        document.getElementById('right').style.animationName = 'none';
        document.getElementById('login').style.animationName = 'none';
        document.getElementById('register').style.animationDirection = 'reverse';
        document.getElementById('register').style.animationName = 'twitch-one';
        document.getElementById('right').style.animationName = 'twitch-three';
    }
}
toggleForm(0);
function confirmPass() {
    let pass1 = document.getElementById('pass1').value;
    let pass2 = document.getElementById('pass2').value;
    if (pass1 != pass2) {
        let msg = document.getElementById('msg');
        msg.innerText = 'Password does not match';
    }
}