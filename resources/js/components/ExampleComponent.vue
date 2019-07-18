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
        {{registerForm.password_confirmation}}

                                    <input type="text" class="form-control" v-model="registerForm.name" ref="name" placeholder="Nombres" required autofocus>
                                    <input type="text" class="form-control" v-model="registerForm.lastName" ref="lastName" placeholder="Apellidos" required>
                                    <input type="tel" class="form-control" v-model="registerForm.id" ref="id" placeholder="Cedula" required>
                                    <input type="tel" class="form-control" v-model="registerForm.cellphone" ref="cellphone" placeholder="Celular" required>
                                    <input type="text" class="form-control" v-model="registerForm.mail" ref="mail" placeholder="Correo Electrónico" required>
                                    <input type="password" class="form-control" v-model="registerForm.password" ref="password" placeholder="Contraseña" required>
                                    <input type="password" class="form-control" v-model="registerForm.password_confirmation" ref="password_confirmation" placeholder="Confirmar Contraseña" required>
                                    <input type="text" class="form-control" v-model="registerForm.department" ref="department" placeholder="Departamento" required>
                                    <input type="text" class="form-control" v-model="registerForm.city" ref="city" placeholder="Ciudad" required>
                                    <input type="text" class="form-control" v-model="registerForm.name" ref="name" placeholder="From" required>
<!-- 
									<input type="text" class="form-control" name="name" placeholder="From " >									
									<input type="text" class="form-control" name="to" placeholder="To ">
									<input type="text" class="form-control date-picker" name="start" placeholder="Start ">
									<input type="text" class="form-control date-picker" name="return" placeholder="Return ">
									<input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults ">
									<input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child ">							 -->
									<a href="#" class="primary-btn text-uppercase">REGISTRARME</a>									
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
                    id: '',
                    cellphone: '',
                    mail: '', 
                    password: '',
                    password_confirmation: '', 
                    department: '',
                    city: ''
                }
            }
        },
        mounted() {
            //
        },
        methods: {
            setFocus: function()
            {
              //
            },
        },
    }
</script>
