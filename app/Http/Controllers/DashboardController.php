<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductTypesController;
use App\Http\Controllers\DepositsController;
use App\Http\Controllers\GeneticsController;
use App\Http\Controllers\BreedersController;

class DashboardController extends Controller
{
    public function __construct(Request $request)
    {
        $this->title = "INICIO";
        $titles = ['clients' => 'CLIENTES',
                    'profile' => 'PERFÍL',
                    'users' => 'USUARIOS',
                    'products' => 'PRODUCTOS',
                    'sell' => 'VENTA'];
        $url = basename($request->path());
        foreach ($titles as $title => $value) {
			if ($title == $url){
				$this->title = $value;
				break; 
			}
		}
    }
    public function index()
    {
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        return view('dashboard', ['title' => $this->title, 'name' => $name, 'email' => $email]);
    }
    public function users(UsersController $usersController)
    {
        $users = json_decode($usersController->all()->getContent());
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        return view('users', ['title' => $this->title, 'name' => $name, 'email' => $email, 'users' => $users]);
    }
    public function profile()
    {
        $id = Auth::user()->id;
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        return view('profile', ['title' => $this->title, 'id' => $id, 'name' => $name, 'email' => $email]);
    }
    public function statistics()
    {
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        return view('statistics', ['title' => $this->title, 'name' => $name, 'email' => $email]);
    }
    public function sell(ClientsController $clientsController)
    {
        $clients = json_decode($clientsController->all()->getContent());
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        return view('sell', ['title' => $this->title, 'name' => $name, 'email' => $email, 'clients' => collect($clients)]);
    }
    public function clients(ClientsController $clientsController)
    {
        $clients = json_decode($clientsController->all()->getContent());
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        return view('clients', ['title' => $this->title, 'name' => $name, 'email' => $email, 'clients' => collect($clients)]);
    }
    public function products(ClientsController $clientsController, ProductsController $productsController, ProductTypesController $productTypesController, DepositsController $depositsController, GeneticsController $geneticsController, BreedersController $breedersController)
    {
        $clients = json_decode($clientsController->all()->getContent());
        $products = json_decode($productsController->all()->getContent());
        $types = json_decode($productTypesController->all()->getContent());
        $deposits = json_decode($depositsController->all()->getContent());
        $genetics = json_decode($geneticsController->all()->getContent());
        $breeders = json_decode($breedersController->all()->getContent());
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        return view('products', ['title' => $this->title, 'name' => $name, 'email' => $email, 'clients' => collect($clients), 'products' => collect($products), 'types' => collect($types), 'deposits' => collect($deposits), 'genetics' => collect($genetics), 'breeders' => collect($breeders)]);
    }
    //FORMS
    public function frmModClient(Request $request, ClientsController $clientsController, $id){
        $json = json_decode($clientsController->get($id)->getContent());
        return view('frm_mod_client', ['data' => $json->data]);
    } 
    public function frmModProduct(Request $request, ProductTypesController $productTypesController, DepositsController $depositsController, GeneticsController $geneticsController, BreedersController $breedersController, ProductsController $productsController, $id){
        $json = json_decode($productsController->get($id)->getContent());
        $types = json_decode($productTypesController->all()->getContent());
        $deposits = json_decode($depositsController->all()->getContent());
        $genetics = json_decode($geneticsController->all()->getContent());
        $breeders = json_decode($breedersController->all()->getContent());
        return view('frm_mod_product', ['data' => $json->data, 'types' => collect($types), 'deposits' => collect($deposits), 'genetics' => collect($genetics), 'breeders' => collect($breeders)]);
    } 
}