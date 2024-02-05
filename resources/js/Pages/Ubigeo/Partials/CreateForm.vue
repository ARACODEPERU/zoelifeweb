<script setup>
    import { useForm, router, Link } from '@inertiajs/vue3';
    import FormSection from '@/Components/FormSection.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';
    import { ref } from "vue";
    import swal from 'sweetalert';
    import Keypad from '@/Components/Keypad.vue';
    import { Dropdown } from 'flowbite-vue'
    import ModalSmall from '@/Components/ModalSmall.vue';

    const props = defineProps({
        country_id: {
            type: String,
            default: null
        },
        departaments: {
            type: Object,
            default: () => ({}),
        },
        countries: {
            type: Object,
            default: () => ({}),
        },
        provinces: {
            type: Object,
            default: () => ({}),
        },
        departament_id: {
            type: String,
            default: null
        }
    });
    const objetCountry = props.countries.find(objeto => objeto.id == props.country_id);
    const atUrl = assetUrl;

    const form = useForm({
        description_state: null,
        description_province: null,
        city_code: null,
        city_description: null,
        country_icon: props.country_id ? atUrl + objetCountry.icon : null,
        country_description: props.country_id ? objetCountry.description : 'Seleccionar país',
        country_id: props.country_id,
        departament_id: props.departament_id,
        province_id: null
    });

    const formRegister = useForm({
        display: false,
        type: null,
        code: null,
        description: null,
        country_id: null,
        departament_id: null
    });

    const createUbigeo = () => {
        form.post(route('ubigeo_store'), {
            errorBag: 'createUbigeo',
            preserveScroll: true,
            onSuccess: () => {
                form.reset();
                swal('Ciudad creada con éxito');
            }
        });
    };

    const getImageCountry = (path) => {
        return assetUrl + path;
    }

    const setCountry = (id, text, icon) => {
        form.country_id = id;
        form.country_description = text;
        form.country_icon = assetUrl + icon;
        router.get(route('ubigeo_create',[form.country_id,form.departament_id]),{
            preserveState: false,
            preserveScroll: false
        });
    }

    const openModalRegister = (type) => {
        formRegister.display = true;
        formRegister.type = type;
    }

    const closeModalRegister = () => {
        formRegister.display = false
    }

    const saveStateOrProvince = () => {
        formRegister.country_id = form.country_id
        formRegister.departament_id = form.departament_id
        formRegister.post(route('ubigeo__state_province_store'), {
            errorBag: 'saveStateOrProvince',
            preserveScroll: true,
            onSuccess: () => {
                if(formRegister.type == 1){
                    swal('Estado/departamento creado con éxito');
                }else{
                    swal('Provincia creada con éxito');
                }
                formRegister.reset();
            }
        });
    }

    const getProvinces = () => {
        router.get(route('ubigeo_create',[form.country_id,form.departament_id]),{
            preserveState: false,
            preserveScroll: false
        });
    }
 </script>

<template>
    <FormSection @submitted="createUbigeo">
        <template #title>
            Datos de Tienda
        </template>

        <template #description>
            Crear nueva Tienda
        </template>

        <template #form>
            <div class="col-span-6 ">
                <InputLabel value="País *" class="mb-1" />
                <dropdown>
                    <template #trigger="{ toggle }">
                    <button class="w-full flex-shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button" @click="toggle">
                        <img v-show="form.country_icon" :src="form.country_icon" class="mr-1" style="width: 15px;"><span>{{ form.country_description }}</span> 
                    </button>
                    </template>
                    <div class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-full dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                            <li v-for="(country, ke) in countries">
                                <button @click="setCountry(country.id,country.description,country.icon)" type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <div class="inline-flex items-center">
                                        <img :src="getImageCountry(country.icon)" class="h-3.5 w-3.5 rounded-full mr-2" >
                                        {{ country.description }}
                                    </div>
                                </button>
                            </li>
                        </ul>
                    </div>
                </dropdown>
                <InputError :message="form.errors.country_id" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-6 md:col-span-6">
                <div class="flex items-center justify-between py-2">
                    <InputLabel for="description_state" value="Estado/Departamento" />
                    <a @click="openModalRegister(1)" href="#" class="text-blue-600 hover:text-blue-800">+Nuevo</a>
                </div>
                <select v-model="form.departament_id" @change="getProvinces" id="description_state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                   <template v-if="departaments.length > 0">
                        <option v-for="departament in departaments" :value="departament.id">{{ departament.name }}</option>
                   </template> 
                    <option v-else value="" selected>Vacio</option>
                </select>
                <InputError :message="form.errors.departament_id" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-6 md:col-span-6">
                <div class="flex items-center justify-between py-2">
                    <InputLabel for="description_province" value="Provincia" />
                    <a @click="openModalRegister(2)" href="#" class="text-blue-600 hover:text-blue-800">+Nuevo</a>
                </div>
                <select v-model="form.province_id" id="description_province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <template v-if="provinces.length > 0">
                        <option v-for="province in provinces" :value="province.id">{{ province.name }}</option>
                    </template>
                    <option v-else value="" selected>Vacio</option>
                </select>
                <InputError :message="form.errors.province_id" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-2 md:col-span-2">
                <InputLabel for="city_code" value="Código ciudad " />
                <TextInput
                    id="city_code"
                    v-model="form.city_code"
                    type="text"
                    class="block w-full mt-1"
                />
                <InputError :message="form.errors.city_code" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4 md:col-span-4">
                <InputLabel for="city_description" value="Nombre ciudad" />
                <TextInput
                    id="city_description"
                    v-model="form.city_description"
                    type="text"
                    class="block w-full mt-1"
                />
                <InputError :message="form.errors.city_description" class="mt-2" />
            </div>

        </template>

        <template #actions>
            <Keypad>
                <template #botones>
                    <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        <svg v-show="form.processing" aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>
                        </svg>
                        Guardar
                    </PrimaryButton>
                    <Link :href="route('ubigeo_list')"  class="ml-2 inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Ir al Listado</Link>
                </template>
            </Keypad>
        </template>
    </FormSection>
    <ModalSmall
        :icon="'/img/mapa_color.png'"
        :show="formRegister.display"
        :onClose="closeModalRegister"
    >
        <template #title>Nuevo </template>
        <template #message>
            <span v-if="formRegister.type">Estado/Departamento</span>
            <span v-else>Provincia</span>
        </template>
        <template #content>
            <div class="mb-5">
                <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Código</label>
                <input v-model="formRegister.code" type="text" id="code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <InputError :message="formRegister.errors.code" class="mt-2" />
                <InputError :message="formRegister.errors.country_id" class="mt-2" />
                <InputError :message="formRegister.errors.department_id" class="mt-2" />
            </div>
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                <input v-model="formRegister.description" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <InputError :message="formRegister.errors.description" class="mt-2" />
            </div>
        </template>
        <template #buttons>
            <PrimaryButton
                    :class="{ 'opacity-25': formRegister.processing }" :disabled="formRegister.processing"
                    @click="saveStateOrProvince"
                    class="mr-2"
               >Guardar
            </PrimaryButton> 
        </template>
    </ModalSmall>
</template>
