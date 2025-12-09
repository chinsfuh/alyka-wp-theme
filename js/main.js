/* Simple menu toggle for mobile */
(function(){
    var btn = document.querySelector('.menu-toggle');
    var nav = document.querySelector('.primary-navigation .menu');
    if (!btn) return;
    btn.addEventListener('click', function(){
        var expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !expanded);
        if (nav) nav.classList.toggle('open');
        document.body.classList.toggle('menu-open');
    });
})();
