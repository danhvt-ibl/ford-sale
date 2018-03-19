<?php

namespace App\Http\Controllers;

use App\Verhicle;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateImageRequest;
use Illuminate\Http\Request;

class VerhicleController extends Controller
{
    use ManagesImages;
    public function __construct() {
        $this->middleware(['auth', 'admin']);
        $this->setImageDefaultsFromConfig('verhicleImage');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch records in pagination so only 10 categories per page
        // To get all records you may use get() method
        $verhicles = Verhicle::paginate(10);
        return view('verhicle.index', ['verhicles' => $verhicles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('verhicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create new instance of model to save from form
        $verhicle = new Verhicle([
            'name'                  => $request->get('name'),
            'image_name'            => $request->get('name'),
            'image_extension'       => $request->file('image')->getClientOriginalExtension(),
            'category'              => $request->get('category')
        ]);
        // save model
        $verhicle->save();
        // get instance of file
        $file = $this->getUploadedFile();
        // pass in the file and the model
        $this->saveImageFiles($file, $verhicle);
        alert()->success('Congrats!', 'Thêm dòng xe thành công!');
        return redirect()->route('dong-xe.index', [$verhicle]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
