<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/categorybook', function () {
    return view('categorybook');
});

// Route::get('/bookdetail', function () {
//     return view('bookdetail');
// });

Route::get('/publishers', function () {
    return view('publisher');
});

// Route::get('/publishersdetail', function () {
//     return view('publishersdetail');
// });

Route::get('/categorybook/{id}', [PostController::class, "searchcategory"]);

Route::get('/bookdetail/{id}', [PostController::class, "searchbook"]);

Route::get('/publishersdetail/{id}', [PostController::class, "searchpublisher"]);

// Route untuk tampilan Home

// Route::get('/hantubook', function () {
//     return view('Home.hantubook');
// });

// Route::get('/pulangbook', function () {
//     return view('Home.pulangbook');
// });

// Route::get('/amatbook', function () {
//     return view('Home.amatbook');
// });

// Route::get('/youbook', function () {
//     return view('Home.youbook');
// });

// Route untuk tampilan Category Mystery

// Route::get('/pelindungbook', function () {
//     return view('Mystery.pelindungbook');
// });

// Route::get('/thedevilbook', function () {
//     return view('Mystery.thedevilbook');
// });

// Route::get('/janshenbook', function () {
//     return view('Mystery.janshenbook');
// });

// Route untuk tampilan Category Horror

// Route::get('/horrorcat', function () {
//     return view('Horror.horrorcat');
// });

// Route::get('/pestabook', function () {
//     return view('Horror.pestabook');
// });

// Route::get('/lewatbook', function () {
//     return view('Horror.lewatbook');
// });

// Route::get('/desapenaribook', function () {
//     return view('Horror.desapenaribook');
// });

// Route::get('/temanbook', function () {
//     return view('Horror.temanbook');
// });

// Route untuk tampilan Category Science Fiction

// Route::get('/scificat', function () {
//     return view('SciFi.scificat');
// });

// Route::get('/lumpubook', function () {
//     return view('SciFi.lumpubook');
// });

// Route::get('/negeribook', function () {
//     return view('SciFi.negeribook');
// });

// Route::get('/anakpemberanibook', function () {
//     return view('SciFi.anakpemberanibook');
// });

// Route untuk tampilan Category Self Improvement

// Route::get('/selfimpcat', function () {
//     return view('SelfImp.selfimpcat');
// });

// Route::get('/gritbook', function () {
//     return view('SelfImp.gritbook');
// });

// Route::get('/psychologybook', function () {
//     return view('SelfImp.psychologybook');
// });

// Route::get('/atomicbook', function () {
//     return view('SelfImp.atomicbook');
// });

// Route untuk tampilan Publisher

// Route::get('/pustakautamapub', function () {
//     return view('Publisher.pustakautamapub');
// });

// Route::get('/gagasmediapub', function () {
//     return view('Publisher.gagasmediapub');
// });

// Route::get('/elexmediapub', function () {
//     return view('Publisher.elexmediapub');
// });

// Route untuk tampilan Publisher Gramedia Widisarana Indonesia

// Route::get('/limacmbook', function () {
//     return view('Widiasarana.limacmbook');
// });

// Route::get('/segalanyabook', function () {
//     return view('Widiasarana.segalanyabook');
// });

// Route::get('/serdadubook', function () {
//     return view('Widiasarana.serdadubook');
// });

// Route untuk tampilan Publisher Gramedia Pustaka Utama
// (Tidak Route lagi dikarenakan sudah ada sebelumnya)

// Route untuk tampilan Publisher Gagas Media

// Route::get('/jikakitabook', function () {
//     return view('GagasMedia.jikakitabook');
// });

// Route::get('/baiksajabook', function () {
//     return view('GagasMedia.baiksajabook');
// });

// Route::get('/asingbook', function () {
//     return view('GagasMedia.asingbook');
// });

// Route untuk tampilan Publisher Elex Media Komputindo

// Route::get('/stephenhawkingbook', function () {
//     return view('ElexMedia.stephenhawkingbook');
// });

// Route::get('/petualangbook', function () {
//     return view('ElexMedia.petualangbook');
// });

// Route untuk tampilan contact
