<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\LoanFile;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = Loan::all();
        return view("dashboard.credit.loans", compact("loans"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        if (request()->hasFile("cover")) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $cover = uniqid() . time() . '.' . $extension;
            request()->file('cover')->storeAs('public/loan/covers', $cover);
        }
        Loan::create([
            'title' => request('title'),
            'cover' => $cover,
            'desc' => request('desc'),
            'interest' => request('interest')
        ]);
        return back()->with('success', 'Loan instance created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        // dd(request());
        $loan = Loan::findOrFail($id);
        // if (request()->hasFile("cover")) {
        //     $extension = request()->file('cover')->getClientOriginalExtension();
        //     $cover = uniqid() . time() . '.' . $extension;
        //     request()->file('cover')->storeAs('public/loan/covers', $cover);
        //     $loan->cover = $cover;
        // }
        if (request('title') != null) {
            $loan->title = request('title');
        }
        if (request('desc') != null) {
            $loan->desc = request('desc');
        }
        if (request(key: 'interest') != null) {
            $loan->interest = request('interest');
        }
        $loan->update();
        if (request()->hasFile('photos')) {
            foreach (request()->file('photos') as $file) {
                $extension = $file->getClientOriginalExtension();
                $cover = uniqid() . time() . '.' . $extension;
                $file->storeAs('public/loan/photos', $cover);
                LoanFile::create([
                    'loan_id'=>$id,
                    'file_path'=>$cover
                ]);
            }
        }
        return back()->with('success', 'Loan instance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Loan::destroy($id);
        return back()->with('success', 'Loan instance deleted successfully');
    }
}
