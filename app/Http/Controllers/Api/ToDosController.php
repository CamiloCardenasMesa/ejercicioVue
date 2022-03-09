<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Todo\StoreAndStoreRequest;
use App\Http\Resources\Api\ToDoResource;
use App\Models\ToDo;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ToDosController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return ToDoResource::collection(ToDo::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAndStoreRequest $request)
    {
        $todo = new ToDo();
        $validateData = $request->validate();

        $todo->title = $validateData['title'];
        $request->has('description') && $todo->description = $validateData['description'];

        $todo->save();

        return ToDoResource::make($todo)->response()->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = new ToDo();

        return ToDoResource::make($todo)->response()->setStatusCode(201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
