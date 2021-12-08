<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class ProfileController extends Controller
{

    /**
     * Show All Data From Database
     */
    public function index()
    {
        return view('index', ['data' => User::get()]);
    }


    /**
     * Update Data to Database
     *
     * @param string
     * @param Illuminate\Http\Request
     */
    public function update($id, Request $request)
    {
        User::where(['id' => $id])->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $this->getPicture($request)
        ]);
        return view('index', ['data' => User::get()]);
    }


    /**
     * Delete Data
     *
     * @param Illuminate\Http\Request
     */
    public function delete(Request $request)
    {
        $user = User::where(['id' => $request->id]);
        if ($user->delete()) {
            return view('index', ['data' => User::get()]);
        }
    }

    /**
     * Store Data to Database
     *
     * @param Illuminate\Http\Request
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = $this->getPicture($request);
        $user->save();
        return view('index', ['data' => User::get()]);
    }

    /**
     * Move img file to public/img
     *
     * @param Illuminate\Http\Request
     * @return string
     */
    public function getPicture(Request $request)
    {
        $file = $request->file('file');
        $location = 'img';
        $fileName = "profile_" . $request->name . ".png";
        $file->move($location, $fileName);
        return ($location . "/" . $fileName);
    }
}
