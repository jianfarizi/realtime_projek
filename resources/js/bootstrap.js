import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '64c73ce8d1e521af7511',
    cluster: 'ap1',
    forceTLS: true
});




window.Echo.channel('my-channel')
    listen('my-event', (e) => {
        console.log(e)
    });

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allow your team to quickly build robust real-time web applications.
 */

import './echo';
