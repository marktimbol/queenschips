<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class GalleriesController extends Controller
{

    protected $uploadsDirectory = '/images/uploads/';

    protected $photoWidth;

    protected $photoHeight;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(15);

        return view('admin.galleries.index', compact('galleries'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $request->hasFile('photo') ) {
 
            $file = $request->file('photo');

            try {
                
                $filename = $this->makeThumbnail($file);

                $gallery = new Gallery;

                $gallery->photo = $this->uploadsDirectory . $filename;

                $gallery->photo_size = $this->photoWidth . 'x' . $this->photoHeight;

                $gallery->save();

            } catch (Exception $e) {

            }
        
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        File::delete(public_path() . $gallery->photo);

        $gallery->delete();

        return redirect()->back();
    }

    protected function makeThumbnail(UploadedFile $photo)
    {   

        $filename = sprintf('%s-%s.%s', time(), $photo->getClientOriginalName(), $photo->getClientOriginalExtension());

        $image = Image::make($photo->getRealPath());

        $image->resize(500, null, function($constraint) {

            $constraint->aspectRatio();
        
        })->save( $this->fullPath($filename) ); 

        $this->photoWidth = $image->getWidth(); 
        $this->photoHeight = $image->getHeight(); 

        return $filename;
        
    } 

    protected function fullPath($filename) {
    
        return public_path() . $this->uploadsDirectory . $filename;
    
    }          
}
