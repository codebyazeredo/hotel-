import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

import $ from 'jquery';
window.$ = window.jQuery = $;

import axios from 'axios';
window.axios = axios;
