const themeStorage = localStorage.getItem('themeStorage');
const lightModeToggle = document.querySelector('#lightModeSwitch');

if (themeStorage) {
    document.documentElement.setAttribute('data-theme', themeStorage);
}

//on button click, give the button an event listener 
lightModeToggle.addEventListener('click', () => {
    const theme = document.documentElement.getAttribute('data-theme');

    // check if the theme is dark or light and then change the data-theme
    const newTheme = theme === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', newTheme);

    // save theme to localStorage
    localStorage.setItem('themeStorage', newTheme);
});