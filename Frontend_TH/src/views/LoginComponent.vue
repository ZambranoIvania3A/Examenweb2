<template>
  <div class="auth-container">
    <h2>Iniciar Sesión</h2>
    <form @submit.prevent="login">
      <div class="form-group">
        <label for="email">Correo Electrónico</label>
        <input type="email" v-model="email" required placeholder="Ingresa tu correo" />
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" v-model="password" required placeholder="Ingresa tu contraseña" />
      </div>
      <button type="submit">Iniciar Sesión</button>
      <p>No tienes una cuenta? <router-link to="/register">Regístrate</router-link></p>
    </form>
  </div>
</template>
 

- En el script, importamos axios y lo utilizamos para enviar una solicitud POST a la ruta /login con los datos del usuario.
<script>
import axios from '../axios';

export default {
  methods: {
    async login() {
      try {
        const response = await axios.post('/login', {
          email: this.email,
          password: this.password,
        });
        console.log(response.data);
      } catch (error) {
        console.error(error);
      }
    },
  },
};
</script>

<style scoped>
.auth-container {
  background-color: #ffffff79;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  width: 350px;
  text-align: center;
  position: absolute;
  left: 50px; /* Ajusta según sea necesario */
  top: 150px; /* Ajusta este valor para bajar el cuadro */
}

.auth-container h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #000000;
  font-family: 'Arial', sans-serif;
  font-weight: bold;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input {
  width: 90%;
  padding: 12px;
  border: 2px solid #727272;
  border-radius: 5px;
  outline: none;
  transition: border-color 0.3s;
}

input:focus {
  border-color: #000000;
}

button {
  width: 100%;
  padding: 12px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #0056b3;
}

p {
  text-align: center;
  margin-top: 10px;
}

p a {
  color: #007bff;
  text-decoration: none;
}

p a:hover {
  text-decoration: underline;
}
</style>
