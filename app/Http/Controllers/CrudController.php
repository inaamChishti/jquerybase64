<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Carbon\Carbon; 
use App\Models\Timing;
use App\Models\Image;
class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Carbon::now()->format('l'));
        // dd(Carbon::now()->format('H:i'));
        return view('form_page');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $timings = json_decode($request->timing);
        $images = $request->input('images');
        $images = json_decode($images);
        $name = $request->name;
        $saveCrud = new Crud();
        $saveCrud->name = $name;
        $saveCrud->save();
        if(sizeof($timings)>0)
        {
        foreach($timings as $timing)
        {

           //$timing_arr = ['day'=>$timing->day,'opening_time'=>$timing->opening_time,'closing_time'=>$closing_time];

           $store_timing = new Timing();
           $store_timing->day = $timing->day;
           $store_timing->opening_time = $timing->openingTime;
           $store_timing->closing_time = $timing->closingTime;
           $saveCrud->timings()->save($store_timing);

        }
        }
        if(sizeof($images)>0)
        {
        foreach($images as $image)
        {
                if (strpos($image->imgs, 'base64') != false){
                    $replace = preg_replace('#^data:image/\w+;base64,#i', '', $image->imgs);
                    $image_decode = base64_decode($replace);
                    $extension = explode('/', mime_content_type($image->imgs))[1];
                    
                    $image_name = "E_img" . time() . "." . $extension;
                    $path = public_path() . "/images/" . $image_name;

                    $image_DB_path = "/images/" . $image_name;

                    file_put_contents($path, $image_decode);
                    $store_image = new Image();
                    $store_image->image = $image->imgs;
                    $saveCrud->images()->save($store_image);

                    
                    
        }
        }
    }
 
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   

        $get_data = Crud::all();
        if(sizeof($get_data)>0)
        {
            foreach($get_data as $data)
            {
             $image_data = Image::query()->where('crud_id',$data->id)->first();
             $data->image_details = $image_data;
             $timing_details = Timing::query()->where('crud_id',$data->id)->first();
             $data->timing_details = $timing_details;
            }
            
        }

        $timings = Timing::all();
        //dd($get_data);

        return view('table',compact('get_data','timings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       $fetch_data = Crud::query()->where('id',$id)->first();
      
       if($fetch_data)
       {
         $image_data = Image::query()->where('crud_id',$fetch_data->id)->get();
         $fetch_data->image_data = $image_data;
         $timing_details = Timing::query()->where('crud_id',$fetch_data->id)->get();
         $fetch_data->timing_details = $timing_details;
       }
       // dd($fetch_data);

       

        return view('edit_table',compact('fetch_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->all());
        // dd($request->images);
        $id = $request->id;
        $name = $request->input('name');
        $timings = json_decode($request->timing);
         // $images = json_decode($request->images);
        // foreach($images as $image)
        // {
        //     dd($image->img_id);
        // }
        $updateName = Crud::find($id);
        $updateName->name = $name;
        $updateName->update();
        //dd($timings);
        if(sizeof($timings)>0)
        {
        foreach($timings as $timing)
        {
        if(!empty($timing->timing_id))
            //dd($timing);
        {

            Timing::query()->where('id',$timing->timing_id)->update(['day'=>$timing->day,'opening_time'=>$timing->openingTime,'closing_time'=>$timing->closingTime,'crud_id'=>$id]);
        }
        elseif(empty($timing->timing_id))
        {
            
        Timing::query()->create(['day'=>$timing->day,'opening_time'=>$timing->openingTime,'closing_time'=>$timing->closingTime,'crud_id'=>$id]);   
        }

        }
        }

         $images = $request->input('images');
         $images = json_decode($images);
         //dd($images);        
         if(sizeof($images)>0)
        {
       
        foreach($images as $img)
        {
            // dd($img->img_id);
        if(empty($img->img_id))
        {
        //  $filenameWithExt = $img->imgs->getClientOriginalName();

        // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // $extension = $img->imgs->getClientOriginalExtension();

        // $fileNameToStore = $filename.'-'.time().'.'.$extension;

        // $img->imgs->storeAs('public/images', $fileNameToStore);

        // $path = $img->imgs->storeAs('images', $fileNameToStore);
        
        Image::query()->Create(['crud_id'=>$id,'image'=>$img->imgs]);
        }
        else
        {
         
        Image::query()->where('id',$img->img_id)->update(['crud_id'=>$id,'image'=>$img->imgs]);

        }
        
        
        }
        }

        return back();
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crud $crud)
    {
        //
    }
}
