require('./bootstrap');

// DARK MODE
if (localStorage.theme === 'dark') {
    document.querySelector('html').classList.add('dark')
} else {
    document.querySelector('html').classList.remove('dark')
}
