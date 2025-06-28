import Echo from 'laravel-echo';
import { io } from 'socket.io-client';

window.Echo = new Echo({
    broadcaster: 'reverb',
    host: window.location.hostname + ':6001', // hoặc 8080 nếu bạn đổi cổng
    client: io,
});

console.log('Echo initialized with:', {
    broadcaster: 'reverb',
    host: window.location.hostname + ':6001',
});
