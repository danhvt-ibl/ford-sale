<?php

namespace App\Http\Controllers;
use App\Car;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\AuthTraits\OwnsRecord;
class CarController extends Controller
{
    use OwnsRecord;
    public function __construct() {
        $this->middleware(['auth', 'admin'], ['except' => ['index', 'show']] );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(10);
        return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
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
            'name' => 'required|unique:cars|string'
        ]);
        $slug = str_slug($request->name, "-");
        $car = Car::create([
            'name' => $request->name, 
            'slug' => $slug,
            'user_id' => Auth::id()]);
        $car->save();
        alert()->success('Congrats!', 'You made a car');
        return Redirect::route('car.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug ='')
    {
        $car = Car::findOrFail($id);
        if ($car->slug !== $slug) {
            return Redirect::route('car.show', ['id' => $car->id,
                    'slug' => $car->slug],
                    301);
        }
        return view('car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        if ( ! $this->adminOrCurrentUserOwns($car)){
            throw new UnauthorizedException;
        }
        return view('car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:40|unique:cars,name,' .$id
        ]);

        $car = Car::findOrFail($id);
        if ($this->adminOrCurrentUserOwns($car)){
            throw new UnauthorizedException;
        }

        $slug = str_slug($request->name, "-");

        $car->update(['name' => $request->name,
                                  'slug' => $slug,
                                  'user_id' => Auth::id()]);

        alert()->success('Congrats!', 'You updated a car');

        return Redirect::route('car.show', ['car' => $car, 'slug' =>$slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);

        alert()->overlay('Attention!', 'You deleted a car', 'error');

        return Redirect::route('car.index');
    }
}
