import {
    Spinner
} from 'spin.js';
//

window.submitForm = function(formID) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // Kiểm tra checkbox
    var checkbox = $('#terms-conditions');
    if (checkbox.length > 0 && !checkbox.prop('checked')) {
        toastr.error('Please agree to the privacy policy and terms.');
        return false;
    }
    var form = $('#' + formID);
    var url = form.attr('action');
    var method = form.attr('method');

    var data = form.serialize();
    const target = document.getElementById('loading');
    const spinner = new Spinner({
        color: '#C2E19D',
        lines: 12
    }).spin(target);
    $('body').addClass('spinner-active');

    $.ajax({
        url: url,
        method: method,
        data: data,
        success: function(response) {
            spinner.stop();
            toastr.clear();
            $('body').removeClass('spinner-active');
            if (response.success) {
                toastr.success(response.success);
                Turbolinks.visit(response.route_name);
            } else {
                toastr.error(response.errors);
            }
        }
    })

    return false;
}


$('#logout').click(function(e) {
    e.preventDefault();
    var url = route('logout');
    var method = 'POST';
    const target = document.getElementById('loading');
    const spinner = new Spinner({
        color: '#C2E19D',
        lines: 12
    }).spin(target);
    $('body').addClass('spinner-active');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: url,
        method: method,
        success: function(response) {
            Turbolinks.visit(response.route_name);
        },
    });

});
document.addEventListener('turbolinks:before-visit', function(event) {
    const currentURL = window.location.href;
    const targetURL = event.data.url;
    if (currentURL === targetURL) {
        event.preventDefault();
    }
});