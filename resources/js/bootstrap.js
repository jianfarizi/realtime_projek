import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

const options = {
    broadcaster: 'pusher',
    key: '64c73ce8d1e521af7511'
}

<<<<<<< HEAD


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
=======
window.Echo = new Echo({
    ...options,
    client: new Pusher(options.key, options)
});
>>>>>>> 88d42888895142d044f3e5c3d699318870fdf934
