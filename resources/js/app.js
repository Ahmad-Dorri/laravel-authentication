import './bootstrap';
import {helloByUser, helloByAdmin} from './modules/hello.js';

window.helloByAdmin = helloByAdmin;
window.helloByUser = helloByUser;
