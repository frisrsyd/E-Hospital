<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class DataController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'toolName' => 'required|declined_if:toolName,==,"Pilih jenis alat"',
            'location' => 'required|url',
            'jumlahAlat' => 'required|integer|min:1',
        ]);

        $folder = 'tool_images';
        $image = $request->file('image');
        $imageName = time(). '_' .$image->getClientOriginalName();
        $image->move($folder, $imageName);
        $icon = 'img/icon/'.$request->toolName.'.png';
        $category_name = $request->toolName;
        
        switch($category_name) {
            case 'Stetoskop':
                $category_id = 1;
                break;
            case 'Kursi Roda':
                $category_id = 2;
                break;
            case 'Crutch':
                $category_id = 3;
                break;
            case 'Asthma Inhalator':
                $category_id = 4;
                break;
            case 'Infus':
                $category_id = 5;
                break;
                
        }
        $status = '';
        $jumlah_alat = $request->jumlahAlat;
        if($jumlah_alat > 0){
            $status = 'Tersedia';
        }else{
            $status = 'Tidak Tersedia';
        }
        $post_ref = Post::create([
            'category_id' => $category_id,
            'image' => $imageName,
            'tool_name' => $request->toolName,
            'link_location' => $request->location,
            'jumlah_alat' => $request->jumlahAlat,
            'user_id' => auth()->user()->id,
            'icon' => $icon,
            'status' => $status,
        ]);

        if($post_ref) {
            return redirect('/account')->with('status', 'Input Success');
        }else{
            return redirect('/input-data')->with('status', 'Input Failed');
        }
    }
}
