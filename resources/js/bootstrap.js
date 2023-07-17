window._ = require('lodash');
import Turbolinks from 'turbolinks';
try {
    require('bootstrap');

    Turbolinks.start();
} catch (e) {
    console.log(e);
}


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
