<script setup>
import AppLayout from '../../Layouts/AppLayout.vue';
import { Link, router, useForm } from '@inertiajs/vue3';
import Keypad from '@/Components/Keypad.vue';
import { Dropdown } from 'flowbite-vue'
import Swal2 from "sweetalert2";
import { faTrashAlt } from "@fortawesome/free-solid-svg-icons";
import Pagination from '@/Components/Pagination.vue';

const props = defineProps({
    ubigeos: {
        type: Object,
        default: () => ({}),
    },
    filters: {
        type: Object,
        default: () => ({}),
    },
    countries: {
        type: Object,
        default: () => ({})
    },
});

const form = useForm({
    search: props.filters.search,
    country_id: props.filters.country_id,
    country_icon: null,
    country_description: 'Seleccionar país', 
});

const getImageCountry = (path) => {
    return assetUrl + path;
}

const setCountry = (id, text, icon) => {
    form.country_id = id;
    form.country_description = text;
    form.country_icon = assetUrl + icon;
}

const destroyCity = (id) => {
    Swal2.fire({
        title: '¿Estas seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, Eliminar!',
        cancelButtonText: 'Cancelar',
        showLoaderOnConfirm: true,
        preConfirm: () => {
            return axios.delete(route('ubigeo_destroy', id)).then((res) => {
                if (!res.data.success) {
                    Swal2.showValidationMessage(res.data.message)
                }
                return res
            });
        },
        allowOutsideClick: () => !Swal2.isLoading()
    }).then((result) => {
        if (result.isConfirmed) {
            Swal2.fire({
                title: 'Enhorabuena',
                text: 'Se Eliminó correctamente',
                icon: 'success',
            });
            router.visit(route('ubigeo_list'), { replace: true, method: 'get' });
        }
    });
}
</script>

<template>
    <AppLayout title="Ciudades Internacionales">
        <div class="max-w-screen-2xl  mx-auto p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <nav class="flex px-4 py-3 border border-stroke text-gray-700 mb-4 bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <Link :href="route('dashboard')" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Inicio
                        </Link>
                    </li>
                    <li>
                        <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <!-- <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Productos</a> -->
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Ciudades Internacionales</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Listado</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <!-- ====== Table Section Start -->
            <div class="flex flex-col gap-10">
                <!-- ====== Table One Start -->
                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="w-full p-4 border-b border-gray-200 bg-gray-50 dark:border-gray-600 dark:bg-gray-700">
                        <div class="grid grid-cols-6">
                            <div class="col-span-6 sm:col-span-4 gap-6 ">
                                <form @submit.prevent="form.get(route('ubigeo_list'))" class="flex flex-column sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 md:space-x-4 items-center pb-4">
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <input v-model="form.search" type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar por Ciudad/distrito">
                                    </div>
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
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
                                </form>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <Keypad>
                                    <template #botones>
                                        
                                        <Link :href="route('ubigeo_create',form.country_id)" class="flex items-center justify-center inline-block px-6 py-2.5 bg-blue-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                            Nuevo
                                        </Link>
                                    </template>
                                </Keypad>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-full overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead class="border-b border-stroke">
                                <tr class="bg-gray-50 text-left dark:bg-meta-4">
                                    <th  class="py-2 px-4 text-center font-medium text-black dark:text-white">
                                        Acciones
                                    </th>
                                    <th class="py-2 px-4 font-medium text-black dark:text-white">
                                        País
                                    </th>
                                    <th class="py-2 px-4 font-medium text-black dark:text-white">
                                        Estado/Departamento
                                    </th>
                                    <th class="py-2 px-4 font-medium text-black dark:text-white">
                                        Provincia
                                    </th>
                                    <th class="py-2 px-4 font-medium text-black dark:text-white">
                                        Ciudad/distrito
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(ubigeo, index) in ubigeos.data" :key="ubigeo.id">
                                    <tr class="border-b border-stroke">
                                        <td class="text-center py-2 px-2 dark:border-strokedark">
                                            <button  @click="destroyCity(ubigeo.district_id)" type="button" class="mr-1 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                <font-awesome-icon :icon="faTrashAlt" />
                                            </button>
                                        </td>
                                        <td class="py-2 px-2 dark:border-strokedark">
                                            {{ ubigeo.country_description }}
                                        </td>
                                        <td class="py-2 px-2 dark:border-strokedark">
                                            {{ ubigeo.department_name }}
                                        </td>
                                        <td class="py-2 px-2 dark:border-strokedark">
                                            {{ ubigeo.province_name }}
                                        </td>
                                        <td class="py-2 px-2 dark:border-strokedark">
                                            {{ ubigeo.district_name }}
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                    <Pagination :data="ubigeos" />
                </div>
            </div>
        </div>
        
    </AppLayout>
</template>
