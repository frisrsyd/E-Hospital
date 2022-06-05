<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\checkout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PageController extends Controller
{
    public function index()
    {   
        $category = Category::OrderBy('created_at');
        if(request('search')){
            $category = $category->where('name','like','%'.request('search').'%');
        }

        return view('page.index',[
            'categories' => $category->paginate(10),
        ]);
    }

    public function allTools()
    {
        return view('page.all-tools', [
            'categories' => Category::all(),
        ]);
    }

    public function rekapPinjam(Post $post)
    {   
        $post = Post::find($post->id);
        return view('page.rekap-pinjam', compact('post'));
    }

    public function inputData()
    {   
        $categories = DB::table('categories')->get();
        return view('page.input-data', compact('categories'));
    }

    public function account()
    {
        return view('page.account');
    }
    public function signUp()
    {
        return view('page.signUp');
    }

    public function login()
    {
        return view('page.login');
    }

    public function lupapassword()
    {
        return view('page.lupapassword');
    }

    public function resetPassword()
    {
        return view('page.inputUlangPassword');
    }

    public function ketersediaanTool(Post $post, Category $category)
    {   
        $post = Post::where('category_id', $category->id)->where('status', 'Tersedia')->get();
        return view('page.ketersediaan', compact('post'));
    }

    public function historyPinjam()
    {   
        $checkout = checkout::where('user_id', Auth::user()->id)->where('status', 'Dikembalikan')->orderBy('created_at', 'desc')->get();
        return view('page.history', compact('checkout'));
    }

    public function detailHistory(checkout $checkout)
    {
        return view('page.detail-history', compact('checkout'));
    }

    public function editProfile()
    {
        return view('page.edit-profile');
    }

    public function notifikasi()
    {
        return view('page.notifications');
    }

    public function strukPeminjaman(checkout $checkout)
    {   
        return view('page.struk-peminjaman', compact('checkout'));
    }

    public function cetakStruk(checkout $checkout)
    {
        return view('page.cetak-struk', compact('checkout'));
    }

    public function onLoanUser()
    {   
        $checkout = checkout::where('user_id', Auth::user()->id)->where('status', 'Sedang Dipinjam')->orderBy('tgl_akhir', 'desc')->get();
        return view('page.on-loan-user', compact('checkout'));
    }

    public function DetailonLoanUser(checkout $checkout)
    {   
        return view('page.detail-on-loan-user', compact('checkout'));
    }

    public function antrian()
    {
        return view('page.antrian');
    }

    public function detailAntrian()
    {
        return view('page.detail-antrian');
    }

    public function kembalikanTool(checkout $checkout)
    {
        return view('page.pengembalian', compact('checkout'));
    }
}