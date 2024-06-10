<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\BarangStoreRequest;
use App\Http\Requests\BarangUpdateRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Barang::class);

        $search = $request->get('search', '');

        $barangs = Barang::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.barangs.index', compact('barangs', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Barang::class);

        return view('app.barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BarangStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Barang::class);

        $validated = $request->validated();

        $barang = Barang::create($validated);

        return redirect()
            ->route('barangs.edit', $barang)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Barang $barang): View
    {
        $this->authorize('view', $barang);

        return view('app.barangs.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Barang $barang): View
    {
        $this->authorize('update', $barang);

        return view('app.barangs.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        BarangUpdateRequest $request,
        Barang $barang
    ): RedirectResponse {
        $this->authorize('update', $barang);

        $validated = $request->validated();

        $barang->update($validated);

        return redirect()
            ->route('barangs.edit', $barang)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Barang $barang): RedirectResponse
    {
        $this->authorize('delete', $barang);

        $barang->delete();

        return redirect()
            ->route('barangs.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
