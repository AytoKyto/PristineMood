
let other = document.querySelector('.wpcf7-form-control-wrap.other');

document.getElementById('compagny-type').addEventListener('change', function () {
    if (this.value == 'Other'){
        other.style.display = 'block';
    }else{
        other.style.display = 'none';
    }
});

jQuery(document).ready(function ($) {
    function getAnchor() {
        return (document.URL.split('#').length > 1) ? document.URL.split('#')[1] : null;
    }

    $('a.anchor').on('click', function (e) {
        e.preventDefault();
        const value = this.getAttribute('href');
        last = value.substring(value.lastIndexOf("/") + 1, value.length);
        $('html, body').animate({
            scrollTop: $(last).offset().top
        }, 800);
    });
    if (window.location.hash) {
       let value = getAnchor();
       console.log(value);
       $('html, body').delay(1000).animate({
           scrollTop: $('#'+value).offset().top-100
       }, 800);
    }
});
