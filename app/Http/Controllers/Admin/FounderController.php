<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Founder; 
use Illuminate\Validation\ValidationException; 
use Illuminate\Database\QueryException; 
use Illuminate\Support\Facades\File; 

class FounderController extends Controller
{
    public function index(){
       $founder = Founder::first(); // Get the first founder record if it exists
        return view('admin.settings.founder.index', compact('founder'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'bio' => 'nullable|string',
                'qualification' => 'nullable|string',
                'bio_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
                'experience' => 'nullable|string',
                'experience_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
                'approach' => 'nullable|string',
                'approach_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
             ]);

            $dataToCreate = $validatedData; 

            // Handle bio_img upload
            if ($request->hasFile('bio_img')) {
                $image = $request->file('bio_img');
                $bioImageName = 'bio_' . uniqid() . '.' . $image->extension();
                $image->move(public_path('assets/images/founder'), $bioImageName);
                $dataToCreate['bio_img'] = 'assets/images/founder/' . $bioImageName;
            }

            // Handle experience_img upload
            if ($request->hasFile('experience_img')) {
                $image = $request->file('experience_img');
                $experienceImageName = 'exp_' . uniqid() . '.' . $image->extension();
                $image->move(public_path('assets/images/founder'), $experienceImageName);
                $dataToCreate['experience_img'] = 'assets/images/founder/' . $experienceImageName;
            }

            // Handle approach_img upload
            if ($request->hasFile('approach_img')) {
                $image = $request->file('approach_img');
                $approachImageName = 'appr_' . uniqid() . '.' . $image->extension();
                $image->move(public_path('assets/images/founder'), $approachImageName);
                $dataToCreate['approach_img'] = 'assets/images/founder/' . $approachImageName;
            }

            // Create the Founder record
            Founder::create($dataToCreate);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Founder details added successfully.');

        } catch (ValidationException $e) {
            // Redirect back with validation errors
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        } catch (QueryException $e) {
            // Log the error for debugging
            \Log::error('Database error adding founder details: ' . $e->getMessage());
            // Redirect back with a generic database error message
            return redirect()->back()->with('error', 'Failed to add founder details due to a database issue. Please try again.');
        } catch (\Exception $e) {
            // Log the error for debugging
             \Log::error('Unexpected error adding founder details: ' . $e->getMessage());
            // Redirect back with a generic error message
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
            // Optionally include $e->getMessage() in development:
            // return redirect()->back()->with('error', 'An unexpected error occurred: '.$e->getMessage());
        }
    }

    // You'll likely need an update method as well. Here's a basic structure:
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'bio' => 'nullable|string',
                'qualification' => 'nullable|string',
                'bio_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
                'experience' => 'nullable|string',
                'experience_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
                'approach' => 'nullable|string',
                'approach_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
             ]);

            $founder = Founder::findOrFail($id);
            $dataToUpdate = $validatedData; 

            // Helper function to handle image update and old file deletion
            $handleImageUpdate = function($fieldName, $imagePrefix) use ($request, $founder, &$dataToUpdate) {
                if ($request->hasFile($fieldName)) {
                    // Delete old image if it exists
                    if ($founder->$fieldName && File::exists(public_path($founder->$fieldName))) {
                        File::delete(public_path($founder->$fieldName));
                    }
                    // Upload new image
                    $image = $request->file($fieldName);
                    $imageName = $imagePrefix . '_' . uniqid() . '.' . $image->extension();
                    $image->move(public_path('assets/images/founder'), $imageName);
                    $dataToUpdate[$fieldName] = 'assets/images/founder/' . $imageName;
                } else {
                    // Ensure existing image path isn't overwritten if no new file is uploaded
                    unset($dataToUpdate[$fieldName]); // Remove from array if no new file
                }
            };

            // Handle image updates
            $handleImageUpdate('bio_img', 'bio');
            $handleImageUpdate('experience_img', 'exp');
            $handleImageUpdate('approach_img', 'appr');

            // Update the Founder record
            $founder->update($dataToUpdate);

            return redirect()->back()->with('success', 'Founder details updated successfully.');

        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        } catch (ModelNotFoundException $e) { // <-- Import ModelNotFoundException if needed
             return redirect()->back()->with('error', 'Founder record not found.')->withInput();
        } catch (QueryException $e) {
            \Log::error('Database error updating founder details: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Database error updating founder details. Please try again.')->withInput();
        } catch (\Exception $e) {
             \Log::error('Unexpected error updating founder details: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.')->withInput();
             // Optionally include $e->getMessage() in development:
            // return redirect()->back()->with('error', 'An unexpected error occurred: '.$e->getMessage())->withInput();
        }
    }

    // Add destroy method if needed
    // public function destroy($id) { ... }
}
