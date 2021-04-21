<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.v_login');
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
        // dd($request->all());

            // Inputan yg diambil
            $credentials = $request->only('username', 'password');
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);
            if ($credentials == true) {
                $response = Http::post('http://127.0.0.1:8000/api/auth/login', [
                    'username' => $credentials['username'],
                    'password' => $credentials['password'],
                ]);
                $data = json_decode((string) $response->body(), true);
                // dd();
                if ($data['position']['name'] == "Human Resources") {
                    # code...
                    try {
                        $data['access_token'] == true;
                        session()->put('token', $data);
                        session()->push($data['user']['username'], $data['user']['username']);
                        Alert::toast('Slamat Datang', 'success');
                        return redirect()->intended('dashboard');
                    } catch (\Throwable $th) {
                        try {
                            $data['password'] == true;
                            Alert::toast('Username or password salah', 'error');
                            return redirect('login');
                        } catch (\Throwable $th) {
                            $data['error'] == true;
                            return redirect('login');
                        }
                    }
                }
                Alert::toast('you dont have access', 'error');
                return redirect('login');
                // dd($response);
            }
            return redirect('login');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout()
    {
        if (session()->has('token')) {
            session()->flush();
            Alert::toast('Anda telah logout !!!', 'success');
            return redirect('login');
        } else {
            return response('Unauthorized.', 401);
        }
    }
}
