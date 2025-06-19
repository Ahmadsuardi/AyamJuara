<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function userList()
    {
        $totalPenjual = User::where('role', 'penjual')->count();
        $totalPembeli = User::where('role', 'pembeli')->count();
        $users = User::all();

        return view('admin.user-list', compact('totalPenjual', 'totalPembeli', 'users'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user-list')->with('success', 'Pengguna berhasil dihapus.');
    }

}
