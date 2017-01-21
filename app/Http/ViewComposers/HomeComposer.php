<?php

namespace App\Http\ViewComposers;

use App\Models\Categoria;
use Illuminate\View\View;
use DB;

class HomeComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
//    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
//    public function __construct(UserRepository $users)
//    {
//        // Dependencies automatically resolved by service container...
//        $this->users = $users;
//    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
//        $categorias = DB::table('categorias')->select('nombre')->orderBy('nombre','ASC')->get();
//        $subcategorias = DB::table('subcategorias')->select('nombre')->orderBy('nombre','ASC')->get();
        $categorias = Categoria::all();

//        foreach ($categorias as $categoria){
//            foreach ($categoria->subCategories as $subCategory){
//                echo $categoria->nombre . '-' . $subCategory->nombre.' |';
//            }
//        }



        $view->with(compact('categorias'));
    }
}