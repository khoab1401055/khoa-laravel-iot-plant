import {
    Spinner
} from 'spin.js';



//
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#submit-ajax').submit(function(e) {
    e.preventDefault(); // Ngăn chặn form gửi theo cách thông thường

    // Kiểm tra checkbox
    var checkbox = $('#terms-conditions');
    if (checkbox.length > 0 && !checkbox.prop('checked')) {
        toastr.error('Please agree to the privacy policy and terms.');
        return false;
    }

    var form = $(this);
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
});


$('#logout').click(function(e) {
    e.preventDefault(); // Ngăn chặn hành động mặc định của phần tử (ví dụ: ngăn chặn việc submit form)
    var url = route('logout');
    var method = 'POST';
    const target = document.getElementById('loading');
    const spinner = new Spinner({
        color: '#C2E19D',
        lines: 12
    }).spin(target);
    $('body').addClass('spinner-active');
    $.ajax({
        url: url,
        method: method,
        success: function(response) {
            // window.location.href = response.route_name;
            Turbolinks.visit(response.route_name);
        },
    });

});
