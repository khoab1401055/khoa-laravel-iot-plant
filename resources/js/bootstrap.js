window._ = require('lodash');
// window.$ = require('jquery');

import Turbolinks from 'turbolinks';
import NProgress from 'nprogress';
try {
    require('bootstrap');
    NProgress.configure({ showSpinner: false });

    Turbolinks.start();
    // Turbolinks.setProgressBarDelay(200);
    document.addEventListener('turbolinks:visit', function() {
        document.querySelector('body').classList.add('disable-clicks');
        NProgress.start();
    });

    document.addEventListener('turbolinks:request-end', function() {
        document.querySelector('body').classList.remove('disable-clicks');

        NProgress.done();
    });
    document.addEventListener('livewire:load', function() {
        Livewire.hook('message.sent', function() {
            document.querySelector('body').classList.add('disable-clicks');
            NProgress.start();
        });

        Livewire.hook('message.processed', function() {
            document.querySelector('body').classList.remove('disable-clicks');

            NProgress.done();
        });
    });
} catch (e) {
    console.log(e);
}


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';