import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true
});




    window.Echo.channel('laporan-updates')
    .listen('LaporanUpdated', (e) => {
        Livewire.emit('laporanUpdated');
    });
