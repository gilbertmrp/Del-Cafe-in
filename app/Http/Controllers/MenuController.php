<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Day;
use App\Models\MenuType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use DateTime;

class MenuController extends Controller
{

    //For Pelayan
    public function menulist() {
        $menu = Menu::all();
        $days = Day::all();
        return view('pelayan.menu.index', compact('menu','days'));
    }

    //For User
    public function listMenu() {
        $menu = Menu::all();
        $days = Day::all();
        return view('user.list-menu.index', [
            'title' => 'List Menu'
        ],compact('menu','days'));
    }

    public function menuUtama() {
        $menulevels = MenuType::all();
        $days = Day::all();
        return view('pelayan.menu.addmenu', compact('menulevels', 'days'));
    }

    public function level() {
        $levels = Level::all();
        return view('pelayan.menu.addmenu', compact('levels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lauk' => 'required',
            'minuman' => 'required',
            'harga' => 'required',
            'menu_type_id' => 'required',
            'day_id' => 'required',
            'alternatif_1' => 'required'
        ]);

        $newMenu = new Menu();
        $newMenu->lauk = $request->lauk;
        $newMenu->alternatif_1 = $request->alternatif_1;
        $newMenu->alternatif_2 = $request->alternatif_2;
        $newMenu->sayur = $request->sayur;
        $newMenu->minuman = $request->minuman;
        $newMenu->harga = $request->harga;
        $newMenu->menu_type_id = $request->menu_type_id;
        $newMenu->day_id = $request->day_id;


        $newMenu->save();
        return redirect()->route('menu')->with('status', 'Menu berhasil di tambahkan');
    }

    public function edit($id) {
        $data = Menu::find($id);
        $menulevels = MenuType::all();
        $days = Day::all();
        // check 6 hours before
        if($this->getHari(Date::now()) == $data->day->days_name){
            if(time()+21600 > strtotime($data->menuType->menu_time)){
                return redirect()->back()->with('error', 'Sudah melewati batas perubahan menu. Perubahan maksimal 6 jam sebelum sesi makan');
            }
        }
        return view('pelayan.menu.editmenu', compact('data', 'menulevels', 'days'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'lauk' => 'required',
            'sayur' => 'required',
            'minuman' => 'required',
            'alternatif_1' => 'required',
            'menu_type_id' => 'required',
            'day_id' => 'required',
        ]);

        Menu::where('id', $id)->update([
            'lauk' => $request->lauk,
            'sayur' => $request->sayur,
            'minuman' => $request->minuman,
            'alternatif_1' => $request->alternatif_1,
            'alternatif_2' => $request->alternatif_2,
            'menu_type_id' => $request->menu_type_id,
            'day_id' => $request->day_id
        ]);

        return redirect()->route('menu')->with('success', 'Menu dengan id'.$id.' berhasil di ubah');
    }

    public function delete($id) {
        $data = Menu::find($id);
        $data->delete();
        return redirect()->route('menu')->with('success', 'Data berhasil di hapus');
    }

       function getHari($date){
        $day=date_format($date,"l");
        switch ($day) {
         case 'Sunday':
          $hari = 'Minggu';
          break;
         case 'Monday':
          $hari = 'Senin';
          break;
         case 'Tuesday':
          $hari = 'Selasa';
          break;
         case 'Wednesday':
          $hari = 'Rabu';
          break;
         case 'Thursday':
          $hari = 'Kamis';
          break;
         case 'Friday':
          $hari = 'Jumat';
          break;
         case 'Saturday':
          $hari = 'Sabtu';
          break;
         default:
          $hari = 'Tidak ada';
          break;
        }
        return $hari;
       }
}
