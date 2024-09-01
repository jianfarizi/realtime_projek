import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

const options = {
    broadcaster: 'pusher',
    key: '64c73ce8d1e521af7511'
}

window.Echo = new Echo({
    ...options,
    client: new Pusher(options.key, options)
});