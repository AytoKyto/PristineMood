
let other = document.querySelector('.wpcf7-form-control-wrap.other');

document.getElementById('compagny-type').addEventListener('change', function () {
    if (this.value == 'Other'){
        other.style.display = 'block';
    }else{
        other.style.display = 'none';
    }
});

jQuery(document).ready(function ($) {
    $('a.anchor').on('click', function (e) {
        e.preventDefault();
        const value = this.getAttribute('href');
        last = value.substring(value.lastIndexOf("/") + 1, value.length);
        $('html, body').animate({
            scrollTop: $('#' + last).offset().top
        }, 800);
    });
});
