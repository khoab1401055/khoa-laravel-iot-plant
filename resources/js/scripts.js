import {
    Spinner
} from 'spin.js';
const toggler = document.querySelectorAll('.form-password-toggle i')
if (typeof toggler !== 'undefined' && toggler !== null) {

    toggler.forEach(el => {
        el.addEventListener('click', e => {
            e.preventDefault()
            const formPasswordToggle = el.closest('.form-password-toggle')
            const formPasswordToggleIcon = formPasswordToggle.querySelector('i')
            const formPasswordToggleInput = formPasswordToggle.querySelector('input')

            if (formPasswordToggleInput.getAttribute('type') === 'text') {
                formPasswordToggleInput.setAttribute('type', 'password')
                formPasswordToggleIcon.classList.replace('bx-show', 'bx-hide')
            } else if (formPasswordToggleInput.getAttribute('type') === 'password') {
                formPasswordToggleInput.setAttribute('type', 'text')
                formPasswordToggleIcon.classList.replace('bx-hide', 'bx-show')
            }
        })
    })
}

//
$('#submit-ajax').submit(function(e) {
    e.preventDefault(); // Ngăn chặn form gửi theo cách thông thường

    var form = $(this);
    var url = form.attr('action');
    var method = form.attr('method');
    var data = form.serialize();
    const target = document.getElementById('loading');
    const spinner = new Spinner({
        color: '#C2E19D',
        lines: 12
    }).spin(target);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url,
        method: method,
        data: data,
        success: function(response) {
            spinner.stop();
            toastr.clear();
            if (response.success) {
                toastr.success(response.success);
                // Redirect or perform necessary actions
                window.location.href = response.route_name;
            } else {
                toastr.error(response.errors);
            }

        }
    })



});
