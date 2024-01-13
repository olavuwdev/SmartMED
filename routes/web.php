<?php

use App\Filament\Resources\SpecialtyTypesResource\Pages\EditSpecialtyTypes;
use Illuminate\Support\Facades\Route;
use App\Models\About;
use App\Models\Contact;
use App\Models\Service;
use App\Models\SpecialtyType;
use App\Models\Specialist;
use App\Models\Post;
use App\Models\Channel;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/artigos', function(){


     #insert Contacts
     $contact = Contact::orderByRaw('id DESC')->first();
     $dias = $contact->toArray()["dias"];
     $numero_ctt = $contact->toArray()["numero"];
     $email = $contact->toArray()["email"];

     #Posts
     $posts = Post::orderBy('data', 'DESC')->paginate(2);


   return view('blog', compact('dias', 'numero_ctt', 'email', 'contact', 'posts'));
})->name('blog');


Route::get('/especialista/{id}', function($id){
        $especialista = Specialist::find($id)->toArray();

        $especialidade = SpecialtyType::find($especialista["id_tipo"])->toArray();
        //dd($especialidade);


        return view('especialista', array('especialista'=>$especialista, 'especialidade'=>$especialidade));
})->name('especialista');

Route::get('/', function () {

    #Insert about
    $sobre = About::orderByRaw('id DESC')->first();
    $text_quem_somos = $sobre->toArray()["text_quem_somos"];
    $text_missoes = $sobre->toArray()["text_missoes"];
    $text_visao = $sobre->toArray()["text_visao"];
    $text_valores = $sobre->toArray()["text_valores"];

    #insert Contacts
    $contact = Contact::orderByRaw('id DESC')->first();
    $dias = $contact->toArray()["dias"];
    $numero_ctt = $contact->toArray()["numero"];
    $email = $contact->toArray()["email"];

    #Insert Services
    $service = Service::all();
    $text_service = $service->toArray();
    $middle = intval($service->count() / 2);

    $group1 = $service->slice(0, $middle)->toArray();
    $group2 = $service->slice($middle)->toArray();
    //dd($group1, $group2);


    #Insert SpecialtyType and Speciality
    $especialidade = SpecialtyType::all()->toArray();
    $especialistas = Specialist::with('specialty_type')->get()->groupBy('id_tipo')->toArray();
    //dd($especialistas);

    #Canais e nichos
    $nincho = Channel::all()->toArray();
    //$url = $nincho->toArray()["url"];
    //dd($nincho);

    return view('index', array('text_quem_somos'=>$text_quem_somos,
    'text_missoes'=>$text_missoes, 'text_valores'=>$text_valores, 'text_visao'=> $text_visao,
    'dias'=>$dias, 'numero_ctt'=>$numero_ctt,'email'=>$email, 'contact'=>$contact,
    'service_group1'=> $group1, 'service_group2'=>$group2,'especialidade'=> $especialidade, 'especialistas'=>$especialistas,
    'nincho'=>$nincho,
));
});
