<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RaportController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PeriodikController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
  return view('welcome');
});

// Autentikasi
Route::get('/', [LoginController::class, 'index'])->name('login-form');
Route::post('/login-process', [LoginController::class, 'processLogin'])->name('login-process');
Route::post('/logoutProcess', [LoginController::class, 'processLogout'])->name('logoutProcess');
Route::get('/register', [RegisterController::class, 'register'])->name('register-form');
Route::post('/register', [RegisterController::class, 'processRegister'])->name('register-process');


// Halaman
Route::middleware(['mustLogin'])->group(function () {
  // Admin
  Route::get('/admins/dashboard_admin', [AdminController::class, 'index'])->name('admin');

  // Dashboard
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/dashboard/edit_identitas/{id}', [DashboardController::class, 'editIdentitas'])->name('editIdentitas');
  Route::put('/dashboard/edit_identitas/{id}', [DashboardController::class, 'updateIdentitas'])->name('updateIdentitas');
  // Siswa
  Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
  Route::get('/siswa/input_siswa', [SiswaController::class, 'formDataSiswa'])->name('formDataSiswa');
  Route::post('/inputDataSiswa', [SiswaController::class, 'inputDataSiswa'])->name('inputDataSiswa');
  Route::get('/siswa/edit_siswa/{id}', [SiswaController::class, 'editDataSiswa'])->name('editDataSiswaForm');
  Route::put('/update_siswa/{id}', [SiswaController::class, 'updateDataSiswa'])->name('updateDataSiswa');
  Route::delete('/hapus_siswa/{id}', [SiswaController::class, 'deleteDataSiswa'])->name('hapusDataSiswa');
  Route::get('/search_siswa', [SiswaController::class, 'searchSiswa'])->name('searchSiswa');
  // Nilai
  Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai');
  Route::get('/nilai/input_nilai', [NilaiController::class, 'formDataNilai'])->name('formDataNilai');
  Route::post('/input_nilai', [NilaiController::class, 'inputNilai'])->name('inputNilai');
  Route::delete('input/delete_nilai/{id}', [NilaiController::class, 'deleteNilai'])->name('deleteNilai');
  // Raport
  Route::get('/raport', [RaportController::class, 'index'])->name('raport');
  Route::post('/raport/input_raport', [RaportController::class, 'inputRaport'])->name('processRaport');
  Route::post('/raport/cetak_raport', [RaportController::class, 'cetakCoverRaportPDF'])->name('cetakCoverRaportPDF');
  Route::post('/raport/cetak_raport', [RaportController::class, 'cetakPDF'])->name('cetakPDF');
  // Kelas
  Route::get('/kelas', [KelasController::class, 'index'])->name('dataKelas');
  Route::post('/inputKelas', [KelasController::class, 'inputKelas'])->name('inputKelas');
  Route::get('/edit_kelas/{id}', [KelasController::class, 'formEditKelas'])->name('formEditKelas');
  Route::put('/editKelas/{id}', [KelasController::class, 'editDataKelas'])->name('editKelas');
  Route::delete('/deleteKelas/{id}', [KelasController::class, 'deleteKelas'])->name('deleteKelas');

  // Periodik
  Route::get('/periodik', [PeriodikController::class, 'index'])->name('periodik');
  Route::get('/periodik/form_input_periodik', [PeriodikController::class, 'formInputPeriodik'])->name('formInputPeriodik');
  Route::post('/periodik/proses_input_periodik', [PeriodikController::class, 'prosesInputPeriodik'])->name('prosesInputPeriodik');
  Route::get('/periodik/edit_periodik/{id}', [PeriodikController::class, 'editPeriodik'])->name('formEditPeriodik');
  Route::put('/periodik/edit_periodik/{id}', [PeriodikController::class, 'prosesEditPeriodik'])->name('prosesEditPeriodik');
  Route::delete('/periodik/delete_periodik/{id}', [PeriodikController::class, 'deletePeriodik'])->name('deletePeriodik');

  // Ekstrakurikuler
  Route::get('/ekstrakurikuler', [EkstrakulikulerController::class, 'index'])->name('ekstrakurikuler');
  Route::get('/ekstrakurikuler/form_input_ekstrakurikuler', [EkstrakulikulerController::class, 'ekstrakulikulerForm'])->name('formInputEkstrakurikuler');
  Route::post('/ekstrakurikuler/proses_input_ekstrakurikuler', [EkstrakulikulerController::class, 'inputEkstrakulikuler'])->name('prosesInputEkstrakurikuler');
  // Route::get('/ekstrakurikuler/edit_ekstrakurikuler/{id}', [EkstrakulikulerController::class, 'editEkstrakulikuler'])->name('formEditEkstrakurikuler');
  // Route::put('/ekstrakurikuler/edit_ekstrakurikuler/{id}', [EkstrakulikulerController::class, 'prosesEditEkstrakulikuler'])->name('prosesEditEkstrakurikuler');
  Route::delete('/ekstrakurikuler/delete_ekstrakurikuler/{id}', [EkstrakulikulerController::class, 'deleteEkstrakulikuler'])->name('deleteEkstrakurikuler');

  // User
  Route::get('/user_profile', [UserController::class, 'index'])->name('profiles');
  Route::get('/user_profile/edit/{id}', [UserController::class, 'editUser'])->name('editUser');
  Route::put('/user_profile/update/{id}', [UserController::class, 'updateUser'])->name('updateUser');
  Route::delete('/user_profile/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

  // PDF Route
  Route::post('generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('generatePDF');

  // Search
  Route::get('/search', [SearchController::class, 'search'])->name('searchData');

  // Tentang Aplikasi
  Route::get('/tentang', [UserController::class, 'aboutApp'])->name('aboutApp');
});
