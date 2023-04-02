var header = document.getElementById('header')
var navigationBar = document.getElementById('navigation-bar');
var content = document.getElementById('content')
var showSidebar = false;

function toggleSidebar() {
    showSidebar = !showSidebar
    console.log(showSidebar);
    if(showSidebar) {
        navigationBar.style.marginLeft = '-10vw';
        navigationBar.style.animationName = 'showSidebar';
        content.style.filter = 'blur(2px)';
    }

    else {
        navigationBar.style.marginLeft = '-100vw';
        navigationBar.style.animationName = '';
        content.style.filter = '';
    }
}

function closeSidebar() {
    if (showSidebar) {
        toggleSidebar();
    }
}

window.addEventListener('resize', function(event){
    if(window.innerWidth > 768 && showSidebar) {
        toggleSidebar
    }
})
