<template>
<div>
<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">REGISTRO</a>
							  </li>
							</ul>
							<div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                   <form class="form-wrap" action="">

                                    <input type="text" class="form-control" v-model="registerForm.name" ref="name" placeholder="Nombres" required autofocus>
                                    <input type="text" class="form-control" v-model="registerForm.lastName" ref="lastName" placeholder="Apellidos" required>
                                    <input type="telphone" class="form-control" v-model="registerForm.document" ref="document" placeholder="Cedula" required>
                                    <input type="telphone" class="form-control" v-model="registerForm.cellphone" ref="cellphone" placeholder="Celular" required>
                                    <input type="email" class="form-control" v-model="registerForm.mail" ref="mail" placeholder="Correo Electrónico" required>
                                    <input type="password" class="form-control" v-model="registerForm.password" ref="password" placeholder="Contraseña" required>
                                    <input type="password" class="form-control" v-model="registerForm.password_confirmation" ref="password_confirmation" placeholder="Confirmar Contraseña" required>
                                    <select class="form-control" v-model="registerForm.department" ref="department" @change="getCity()" required>
                                        <option value="" disabled selected>Seleccione un Departamento...</option>
                                        <option class="text-capitalize" v-for="(department, index) in departments" :key="index" :value="department.id">{{ department.name }}</option>
                                    </select>
                                    <select class="form-control" v-model="registerForm.city" ref="city" required>
                                        <option value="" disabled selected>Seleccione una Ciudad...</option>
                                        <option class="text-capitalize" v-for="(city, index) in cities" :key="index" :value="city.id">{{ city.name }}</option>
                                    </select>
                                    <div class="form-check mb-2 mx-2">
                                        <input class="form-check-input" type="checkbox" id="abeasdata" required>
                                        <label class="form-check-label text-justify" for="abeasdata">
                                            Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de
                                            datos personales.
                                        </label>
                                    </div>
									<button href="#" @click="setFocus" class="primary-btn text-uppercase">REGISTRARME</button>
								</form>
							  </div>
							</div>
                            </div>
</template>

<script>
    export default {
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                registerForm: {
                    name: '',
                    lastName: '',
                    document: '',
                    cellphone: '',
                    mail: '',
                    password: '',
                    password_confirmation: '',
                    department: '',
                    city: ''
                },
                departments: [],
                cities: []
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
                  .get('/api/getCity/'+this.registerForm.department)
                  .then(response => {
                    this.registerForm.city = '';
                    this.cities = response.data
                    console.log(response)
                  })
                  .catch(error => {
                    console.log(error)
                  })
            },
            setFocus() {
               axios
                  .get('/api/getDepartments')
                  .then(response => {
                    this.departments = response.data
                  })
                  .catch(error => {
                    console.log(error)
                  })
            },
        },
    }
</script>
