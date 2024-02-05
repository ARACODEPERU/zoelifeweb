<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Department;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class UbigeoController extends Controller
{
    public function index()
    {
        $countries = Country::where('status', true)->where('id', '<>', 1)->get();

        $ubigeos = (new District())->newQuery();

        $ubigeos = District::join('provinces', 'province_id', 'provinces.id')
            ->join('departments', 'provinces.department_id', 'departments.id')
            ->join('countries', 'departments.country_id', 'countries.id')
            ->select(
                'districts.id AS district_id',
                'districts.name AS district_name',
                'provinces.name AS province_name',
                'departments.name AS department_name',
                'countries.description AS country_description'
            );

        $ubigeos = $ubigeos->where('departments.country_id', '<>', 1);

        if (request()->has('country_id')) {
            $ubigeos = $ubigeos->where('departments.country_id', request()->input('country_id'));
        }

        if (request()->has('search')) {
            $ubigeos = $ubigeos->where('departments.name', 'like', '%' . request()->input('search') . '%');
        }

        $ubigeos = $ubigeos->paginate(20);

        return Inertia::render('Ubigeo/List', [
            'countries' => $countries,
            'ubigeos'    => $ubigeos
        ]);
    }
    public function create($country_id = null, $department_id = null)
    {
        $countries = Country::where('status', true)->where('id', '<>', 1)->get();

        $departaments = Department::where('country_id', $country_id)->get();
        $provinces = Province::where('department_id', $department_id)->get();

        return Inertia::render('Ubigeo/Create', [
            'countries' => $countries,
            'departaments' => $departaments,
            'country_id' => $country_id,
            'provinces' => $provinces,
            'departament_id' => $department_id
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $dpt_id = $request->get('departament_id');

        if ($request->get('type') == 1) {
            $this->validate($request, [
                'country_id' => 'required',
                'code' => 'unique:departments,id',
            ]);
            $department = Department::create([
                'country_id' => $request->get('country_id'),
                'id' => $request->get('code'),
                'name' => $request->get('description')
            ]);
            $dpt_id = $department->id;
        } else {

            $this->validate($request, [
                'departament_id' => 'required',
                'code' => 'unique:provinces,id',
            ]);

            Province::create([
                'id'                => $request->get('code'),
                'name'              => $request->get('description'),
                'department_id'     => $request->get('departament_id')
            ]);
        }
        return to_route('ubigeo_create', [$request->get('country_id'), $dpt_id]);
    }

    public function storeCity(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'country_id' => 'required',
            'departament_id' => 'required|max:255',
            'province_id' => 'required',
            'city_code' => 'required|max:255',
            'city_description' => 'required|max:255',
        ]);

        District::create([
            'id'                => $request->get('city_code'),
            'name'              => $request->get('city_description'),
            'province_id'       => $request->get('province_id'),
            'department_id'     => $request->get('departament_id'),
        ]);

        return to_route('ubigeo_list');
    }

    public function destroy($id)
    {
        $message = null;
        $success = false;
        try {
            // Usamos una transacción para asegurarnos de que la operación se realice de manera segura.
            DB::beginTransaction();

            // Verificamos si existe.
            $page = District::findOrFail($id);

            $page->delete();

            // Si todo ha sido exitoso, confirmamos la transacción.
            DB::commit();

            $message =  'Ciudad eliminada correctamente';
            $success = true;
        } catch (\Exception $e) {
            // Si ocurre alguna excepción durante la transacción, hacemos rollback para deshacer cualquier cambio.
            DB::rollback();
            $success = false;
            $message = $e->getMessage();
        }

        return response()->json([
            'success' => $success,
            'message' => $message
        ]);
    }
}
