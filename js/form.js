
let other = document.querySelector('.wpcf7-form-control-wrap.other');

document.getElementById('compagny-type').addEventListener('change', function () {
    if (this.value == 'Other'){
        other.style.display = 'block';
    }else{
        other.style.display = 'none';
    }
});


