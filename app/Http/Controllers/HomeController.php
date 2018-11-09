<?php

namespace App\Http\Controllers;

use App\helpers\ShoppingCart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $cart = new ShoppingCart;
        $cart->addItem('singlet',50,10000);
        $cart->addItem('bags',50,10000);
        $cart->addItem('shoes',100,10000);
        $cart->removeItem('shoes',50,10000);

        dd($cart->items, $cart->netTotal, $cart->deliveryFee, $cart->grossTotal, $cart->checkout(77000000));



        return;



        $sites = [
            [
                'name' => 'Aqua Rapha Investment',
                'url' => 'http://aquaralpha.digitaldreamstudios.net',
                'asset' => 'Aqua_Rapha_Investment_Nigeria.png'
            ], [
                'name' => 'EastChase Aluminium',
                'url' => 'http://www.eastchasealuminium.com.ng/',
                'asset' => 'Eastchase_Aluminium_Products_Limited.jpg'
            ], [
                'name' => 'Frankblaise Automobile Services',
                'url' => 'https://frankblaiseautomobile.com/',
                'asset' => 'Frankblaise_Automobile_Services.png'
            ], [
                'name' => '',
                'url' => '',
                'asset' => 'Industrial_Training_-_Payment.png'
            ], [
                'name' => '',
                'url' => '',
                'asset' => 'MEAN_Stack_BootCamp_-_Registration_Form.png'
            ], [
                'name' => 'Mylelo Jobs',
                'url' => 'https://mylelojobs.com/register.php#main',
                'asset' => 'Mylelo_Jobs.png'
            ], [
                'name' => 'Pustera',
                'url' => 'https://frankblaiseautomobile.com/pustera/',
                'asset' => 'Pustera.png'
            ], [
                'name' => 'Rocana Nigeria',
                'url' => 'http://www.rocananigeria.com/',
                'asset' => 'Rocana_Nigeria.png'
            ], [
                'name' => 'Judan Clothing',
                'url' => 'https://www.digitaldreamstudios.net/judan/',
                'asset' => 'Welcome_to_Judann_clothing.png'
            ], [
                'name' => 'LinkEnroll',
                'url' => 'http://linkenroll.com/join.php',
                'asset' => 'Linkenroll.png'
            ], [
                'name' => 'Neestyne Investments',
                'url' => 'http://neestyne.com/',
                'asset' => 'Neestyne_Investment.png'
            ],
        ];

        return view('welcome', compact('sites'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
