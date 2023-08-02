document.addEventListener('turbolinks:load', () => {
    Livewire.rescan();

});

// Search on navbar
let searchTimeout;

document.addEventListener('livewire:load', function() {
    document.addEventListener('turbolinks:load', () => {

        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
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
        }

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

// Edit table
document.addEventListener('livewire:load', function() {

    document.addEventListener('turbolinks:load', function() {

        window.handleMenuItemClick = function(action, dataId) {
            if (action === 'edit') {
                // Gọi phương thức edit trong component Livewire
                Livewire.emit('showEditModal', dataId);

                $('#' + action + '_modal').modal({
                    backdrop: 'static',
                    keyboard: false
                }).modal('show');
            }
            hideContextMenu();
        };
        // Function to show the context menu when right-clicking on a table row
        function showContextMenu(event) {
            event.preventDefault();
            hideContextMenu(); // Hide any existing context menu first

            const contextMenu = $('#contextMenu');
            contextMenu.css({
                left: event.pageX + 'px',
                top: event.pageY + 'px',
            });
            contextMenu.show();

            // Get the data-id attribute from the clicked TD element and set it as the data-id for the contextMenu
            const dataId = $(event.target).closest('td').data('id');
            contextMenu.attr('data-id', dataId);
        }

        function hideContextMenu() {
            const contextMenu = $('#contextMenu');
            contextMenu.hide();
            $('.table-row-clicked').removeClass('table-row-clicked'); // Remove the row highlight class
        }

        $(document).on('contextmenu', 'td', function(event) {
            event.preventDefault();
            showContextMenu(event);
            $(this).closest('tr').addClass('table-row-clicked');
        });

        $(document).on('click', '#contextMenu a', function(event) {
            event.preventDefault();
            const action = this.id;
            const dataId = $('#contextMenu').attr('data-id');
            console.log(dataId);
            handleMenuItemClick(action, dataId);
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('#contextMenu').length) {
                hideContextMenu();
            }
        })
    })

});

window.addEventListener('modalClosed', event => {

    var modal = $('.modal:visible');
    // Ẩn modal đang hiển thị
    modal.modal({
        backdrop: 'static',
        keyboard: false
    }).modal('hide');

})