<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\District;
use App\Models\LocalSale;
use App\Models\SaleDocumentType;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LocalSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $locals = (new LocalSale())->newQuery();
        if (request()->has('search')) {
            $locals->where('local_sales.description', 'Like', '%' . request()->input('search') . '%');
        }
        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $locals->orderBy($attribute, $sort_order);
        } else {
            $locals->latest();
        }
        $locals = $locals->with('country');
        $locals = $locals->paginate(10)->onEachSide(2);
        //dd($locals);
        return Inertia::render('Establishments/List', [
            'locals' => $locals,
            'filters' => request()->all('search'),
            'document_types' => SaleDocumentType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ubigeo = District::join('provinces', 'province_id', 'provinces.id')
            ->join('departments', 'provinces.department_id', 'departments.id')
            ->select(
                'districts.id AS district_id',
                'districts.name AS district_name',
                'provinces.name AS province_name',
                'departments.name AS department_name'
            )
            ->get();
        $users = User::all();

        $countries = Country::where('status', true)->get();

        return Inertia::render('Establishments/Create', [
            'ubigeo' => $ubigeo,
            'users' => $users,
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description'   => 'required',
            'address'       => 'required',
            'ubigeo'        => 'required'
        ]);
        if ($request->get('user_id')) {
            $this->validate($request, [
                'user_id'   => 'unique:users,local_id'
            ]);
        }

        $path = null;
        $destination = 'uploads/stablishments';
        $file = $request->file('image');
        if ($file) {
            $original_name = strtolower(trim($file->getClientOriginalName()));
            $original_name = str_replace(" ", "_", $original_name);
            $extension = $file->getClientOriginalExtension();
            $file_name = date('YmdHis') . '.' . $extension;
            $path = $request->file('image')->storeAs(
                $destination,
                $file_name,
                'public'
            );
        }

        $l = LocalSale::create([
            'description'   => $request->get('description'),
            'address'       => $request->get('address'),
            'phone'         => $request->get('phone'),
            'ubigeo'        => $request->get('ubigeo'),
            'map'           => $request->get('map'),
            'agent'         => $request->get('agent'),
            'email'         => $request->get('email'),
            'image'         => $path,
            'country_id'    => $request->get('country_id') ?? null
        ]);

        if ($request->get('user_id')) {
            User::find($request->get('user_id'))
                ->update([
                    'local_id' => $l->id
                ]);
        }

        return redirect()->route('establishments.create')
            ->with('message', __('Tienda creada con éxito'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocalSale  $localSale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $ubigeo = District::join('provinces', 'province_id', 'provinces.id')
            ->join('departments', 'provinces.department_id', 'departments.id')
            ->select(
                'districts.id AS district_id',
                'districts.name AS district_name',
                'provinces.name AS province_name',
                'departments.name AS department_name'
            )
            ->get();

        $countries = Country::where('status', true)->get();

        return Inertia::render('Establishments/Edit', [
            'ubigeo' => $ubigeo,
            'users' => $users,
            'local' => LocalSale::with('country')->where('id', $id)->first(),
            'seller' => User::where('local_id', $id)->first(),
            'countries' => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocalSale  $localSale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');

        $this->validate($request, [
            'description'   => 'required',
            'address'       => 'required',
        ]);

        // if ($request->get('user_id')) {
        //     $this->validate($request, [
        //         'user_id'   => 'unique:users,local_id,' . $request->get('user_id')
        //     ]);
        // }

        $localsale = LocalSale::find($id);

        $localsale->description   = $request->get('description');
        $localsale->address = $request->get('address');
        $localsale->phone = $request->get('phone');
        $localsale->ubigeo = $request->get('ubigeo');
        $localsale->map = $request->get('map');
        $localsale->agent = $request->get('agent');
        $localsale->email = $request->get('email');
        $localsale->country_id = $request->get('country_id') ?? null;

        $destination = 'uploads/stablishments';
        $file = $request->file('image');
        if ($file) {
            $original_name = strtolower(trim($file->getClientOriginalName()));
            $original_name = str_replace(" ", "_", $original_name);
            $extension = $file->getClientOriginalExtension();
            $file_name = date('YmdHis') . '.' . $extension;
            $path = $request->file('image')->storeAs(
                $destination,
                $file_name,
                'public'
            );

            $localsale->image = $path;
        }

        $localsale->save();

        if ($request->get('user_id')) {
            User::find($request->get('user_id'))
                ->update([
                    'local_id' => $id
                ]);
        }

        return redirect()->route('establishments.edit', $id)
            ->with('message', __('Tienda Actualizada con éxito'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocalSale  $localSale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LocalSale::find($id)->delete();
    }

    public function series(Request $request)
    {
        $series = Serie::join('sale_document_types', 'document_type_id', 'sale_document_types.id')
            ->select(
                'series.document_type_id',
                'series.description',
                'series.number',
                'series.id',
                'sale_document_types.description AS type_name'
            )
            ->where('local_id', $request->get('id'))
            ->get();

        return response()->json($series);
    }

    public function get_locals()
    {
        $locals = LocalSale::all();
        return response()->json($locals);
    }
}
