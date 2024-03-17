

window.addEventListener('scroll', function() {

    const navbar = document.querySelector('.navbar');
    const showAfterScrolling = 100;
    if (window.scrollY > showAfterScrolling) {
        navbar.classList.add('show');
    } else {
        navbar.classList.remove('show');
    }
});



window.addEventListener('scroll', function() {
    
    const navbar = document.querySelector('.navbar');
    
    if (window.scrollY > 50) { 
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

function star(){
    const  container = document.getElementsByClassName("content")[0]; 
    
    if(content.style.visibility == "hidden"){
        content.style.visibility = "visible";
    }else{
        content.style.visibility = "hidden";
    }
}
document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            document.querySelector('.navbar').classList.add('scrolled');
        } else {
            document.querySelector('.navbar').classList.remove('scrolled');
        } 
    });
});

