<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 8/28/15
 * Time: 5:42 PM
 */

namespace app\Http\Controllers;


class EstadoservidorController extends Controller
{
    public function __construct(){

    }

    public function index(){
        return view('inspector.index');
    }
}