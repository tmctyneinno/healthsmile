<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

trait SettingsTrait
{
  

    public function uploadImageAboutUs($request, $fieldName, $destinationPath)
    {
        if ($request->hasFile($fieldName)) {
            $image = $request->file($fieldName);
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path($destinationPath), $imageName);
            return $destinationPath . '/' . $imageName;
        }
        return null;
    } 

    public function uploadHeaderImageAboutUs($request, $fieldName, $destinationPath)
    {
        if ($request->hasFile($fieldName)) {
            $image = $request->file($fieldName);
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path($destinationPath), $imageName);
            return $destinationPath . '/' . $imageName;
        }
        return null;
    }

    public function handleUpdateAboutUsImage($request, $aboutUs){
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'assets/images/about';
            $imageName = time() . '_img.' . $image->extension(); // Added suffix for clarity
            $newImagePathRelative = $destinationPath . '/' . $imageName;
            $newImagePathAbsolute = public_path($newImagePathRelative);
            
            $oldImagePathAbsolute = $aboutUs->image ? public_path($aboutUs->image) : null;
            $image->move(public_path($destinationPath), $imageName);

            if ($oldImagePathAbsolute && File::exists($oldImagePathAbsolute) && File::isFile($oldImagePathAbsolute)) {
                try {
                    File::delete($oldImagePathAbsolute);
                } catch (\Exception $e) {
                }
            }
            $aboutUs->image = $newImagePathRelative;
           
        }
        if ($request->hasFile('header_image')) {
            $image = $request->file('header_image');
            $destinationPath = 'assets/images/about';
            $imageName = time() . '_header.' . $image->extension(); // Added suffix for clarity
            $newImagePathRelative = $destinationPath . '/' . $imageName;
            $newImagePathAbsolute = public_path($newImagePathRelative);

            // Construct the absolute path to the old header image
            $oldHeaderImagePathAbsolute = $aboutUs->header_image ? public_path($aboutUs->header_image) : null;

            // Move the new image
            $image->move(public_path($destinationPath), $imageName);

            // Delete the old header image *if* it exists and is a file
            if ($oldHeaderImagePathAbsolute && File::exists($oldHeaderImagePathAbsolute) && File::isFile($oldHeaderImagePathAbsolute)) {
                 try {
                    File::delete($oldHeaderImagePathAbsolute);
                } catch (\Exception $e) {
                    // Log the error or handle it
                    // \Log::error("Failed to delete old about us header image: " . $e->getMessage());
                }
            }

            // Update the model
            $aboutUs->header_image = $newImagePathRelative;
        }
        if ($aboutUs->isDirty('image') || $aboutUs->isDirty('header_image')) {
            $aboutUs->save();
        }
    }
    public function uploadImageExecutiveSummary($request, $fieldName, $destinationPath)
    {
        if ($request->hasFile($fieldName)) {
            $image = $request->file($fieldName);
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path($destinationPath), $imageName);
            return $destinationPath . '/' . $imageName;
        }
        return null;
    }
    public function handleUpdateExecutiveSummaryImage($request, $executiveSummary){
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('executiveSummaryImage'), $imageName);
            if ($executiveSummary->image) {
                unlink(public_path($executiveSummary->image));
            }
            $executiveSummary->image = 'executiveSummaryImage/' . $imageName;
            $executiveSummary->save();
        }
        
    }
}