<?php

use App\Http\Controllers\BelgeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EkipController;
use App\Http\Controllers\FotoGaleriController;
use App\Http\Controllers\HizmetController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ProjeController;
use App\Http\Controllers\ReferansController;
use App\Http\Controllers\SayfaController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SoruController;
use App\Http\Controllers\SubeController;
use App\Http\Controllers\UrunController;
use App\Http\Controllers\VideoGaleriController;
use App\Http\Controllers\YoneticiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/genel-ayar', [App\Http\Controllers\GenelAyarController::class, 'index'])->name('genel-ayar');
Route::get('admin/popup', [App\Http\Controllers\AcilirMesajController::class, 'index'])->name('acilir-mesaj');
Route::get('admin/api-ayarlar', [App\Http\Controllers\ApiAyarlarController::class, 'index'])->name('api-ayarlar');
Route::get('admin/iletisim-ayarlari', [App\Http\Controllers\iletisimAyarlarController::class, 'index'])->name('iletisim-ayarlari');
Route::get('admin/sosyal-medya-ayarlari', [App\Http\Controllers\SosyalMedyaController::class, 'index'])->name('sosyal-medya');
Route::get('admin/modul-ayarlari', [App\Http\Controllers\ModulAyarlarController::class, 'index'])->name('modul-ayar');
Route::get('admin/anasayfa-modul-sirasi', [App\Http\Controllers\modulSiraController::class, 'index'])->name('modul-sira');
Route::get('admin/limit-ayarlari', [App\Http\Controllers\limitAyarController::class, 'index'])->name('limit-ayar');
Route::get('admin/bakim-modu', [App\Http\Controllers\bakimModuController::class, 'index'])->name('bakim-modu');
Route::get('admin/mail-ayar', [App\Http\Controllers\MailAyarController::class, 'index'])->name('mail-ayar');
Route::get('admin/sms-ayar', [App\Http\Controllers\SmsAyarController::class, 'index'])->name('sms-ayar');
Route::get('admin/arkaplan-gorselleri', [App\Http\Controllers\ArkaPlanController::class, 'index'])->name('arkaplan-gorselleri');


Route::get('admin/dil-ekle', [App\Http\Controllers\yeniDilEkleController::class, 'index'])->name('dil-ekle');
Route::get('admin/dil-liste', [App\Http\Controllers\dilListeController::class, 'index'])->name('dil-liste');
Route::get('admin/dil-duzenle', [App\Http\Controllers\DilDuzenleController::class, 'index'])->name('dil-duzenle');

Route::get('admin/urun/kategori-liste', [KategoriController::class, 'index'])->name('kategori-listele');
Route::get('admin/urun/kategori-ekle', [KategoriController::class, 'create'])->name('kategori-ekle');
Route::get('admin/kategori-duzenle', [KategoriController::class,'update'])->name('kategori-duzenle');
Route::get('admin/urun-ekle', [UrunController::class, 'create'])->name('urun-ekle');
Route::get('admin/urun-liste', [UrunController::class, 'index'])->name('urun-liste');

Route::get('admin/proje-ekle', [ProjeController::class, 'create'])->name('proje-ekle');
Route::get('admin/proje-liste', [ProjeController::class, 'index'])->name('proje-liste');
Route::get('admin/proje-duzenle', [ProjeController::class, 'update'])->name('proje-duzenle');

Route::get('admin/paket-liste', [PaketController::class, 'index'])->name('paket-liste');
Route::get('admin/paket-ekle', [PaketController::class, 'create'])->name('paket-ekle');
Route::get('admin/paket-duzenle', [PaketController::class, 'update'])->name('paket-duzenle');

Route::get('admin/sayfa-liste', [SayfaController::class, 'index'])->name('sayfa-liste');
Route::get('admin/sayfa-ekle', [SayfaController::class, 'create'])->name('sayfa-ekle');
Route::get('admin/sayfa-duzenle', [SayfaController::class, 'update'])->name('sayfa-duzenle');

