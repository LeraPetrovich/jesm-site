document.getElementById('year').textContent = new Date().getFullYear();

(function() {
    const btn = document.querySelector('.nav-toggle');
    const nav = document.querySelector('nav');
    if (!btn || !nav) return;
    btn.addEventListener('click', () => nav.classList.toggle('open'));
})();