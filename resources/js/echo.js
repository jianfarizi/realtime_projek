import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.PUSHER_APP_KEY,
    wsHost: import.meta.env.PUSHER__HOST,
    wsPort: import.meta.env.PUSHER__PORT ?? 80,
    wssPort: import.meta.env.PUSHER__PORT ?? 443,
    forceTLS: (import.meta.env.PUSHER__SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});
