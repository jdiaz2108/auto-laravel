<template>
  <div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
              <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab"
                  aria-controls="flight" aria-selected="true">REGISTRO</a>
          </li>
      </ul>
      <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
              <template v-if="registred">
                  <div class="card">
                      <img class="card-img-top img-fluid m-5" src="/img/check.png" alt="Card image cap"
                          style="width: calc(100% - 6rem);">
                      <div class="card-body">
                          <h4 class="card-title">Te has registrado correctamente.</h4>
                          <p class="card-text">Gracias por participar, dentro de poco se daran los resultados de los
                              ganadores.</p>
                              <a href="/ganador" class="primary-btn text-uppercase">Ver Ganadores</a>
                      </div>
                  </div>
              </template>
              <template v-else>
                  <form class="form-wrap" @submit.prevent="register">
                      <input type="text" class="form-control" v-model="registerForm.name" ref="name"
                          placeholder="Nombres" required autofocus>
                      <input type="text" class="form-control" v-model="registerForm.lastName" ref="lastName"
                          placeholder="Apellidos" required>
                      <input type="text" class="form-control" v-model="registerForm.document" ref="document"
                          placeholder="Cedula" required>
                      <input type="tel" class="form-control" v-model="registerForm.cellphone" ref="cellphone"
                          placeholder="Celular" required>
                      <input type="email" class="form-control" v-model="registerForm.email" ref="email"
                          placeholder="Correo Electrónico" required>
                      <input type="password" minlength="6" class="form-control" v-model="registerForm.password"
                          ref="password" placeholder="Contraseña" required>
                      <input type="password" minlength="6" class="form-control"
                          v-model="registerForm.password_confirmation" ref="password_confirmation"
                          placeholder="Confirmar Contraseña" required>
                      <select class="form-control p-0" v-model="registerForm.department" ref="department"
                          @change="getCity()" required>
                          <option value="" disabled selected>Seleccione un Departamento...</option>
                          <option class="text-capitalize" v-for="(department, index) in departments" :key="index"
                              :value="department.id">{{ department.name }}</option>
                      </select>
                      <select class="form-control p-0" v-model="registerForm.city" ref="city" required>
                          <option value="" disabled selected>Seleccione una Ciudad...</option>
                          <option class="text-capitalize" v-for="(city, index) in cities" :key="index" :value="city.id">
                              {{ city.name }}</option>
                      </select>
                      <div class="form-check mb-2 mx-2">
                          <input class="form-check-input" type="checkbox" id="abeasdata" required>
                          <label class="form-check-label text-justify" for="abeasdata">
                              Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la
                              política de
                              protección de
                              datos personales.
                          </label>
                      </div>
                      <input type="submit" class="primary-btn text-uppercase"
                          value="REGISTRARME">
                  </form>
              </template>
          </div>
      </div>
  </div>
</template>

<script>
  import Swal from "sweetalert2"
  import 'sweetalert2/dist/sweetalert2.min.css';

  export default {
      data() {
          return {
              csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              registerForm: {
                  name: '',
                  lastName: '',
                  document: '',
                  cellphone: '',
                  email: '',
                  password: '',
                  password_confirmation: '',
                  department: '',
                  city: ''
              },
              departments: [],
              cities: [],
              errors: [],
              registred: false
          }
      },
      mounted() {
          this.getDepartments();
      },
      watch: {
          'registerForm.document'() {
              this.validateNumber(this.registerForm.document, 'document')
          },
          'registerForm.cellphone'() {
              this.validateNumber(this.registerForm.cellphone, 'cellphone')
          },
      },
      methods: {
          validateNumber(param, state) {
              var number = null;
              if (param != null) {
                  param.length > 14 ? number = parseInt(param.substr(0, 14)) : number = parseInt(param);
                  isNaN(param) ? number = null : '';
              }
              if (state == 'document') {
                  this.registerForm.document = number;
              } else if (state == 'cellphone') {
                  this.registerForm.cellphone = number;
              }
          },
          getDepartments() {
              axios
                  .get('/api/getDepartments')
                  .then(response => {
                      this.departments = response.data
                  })
                  .catch(error => {
                      console.log(error)
                  })
          },
          getCity() {
              axios
                  .get('/api/getCity/' + this.registerForm.department)
                  .then(response => {
                      this.registerForm.city = '';
                      this.cities = response.data
                  })
                  .catch(error => {
                      console.log(error)
                  })
          },
          register() {
              axios
                  .post('/api/register', this.registerForm)
                  .then(response => {
                      this.registred = true;
                  })
                  .catch(error => {
                      if (error.response) {
                          this.errors = error.response.data.errors
                          for (const key in this.errors) {
                              if (this.errors.hasOwnProperty(key)) {
                                  const element = this.errors[key];
                                  console.log(element)
                                  this.sweetAlert(element[0])
                              }
                          }
                      }
                  })
          },
          sweetAlert(param) {
              Swal.fire({
                  type: 'error',
                  title: param,
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
              });
            this.errors = [];
          }
      },
  }
</script>
