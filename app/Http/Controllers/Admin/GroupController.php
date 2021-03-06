<?php

namespace App\Http\Controllers\Admin;

use App\Group;
use App\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::latest()->paginate(10);

        return view('administrators.groups.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Group $group, Career $careers)
    {
        $careers = Career::all();

        return view('administrators.groups.create',compact('group','careers'));
    }

    /**
     * Store a newly created resource in storage.
     *u
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveGroupRequest $request)
    {
        Group::create($request->validated());

        return redirect()->route('group.index')->with('status','Grupo creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group, Career $careers)
    {
        return view('administrators.groups.show',compact('group','careers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group, Career $careers)
    {
        $careers = Career::all();
        return view ('administrators.groups.edit', compact('group', 'careers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Group $group, SaveGroupRequest $request)
    {
        $group->update($request->validated());

        return redirect()->route('group.show', $group)->with('status','El grupo se ha editado éxitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return redirect()->route('group.index')->with('status','Grupo eliminado exitosamente');
    }
}