Route::get('admin/hizmet-liste', [HizmetController::class, 'index'])->name('hizmet-liste');
Route::get('admin/hizmet-ekle', [HizmetController::class, 'create'])->name('hizmet-ekle');
Route::get('admin/hizmet-duzenle', [HizmetController::class, 'update'])->name('hizmet-duzenle');

Route::get('admin/soru-liste', [SoruController::class, 'index'])->name('soru-liste');
Route::get('admin/soru-ekle', [SoruController::class, 'create'])->name('soru-ekle');
Route::get('admin/soru-duzenle', [SoruController::class, 'update'])->name('soru-duzenle');

Route::get('admin/referans-liste', [ReferansController::class, 'index'])->name('referans-liste');
Route::get('admin/referans-ekle', [ReferansController::class, 'create'])->name('referans-ekle');
Route::get('admin/referans-duzenle', [ReferansController::class, 'update'])->name('referans-duzenle');



Route::get('admin/katalog-liste', [KatalogController::class, 'index'])->name('katalog-liste');
Route::get('admin/katalog-ekle', [KatalogController::class, 'create'])->name('katalog-ekle');
Route::get('admin/katalog-duzenle', [KatalogController::class, 'update'])->name('katalog-duzenle');

Route::get('admin/ekip-liste', [EkipController::class, 'index'])->name('ekip-liste');
Route::get('admin/ekip-ekle', [EkipController::class, 'create'])->name('ekip-ekle');
Route::get('admin/ekip-duzenle', [EkipController::class, 'update'])->name('ekip-duzenle');

Route::get('admin/sube-liste', [SubeController::class, 'index'])->name('sube-liste');
Route::get('admin/sube-ekle', [SubeController::class, 'create'])->name('sube-ekle');
Route::get('admin/sube-duzenle', [SubeController::class, 'update'])->name('sube-duzenle');

Route::get('admin/blog-liste', [BlogController::class, 'index'])->name('blog-liste');
Route::get('admin/blog-ekle', [BlogController::class, 'create'])->name('blog-ekle');
Route::get('admin/blog-duzenle', [BlogController::class, 'update'])->name('blog-duzenle');

Route::get('admin/slider-liste', [SliderController::class, 'index'])->name('slider-liste');
Route::get('admin/slider-ekle', [SliderController::class, 'create'])->name('slider-ekle');
Route::get('admin/slider-duzenle', [SliderController::class, 'update'])->name('slider-duzenle');

Route::get('admin/galeri-liste', [FotoGaleriController::class, 'index'])->name('galeri-liste');
Route::get('admin/galeri-ekle', [FotoGaleriController::class, 'create'])->name('galeri-ekle');
Route::get('admin/galeri-duzenle', [FotoGaleriController::class, 'update'])->name('galeri-duzenle');

Route::get('admin/video-liste', [VideoGaleriController::class, 'index'])->name('video-liste');
Route::get('admin/video-ekle', [VideoGaleriController::class, 'create'])->name('video-ekle');
Route::get('admin/video-duzenle', [VideoGaleriController::class, 'update'])->name('video-duzenle');


Route::get('admin/yonetici-liste', [YoneticiController::class, 'index'])->name('yonetici-liste');
Route::get('admin/yonetici-ekle', [YoneticiController::class, 'create'])->name('yonetici-ekle');
Route::get('admin/yonetici-duzenle', [YoneticiController::class, 'update'])->name('yonetici-duzenle');



//Route::post('belge-ekle', [BelgeController::class, 'store'])->name('belge.store');
//Route::get('admin/belge-ekle', [BelgeController::class, 'create'])->name('belge-ekle');


//Route::get('admin/belge-liste', [BelgeController::class, 'index'])->name('belge-liste');
//Route::get('admin/belge-duzenle/{id}', [BelgeController::class, 'update'])->name('belge-duzenle');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('belge', BelgeController::class);
    Route::resource('kategori', KategoriController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('urun', UrunController::class);
});
Route::delete('/urun/resim-sil/{id}', [UrunController::class, 'deleteImage'])->name('urun.resim-sil');


