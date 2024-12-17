import axios from 'axios';

axios.defaults.baseURL = 'http://localhost:8000/api'; // Cambia el puerto según tu configuración
axios.defaults.headers.common['Content-Type'] = 'application/json';

export default axios;