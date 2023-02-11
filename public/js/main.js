const show = document.querySelector('#show');
const pass = document.querySelector('#password');
show.onclick = () => {
    const type = pass.getAttribute('type');
    if (type == 'text') {
        show.classList.remove('text-primary');
        return pass.setAttribute('type', 'password');
    }
    show.classList.add('text-primary');
    pass.setAttribute('type', 'text');
}
