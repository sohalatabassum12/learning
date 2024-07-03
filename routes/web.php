<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Models\User;
use App\Models\Address;
use App\Models\Image;
use App\Models\Post;
use App\Models\Product;
use App\Models\Project;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    $user = User::find(1);

    // return $user->images()->create([
    //     'image' => 'test image',
       
    // ]);

    //return $user->posts;
    // return $user->posts()->create([
    //     'title' => 'test title',
    //     'description' => 'test description'
    // ]);

    //return $user->posts()->delete();

    // $post = Post::find(4);
    // //return Post::all();
    // return $post->user->name;


     //return $user->addresses;
    // return $user->addresses()->create([
    //     'adress' => 'test address'
    
    // ]);
    //return $user->addresses();
    //return $user->addresses->adress;


});

Route::get('/belongstomany', function(){
    // Product::create([
    //     'name'=>'keyboard',
    //     'price' => 120
    // ]);

    

    // $user = User::find(1);
    // $product= Product::find(2);
    // $role= Role::find(2);
    //$image=Image::find(1);

    //  $user->image()->create([
    //     'image' => 'test image'
       
    // ]);
   
   // return $user->image;

    //return $user->products;

    //return $user->products()->attach($product);
    //return $user->products()->detach($product);
    //return $user->products()->detach();
    //return $user->products()->sync([2,3]);
    //return $user->products()->syncWithoutDetaching([1,3]);

    //return $product->cartUser;

    //$user->role()->attach($role);

    //return $user->role;

    //return $role->user;

    // return $user->images()->create([
    //     'image' => 'test image',
       
    //]);
   // return $user->image;

//    $project = Project::findOrFail(1);

//     $deployments = $project->deployments;
    //return view('relation', compact('deployments'));
    //return view('relation')->with('deployments', $deployments);
   // return view('relation', ['deployments'=>$deployments]);
});


Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/product/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');
Route::post('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::post('/product/create', [ProductController::class, 'store']);



Route::get('/project', [ProjectController::class, 'index']);
Route::post('/project/create', [ProjectController::class, 'store']);