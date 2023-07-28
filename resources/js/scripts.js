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
// document.addEventListener('turbolinks:before-visit', function(event) {
//     const currentURL = window.location.href;
//     const targetURL = event.data.url;
//     if (currentURL === targetURL) {
//         event.preventDefault();
//     }
// });

document.addEventListener('turbolinks:load', () => {
    Livewire.rescan();

});

// Search on navbar
let searchTimeout;

document.addEventListener('livewire:load', function() {
    document.addEventListener('turbolinks:load', () => {

        // Get the search input element by its ID
        const searchInput = document.getElementById('searchInput');

        // Add an event listener to handle input changes
        searchInput.addEventListener('input', function(event) {
            clearTimeout(searchTimeout);
            const searchValue = event.target.value;

            // Perform a Livewire action using the "search" method on the component
            searchTimeout = setTimeout(function() {
                // console.log('check: ' + Date.now());
                Livewire.emit('search', searchValue);
            }, 500);
        });
    });
});


document.addEventListener('turbolinks:load', function() {
    const dropdownItems = document.querySelectorAll('.dropdown-item');

    // Lặp qua từng mục và thêm sự kiện lắng nghe khi người dùng click vào một mục
    dropdownItems.forEach(item => {
        item.addEventListener('click', function(event) {
            // Ngăn chặn hành vi mặc định của thẻ <a> để tránh chuyển hướng trang
            event.preventDefault();

            // Lấy giá trị data-locale từ thuộc tính data của mục đã chọn
            const selectedLocale = this.getAttribute('data-locale');

            // Gọi hàm xử lý ngôn ngữ với giá trị đã chọn
            handleLanguageChange(selectedLocale);
        });
    });

    // Hàm xử lý khi người dùng thay đổi ngôn ngữ
    function handleLanguageChange(locale) {
        // Thực hiện các thao tác liên quan đến việc thay đổi ngôn ngữ
        // Ví dụ: gửi yêu cầu đổi ngôn ngữ đến server, lưu trạng thái ngôn ngữ vào cookie, v.v.
        const currentURL = route().current();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const url = route('change.language', [
            locale
        ]);
        $.ajax({
            url: url,
            method: 'POST',
            success: function(response) {
                location.reload();

                // Turbolinks.visit(window.location.href);
                // console.log(response.route_name)
                // Turbolinks.visit(route('home'));
            },
            error: function() {
                // Handle error, language not changed
            }
        });
        // Ví dụ, bạn có thể thực hiện một hành động khác ở đây
    }
});

// document.addEventListener('turbolinks:load', function() {
//     const languageDropdown = document.getElementById('languageDropdown');

//     if (languageDropdown) {
//         const dropdownItems = languageDropdown.querySelectorAll('.dropdown-item');
//         dropdownItems.forEach(item => {
//             item.addEventListener('click', function(event) {

//                 event.preventDefault();
//                 const locale = this.getAttribute('data-locale');
//                 $.ajaxSetup({
//                     headers: {
//                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                     }
//                 });
//                 $.ajax({
//                     url: route('change.language', locale),
//                     method: 'POST',

//                     success: function(response) {
//                         Turbolinks.visit(response.route_name);
//                     },
//                     error: function() {
//                         // Handle error, language not changed
//                     }
//                 });
//             });
//         });

//     }
// });