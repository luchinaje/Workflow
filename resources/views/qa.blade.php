
<x-app-layout>

    <head>

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <style>
            /* Tab content - closed */
            .tab-content {
                max-height: 0;
                -webkit-transition: max-height .35s;
                -o-transition: max-height .35s;
                transition: max-height .35s;
            }

            /* :checked - resize to full height */
            .tab input:checked~.tab-content {
                max-height: 100vh;
            }

            /* Label formatting when open */
            .tab input:checked+label {
                /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
                font-size: 1.25rem;
                /*.text-xl*/
                padding: 1.25rem;
                /*.p-5*/
                border-left-width: 2px;
                /*.border-l-2*/
                border-color: #6574cd;
                /*.border-indigo*/

                /*.bg-gray-100 */
                /*.text-indigo*/
            }

            /* Icon */
            .tab label::after {
                float: right;
                right: 0;
                top: 0;
                display: block;
                width: 1.5em;
                height: 1.5em;
                line-height: 1.5;
                font-size: 1.25rem;
                text-align: center;
                -webkit-transition: all .35s;
                -o-transition: all .35s;
                transition: all .35s;
            }

            /* Icon formatting - closed */
            .tab input[type=checkbox]+label::after {
                content: "+";
                font-weight: bold;
                /*.font-bold*/
                border-width: 1px;
                /*.border*/
                border-radius: 9999px;
                /*.rounded-full */
                border-color: #b8c2cc;
                /*.border-grey*/
            }

            .tab input[type=radio]+label::after {
                content: "\25BE";
                font-weight: bold;
                /*.font-bold*/
                border-width: 1px;
                /*.border*/
                border-radius: 9999px;
                /*.rounded-full */
                border-color: #b8c2cc;
                /*.border-grey*/
            }

            /* Icon formatting - open */
            .tab input[type=checkbox]:checked+label::after {
                transform: rotate(315deg);
                background-color: #6574cd;
                /*.bg-indigo*/
                color: #f8fafc;
                /*.text-grey-lightest*/
            }

            .tab input[type=radio]:checked+label::after {
                transform: rotateX(180deg);
                background-color: #6574cd;
                /*.bg-indigo*/
                color: #f8fafc;
                /*.text-grey-lightest*/
            }

        </style>
    </head>
    {{-- MIGAS DE PAN --}}
    <nav>
        <ol class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">
        <li class="px-2"><a href="{{route('home')}}" class="no-underline text-indigo">Inicio</a></li>
        <li>/</li>

        <li class="px-2 text-gray-500">Preguntas Frecuentes</li>
        </ol>
    </nav>
    {{-- FIN MIGAS DE PAN --}}

    <div class="w-full md:w-3/5 mx-auto p-8">
        <p class="bg-gray-100 text-2xl fx-2 fy-2">General</p>
        <br>
        <div class="shadow-md">

            <div class="shadow-md">

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-one">¿Quienes pueden asistir al curso?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">Podran asistir personas <b>mayores de 18 años</b> que tengan vigente la Licencia Nacional de Conducir. <br>
                        No es necesario tener conocimientos previos propios del curso, puesto que todos los contenidos son abarcados el dia de la capacitacion.
                    </p>

                    </div>
                </div>


                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-two" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-two">¿Obtendre algun certificado?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">En caso de aprobar se le otorgara en el plazo de 7 dias el <b>carnet de manejo defensivo</b> avalado por la NSF (National Safety Council). <br>
                        De lo contrario podra inscribirse a otra instancia de un curso.
                        </p>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-three" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-three">¿Cual es el cupo maximo de participantes?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">Como maximo por cada curso habran 35 participantes.</p>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-four" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-four">¿Hay modalidad online?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">
                            No, el curso en su totalidad es presencial. Podra asistir al mismo en cualquiera de las localidades que se dictan.
                        </p>

                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-five" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-five">¿Si no asisto al curso me devuelven el dinero?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">
                            Eso esta especificado en nuestros <a class="text-black font-bold" href="{{route('terms.show')}}">terminos del servicio</a>.


                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-six" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-six">¿Puedo asistir al curso sin Licencia de Conducir?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">
                            Lamentablemente no!, deberas tener vigente la Licencia Nacional de Conducir.</p>

                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-seven" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-seven">¿Puede inscribir a otra persona?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <p class="p-5">
                            Lamentablemente no!, la inscripcion es personal.</p>

                    </div>
                </div>


            </div>

        </div>
    </div>

    {{-- *************************************SEPARADOR****************************************************** --}}

    <div class="w-full md:w-3/5 mx-auto p-8">
        <p class="bg-gray-100 text-2xl fx-2 fy-2">Inscripciones</p>
        <br>
        <div class="shadow-md">

            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0 " id="tab-multi-one" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-one">¿Como me inscribo?</label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">

                        <p class="p-5">Deberas tener una cuenta en nuestro sitio web. Luego seguir con los siguientes pasos</p>
                            <ul class="px-6" >
                                <li class="px-3">- Deberas Iniciar Sesion con tu email y contraseña.</li>
                                <li class="px-3">- Seleccionar el curso de interes</li>
                                <li class="px-3">- Elegir una fecha</li>
                                <li class="px-3">- Realizar el pago</li>
                            </ul>
                            <p><br>
                </div>
            </div>

            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0" id="tab-multi-two" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-two">¿Como crear una cuenta?</label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                    <p class="p-5">Deberas seguir los siguientes pasos:</p>
                        <ul class="px-6">
                            <li class="px-2">- Dirigirte a la parte superior derecha y hacer ckick en <b>"Registrarse".</b> </li>
                            <li class="px-2">- Deberas tener tu Licencia Nacional de Conducir a mano.</li>

                            <li class="px-2">- Completar el formulario con los datos y en el formato solicitado.</li>
                            <li class="px-2">- Una vez registrado podras iniciar sesion con tu email y contraseña.</li>
                        </ul><br>
                </div>
            </div>

            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0" id="tab-multi-three" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-three">¿Medios de Pago Disponibles?
                </label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                    <p class="p-5">Hay 3 alternativas para poder realizar el pago</p>
                        <ul class="px-6">
                            <li class="px-2">- Tarjeta de Credito / Debito</li>
                            <li class="px-2">- Mercado Pago</li>
                            <li class="px-2">- Efectivo</li>
                        </ul><br>
                </div>
            </div>

            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0" id="tab-multi-four" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-four">¿Puedo descargar el comprobante de mi inscripcion?</label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                    <p class="p-5">Una vez logueado en el sitio, deberas dirigirte a tu perfil en la parte superior derecha y acceder al enlace <b>"Mis Inscripciones".</b> Alli podras visualizar tus inscripciones y descargar un comprobante.</p>

                </div>
            </div>

            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0" id="tab-multi-fivesix" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-fivesix">¿Puedo realizar el pago el dia del curso?</label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                    <p class="p-5">
                        No, de acuerdo a nuestros <a class="text-black font-bold" href="{{route('terms.show')}}">terminos del servicio</a>. <br>
                    </p>
                </div>
            </div>

            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0" id="tab-multi-six" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-six">¿Puedo cancelar mi inscripción?
                </label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                    <p class="p-5">Si, para ello deberas comunicarte con nosotros
                     mediante nuestro formulario de contacto o telefonicamente. De acuerdo a nuestros <a class="text-black font-bold" href="{{route('terms.show')}}">terminos del servicio</a>. <br>
                        </p>

                </div>
            </div>

            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0" id="tab-multi-seven" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-seven">¿Que puedo hacer si olvide mi contraseña?
                </label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                    <p class="p-5">Para ello deberas hacer click en olvide la contraseña e ingresar tu email. Luego tendras que abrir tu correo electronico y hacer click en resetear contraseña, ahi te redireccionara a un formulario para establecer una nueva contraseña.

                    </p>

                </div>
            </div>



        </div>
    </div>


    <script>
        /* Optional Javascript to close the radio button version by clicking it again */
        var myRadios = document.getElementsByName('tabs2');
        var setCheck;
        var x = 0;
        for (x = 0; x < myRadios.length; x++) {
            myRadios[x].onclick = function() {
                if (setCheck != this) {
                    setCheck = this;
                } else {
                    this.checked = false;
                    setCheck = null;
                }
            };
        }

    </script>


</x-app-layout>
