import './bootstrap';

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '64c73ce8d1e521af7511',
    cluster: 'ap1',
    forceTLS: true
});

var channel = Echo.channel('my-channel');
channel.listen('.my-event', function (data) {
    alert(JSON.stringify(data));
});