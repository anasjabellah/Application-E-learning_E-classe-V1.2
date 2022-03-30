
window.addEventListener('DOMContentLoaded', event => {

    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

function moddalForm(){
    document.getElementById("modelparent").style.display = "block";
    document.getElementById("modelparent").style.display = "flex";
}

function close(){
    document.getElementById("model_parent").style.display = "none"; 
}

function moddalFormCourse(){
    document.getElementById("modelparent").style.display = "block";
    document.getElementById("modelparent").style.display = "flex";
}

function closeCourse(){
    document.getElementById("model_parent").style.display = "none"; 
}
