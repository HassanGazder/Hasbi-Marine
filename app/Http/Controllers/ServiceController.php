<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function dashboard()
{
    $services = Service::all();
    return view('dashboard', compact('services'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'service_name' => 'required|string|max:255',
        'service_description' => 'required|string',
        'service_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $service = Service::findOrFail($id);

    // Update the image if a new one is uploaded
    if ($request->hasFile('service_image')) {
        $imagePath = $request->file('service_image')->store('services', 'public');
        $service->image = $imagePath;
    }

    $service->name = $request->service_name;
    $service->description = $request->service_description;
    $service->save();

    return redirect()->back()->with('success', 'Service updated successfully.');
}

public function destroy($id)
{
    $service = Service::findOrFail($id);
    $service->delete();

    return redirect()->back()->with('success', 'Service deleted successfully.');
}

    public function index()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    // Store a new service
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_description' => 'required|string',
            'service_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload the image and store it in the 'public/services' directory
        $imagePath = $request->file('service_image')->store('services', 'public');

        // Save the service details in the database
        Service::create([
            'name' => $request->service_name,
            'description' => $request->service_description,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Service added successfully.');
    }
}
