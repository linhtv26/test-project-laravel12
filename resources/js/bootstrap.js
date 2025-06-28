import axios from 'axios';
import Echo from 'laravel-echo';
import io from 'socket.io-client';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.io = io;

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001',
    withCredentials: false,
    transports: ['websocket'], // thêm dòng này để chắc chắn dùng WebSocket
});
