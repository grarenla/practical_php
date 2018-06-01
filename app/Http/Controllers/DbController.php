<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoang
 * Date: 5/11/2018
 * Time: 8:31 AM
 */

namespace App\Http\Controllers;


use App\Accounts;

class DbController extends Controller
{
    public function select()
    {
        $acc = Accounts::where('username', 'hoang123')->first();
        return $acc;
    }

    public function insert()
    {
        $acc = new Accounts();
        $acc->username = "hoang123";
        $acc->password = "hoang123";
        $acc->status = 1;
        $acc->save();
        return view('dbview');
    }

    public function update()
    {
        $acc = Accounts::where('username', 'hoang123')->first();
        $acc->username = "hoang";
        $acc->save();
        return $acc;
    }

    public function delete()
    {
        $acc = $this->select();
        $acc->delete();
    }
}