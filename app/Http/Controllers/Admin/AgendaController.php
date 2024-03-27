<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::all();
        return view('admin.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'place' => 'required|string',
        //     'tanggal' => 'required|date_format:H:i',
        // ]);

        Agenda::create($request->all());

        return redirect()->route('admin.agenda.index')
            ->with('success', 'Agenda created successfully.');
    }

    public function show(Agenda $agenda)
    {
        return view('agendas.show', compact('agenda'));
    }

    public function edit(Agenda $agenda)
    {
        return view('admin.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([
            'name' => 'string',
            'place' => 'string',
        ]);

        $agenda->update($request->all());

        return redirect()->route('admin.agenda.index')
            ->with('success', 'Agenda updated successfully');
    }

    public function destroy($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();

        return redirect()->route('admin.agenda.index')
            ->with('success', 'Agenda deleted successfully');
    }
}
