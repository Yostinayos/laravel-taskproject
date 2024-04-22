// darkmode
document.addEventListener('DOMContentLoaded', function() {
    function toggleDarkMode() {
        const isDarkMode = localStorage.getItem('darkMode') === 'true';
        localStorage.setItem('darkMode', !isDarkMode);
        document.documentElement.classList.toggle('dark');
        if (!isDarkMode) {
            darkModeToggle.innerText = 'Light Mode';
        } else {
            darkModeToggle.innerText = 'Dark Mode';
        }
    }

    const darkModeToggle = document.getElementById('dark-mode-toggle');
    darkModeToggle.addEventListener('click', toggleDarkMode);

    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    if (isDarkMode) {
        document.documentElement.classList.add('dark');
        darkModeToggle.innerText = 'Light Mode';
    } else {
        darkModeToggle.innerText = 'Dark Mode';
    }
});
