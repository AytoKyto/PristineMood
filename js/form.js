
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
        //console.log(value);
        $('html, body').animate({
            scrollTop: $('#' + value).offset().top
        }, 800);
    });
});
