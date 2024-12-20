<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'email|max:255',
            'mobile' => 'required|string|max:15',
        ]);

        Enquiry::create($validatedData);
         

        return redirect()->to('/thank-you');

        return redirect()->back()->with('success', 'Thank you! Your enquiry has been submitted.');
    }
}
