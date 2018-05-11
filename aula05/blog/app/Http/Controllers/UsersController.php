<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Model\User;

class UsersController extends Controller
{
    public function index()
    {
    	// Retornando um array, o Laravel já converte para json
    	$users = User::all();
    	if (!$users) {
    		return response()->json(null, 204);
    	}
    	// response pode manipular o header
    	// 200 é o status code que quero retornar
    	return response()->json([$users], 200);
    }


    // Nome dos métodos é baseado no arquivo de rotas, na função estática Route::resource. As rotas criadas são encontradas graças ao php artisan route:list

    public function show($user)
    {
    	$user = User::find($user);
    	if (!$user) {
    		return response()->json(null, 204);
    	}
    	return response()->json([$user], 200);
    }

    public function store(Request $request)
    {
    	// recebe os dados
    	$data = $request->json()->all();
    	// passa eles para a validação, que então manda para o user

    	$validator = Validator::make($data, [
    			'name'		=> 'required|string|max:255',
    			'email'		=> 'required|string|email|max:255',
    			'password'	=> 'required|min:6'
    		]);

    	$user = new User();
    	$user->fill($data);
    	$user->save();
    }

    public function update(Request $request, $user)
    {
    	$user = User::find($user);
    	$data = $request->json()->all();

    	$validator = Validator::make($data, [
    			'name'		=> 'required|string|max:255',
    			'email'		=> 'required|string|email|max:255',
    			'password'	=> 'required|min:6'
    		]);

    	$user->update($data);
    }

    public function destroy($user)
    {
    	$user = User::find($user);
    	if (!$user) {
    		return response()->json(null, 204);
    	}
    	$user->delete();

    }

    public function posts($user)
    {
        $user = User::find($user);
        if (!$user) {
            return response()->json(null, 204);
        }

        $posts = $user->posts;
        // retorna um json com arquivos válidos
        return response()->json($posts, 200);
    }
}
