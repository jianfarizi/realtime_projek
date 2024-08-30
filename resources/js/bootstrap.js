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
