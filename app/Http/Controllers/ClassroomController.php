<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classroom;

use Illuminate\Validation\Rule;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classroom::all();

        return view("classrooms.index", compact("classrooms"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("classrooms.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // validate function
        $request->validate($this->validationRules());

        $classroom = new Classroom();

        // fillable in the model
        $classroom->fill($data);

        // save in the db
        $saved = $classroom->save();

        // redirect to show
        if($saved) {
            $newClass = Classroom::find($classroom->id);
            return redirect()->route("classrooms.show", $newClass);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        return view("classrooms.show", compact("classroom"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        return view("classrooms.edit", compact("classroom"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $data = $request->all();

        // validation
        $request->validate($this->validationRules($classroom->id));

        // update data on DB
        $updated = $classroom->update($data);
        
        // redirect
        if ($updated) {
            return redirect()->route("classrooms.show", $classroom->id);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        // ref entity to delete
        $ref = $classroom->name;

        // delete
        $deleted = $classroom->delete();

        // redirect wish session data
        if ($deleted) {
            return redirect()->route("classrooms.index")->with("deleted", $ref);
        }
    }

    /**
     * Utilities
     */

    // Validation rules
    private function validationRules($id = null) {
        return [
            "name" => [
                "required",
                "max:20",
                Rule::unique("classrooms")->ignore($id),
            ],
            "description" => "required",
        ];
    }
}
