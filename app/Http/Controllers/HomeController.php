<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use App\Models\User;
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
        // ref https://github.com/barryvdh/laravel-debugbar
        $products = Product::where('is_active', true)->paginate(15); // select * from products where is_active = true offset 0 limit 15

        // select * from (select * from products where is_active = true);
        // select *,(select name from items i where i.product_id = p.id) from products p;
        // select * from transactions where user_id in (select id from users where name like '%fauzi%');

        // TABLE customer: id:1, name:fauzi | 2, bowo | 3, lukas
        // TABLE product: id:1, user_id:2, name:jeruk | 2, 2, kiwi | 3, 1, apel | 4, null, semangka

        // select c.name,p.name from customer c LEFT JOIN product p on c.id = p.user_id;
        // fauzi, apel
        // bowo, kiwi
        // bowo, jeruk
        // lukas, null

        // select c.name,p.name from customer c INNER JOIN product p on c.id = p.user_id;
        // fauzi, apel
        // bowo, kiwi
        // bowo, jeruk

        // select c.name,p.name from customer c RIGHT JOIN p on c.id = p.user_id;
        // fauzi, apel
        // bowo, kiwi
        // bowo, jeruk
        // null, semangka

        // select c.name,p.name from customer c FULL JOIN p on c.id = p.user_id;
        // fauzi, apel
        // bowo, kiwi
        // bowo, jeruk
        // lukas, null
        // null, semangka

        // cobain bot tele

        // $inventories = Inventory::all();
        $inventories = new Inventory();
        $inventories->query();
        $inventories->where('product_id', 1);
        $inventories->where('product_id', 2);
        $inventories->whereOr('product_id', 3);
        $inventories->get();

        $user1 = User::where('username', 'like', '%fauzi%')->first(); // select * from users where username like '%fauzi%' limit 1

        $user2 = User::query()->find(2); // find by id and get 1 row only (not found will return null)

        $user3 = User::find(3); // find by id and get 1 row only (not found will return null)

        return view('home', [
            'title' => 'home',
            'products' => $products,
            'inventories' => $inventories,
            'users' => $users
        ]);
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
        //
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
}
