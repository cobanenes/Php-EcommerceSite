const themePreference = () => {
  const hasLocalStorage = localStorage.getItem('theme');
  
  let supports = false;
  let theme = undefined;
  
  if (hasLocalStorage === 'light') { theme = 'light'; }
  if (hasLocalStorage === 'dark') { theme = 'dark'; }

  if (window.matchMedia(`(prefers-color-scheme: dark)`).matches) {
    theme = hasLocalStorage ? hasLocalStorage : 'dark';
    supports = true;
  };
  if (window.matchMedia(`(prefers-color-scheme: light)`).matches) {
    theme = hasLocalStorage ? hasLocalStorage : 'light';
    supports = true;
  };
  if (window.matchMedia(`(prefers-color-scheme: no-preference)`).matches) {
    theme = hasLocalStorage ? hasLocalStorage : 'none';
    supports = true;
  };
  
  return {supports, theme};
}

addFooter = () => {
  const parent = document.querySelector('.card');
  const footer = document.createElement('footer');

  const html = `
    <p class="footer__p"><span aria-label="checkmark:">✔</span> Your system supports the CSS 5 Media Query <code>prefers-color-scheme</code>.</p>
  `;
  
  footer.classList.add('card__footer', 'footer');
  footer.innerHTML = html;
  
  parent.appendChild(footer);
}

document.addEventListener('DOMContentLoaded', e => {
  console.clear();
  
  const userThemePreference = themePreference();
  const toggle = document.querySelector('[js-toggle]');
  const clearStorage = document.querySelector('[js-clearStorage]');
  const html = document.documentElement;
    
  const setTheme = () => {
    switch(userThemePreference.theme) {
      case 'dark':
        toggle.checked = true;
        html.classList.add('dark');
        html.classList.remove('light');
        break;
      case 'light':
        toggle.checked = false;
        html.classList.remove('dark');
        html.classList.add('light');
        break;
    }
  }
  
    
  setTheme();
  
  if (userThemePreference.supports) {
    addFooter();
  }
    
  clearStorage.addEventListener('click', e => {
    localStorage.removeItem('theme');
    console.info('local storage cleared');
  }, false);
  
  toggle.addEventListener('click', e => {
    if (toggle.checked) {
      html.classList.add('dark');
      html.classList.remove('light');
      localStorage.setItem('theme', 'dark');
    } else {
      html.classList.remove('dark');
      html.classList.add('light');
      localStorage.setItem('theme', 'light');
    }
  }, false);
}, false);