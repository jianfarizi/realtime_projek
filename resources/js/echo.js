import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
<<<<<<< HEAD
    key: import.meta.env.PUSHER_APP_KEY,
    wsHost: import.meta.env.PUSHER__HOST,
    wsPort: import.meta.env.PUSHER__PORT ?? 80,
    wssPort: import.meta.env.PUSHER__PORT ?? 443,
    forceTLS: (import.meta.env.PUSHER__SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});
=======
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true
});
>>>>>>> 88d42888895142d044f3e5c3d699318870fdf934
