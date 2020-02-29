/* Put all your scripts here. This file with load in footer */


/* Detect Scrollbar and fix 100vw CSS scrollbar bug */
function mate_detect_scrollbar() {
    let scrollbarWidth = (window.innerWidth - document.body.clientWidth) + 'px';
    let root = document.documentElement;
    root.style.setProperty('--scroll-width', scrollbarWidth);
    //console.warn(scrollbarWidth);
}
window.onload = mate_detect_scrollbar;


