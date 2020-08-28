<?php

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
	$data = DB::table('lineup')->get();
	
	
    $data3 = DB::table('orderticket')
            ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
            ->where(['orderticket.status_orderticket'=>'0'])
            ->get();
	
    foreach($data3 as $data3){
         
        if($data3->status_orderticket == FALSE && date('Y-m-d H:i:s') > $data3->die_orderticket){
            $decrypted = $data3->id_orderticket;
            $id_ticket = $data3->id_ticket;
            $cal = $data3->stok + $data3->jumlah_orderticket;
            
            $datxa = DB::table('ticket')
                    ->where(['id_ticket' => $id_ticket])
                    ->update(['stok'=> $cal]);
            $datxa2 = DB::table('orderticket')
                    ->where(['id_orderticket' => $decrypted])
                    ->update(['status_orderticket'=> '3']);
        }
    }
            
    return view('landing', ['data' => $data]);
})->name('landing');

// Route::get('/user/dash/user', function () {
//     return view('/user/user');
// });


// Route::get('/user/dash/order', function () {
//     return view('/user/ordered');
// });

// Route::get('/user/dash/payment', function () {
//     return view('/user/belumbayar');
// });

// Route::get('/user/dash/wait_confirm', function () {
//     return view('/user/tunggukonfirm');
// });


// Route::get('/user/dash/confirm', function () {
//     return view('/user/terkonfirmasi');
// });

// Route::get('/user/dash/done', function () {
//     return view('/user/selesai');
// });


Route::get('/merchandise', function () {
    $baju = DB::table('merch')->where('kategori_merch', 'BAJU')->get();
    $tote = DB::table('merch')->where('kategori_merch', 'TOTEBAG')->get();
    $bucket = DB::table('merch')->where('kategori_merch', 'BUCKETHAT')->get();
    $kipas = DB::table('merch')->where('kategori_merch', 'KIPAS')->get();
    $sedotan = DB::table('merch')->where('kategori_merch', 'SEDOTAN')->get();
    return view('merchandise2', ['baju' => $baju, 'tote' => $tote, 'bucket' => $bucket, 'kipas' => $kipas, 'sedotan' => $sedotan]);
});
Route::get('/merchandise2', function () {
    $baju = DB::table('merch')->where('kategori_merch', 'BAJU')->get();
    $tote = DB::table('merch')->where('kategori_merch', 'TOTEBAG')->get();
    $bucket = DB::table('merch')->where('kategori_merch', 'BUCKETHAT')->get();
    $kipas = DB::table('merch')->where('kategori_merch', 'KIPAS')->get();
    $sedotan = DB::table('merch')->where('kategori_merch', 'SEDOTAN')->get();
    return view('merchandisec', ['baju' => $baju, 'tote' => $tote, 'bucket' => $bucket, 'kipas' => $kipas, 'sedotan' => $sedotan]);
});
Route::get('/merchandise/{nama_merch}', function($nama_merch){
    $name = str_replace('_',' ', $nama_merch);
    $data = DB::table('merch')->where('nama_merch', $name)->get();
    return view('detail_merchandise', ['data'=>$data,'title'=>$nama_merch]);
})->name('merch_det');


Auth::routes(['verify' => true]);

Route::get('/ticket', function () {
    $data = DB::table('ticket')
            ->orderBy('jenis_ticket', 'ASC')
            ->get();
    $data2 = DB::table('ticket')
            ->where([['akhir_ticket','>',date('Y-m-d')],['status_ticket',1]])
            ->orderBy('jenis_ticket', 'ASC')
            ->get();
    return view('tickets', ['data'=>$data, 'data2'=>$data2]);
});



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/dash', 'HomeController@dash')->name('dash');

Route::post('/ticket','HomeController@ordertik')->name('ordertik');

Route::get('/get_ticket/barcode/{enkrip}','HomeController@get_ticket_barcode')->name('get_ticket_barcode');
Route::get('/checkout/barcode/{enkrip}','HomeController@get_merch_barcode')->name('get_merch_barcode');


Route::get('/checkout/pdf/{enkrip}', 'HomeController@get_merch_pdf')->name('get_merch_pdf');


Route::get('/get_ticket/{id_orderticket}', 'HomeController@idord')->name('idord');

Route::post('/checkout', 'HomeController@ordermerch')->name('ordermerch');
Route::get('/checkout/{id_ordermerch}', 'HomeController@ordermerch_get')->name('ordermerch_get');
Route::post('/get_ticket/cod','HomeController@cod')->name('cod');
Route::post('/checkout/cod','HomeController@cod2')->name('cod2');


Route::post('/get_ticket/confirm_payment','HomeController@upload_bukti')->name('up_bukti');
Route::post('/checkout/confirm_payment','HomeController@upload_bukti_merch')->name('upload_bukti_merch');

Route::group(['middleware'=>'isAdmin'],function(){
    Route::get('admin/dash', 'HomeController@admin_dash')->name('admin_dash');
	Route::get('/admin/merchandise', 'HomeController@merchandise')->name('merchandise');
	Route::get('/admin/merchandise/tambah', 'HomeController@tambah_merchandise')->name('tambah_merchandise');
	Route::post('/admin/merchandise/tambah', 'HomeController@tambah_merchandise_action')->name('tambah_merchandise_action');
	Route::get('/admin/merchandise/edit/{id_merch}', 'HomeController@edit_merchandise')->name('edit_merchandise');
	Route::post('/admin/merchandise/edit/{id_merch}/action', 'HomeController@edit_merchandise_action')->name('edit_merchandise_action');
	Route::get('/admin/merchandise/hapus/{id_merch}', 'HomeController@hapus_merchandise')->name('hapus_merchandise');
	//--------------- ticket ---------------
	Route::get('/admin/ticket', 'HomeController@ticket')->name('ticket');
	Route::get('/admin/ticket/tambah', 'HomeController@tambah_ticket')->name('tambah_ticket');
	Route::post('/admin/ticket/tambah', 'HomeController@tambah_ticket_action')->name('tambah_ticket_action');
	Route::get('/admin/ticket/edit/{id_ticket}', 'HomeController@edit_ticket')->name('edit_ticket');
	Route::post('/admin/ticket/edit/{id_ticket}/action', 'HomeController@edit_ticket_action')->name('tambah_ticket_action');

	Route::get('/admin/ticket/aktifkan/{id_ticket}', 'HomeController@aktifkan_ticket')->name('aktifkan_ticket');
	Route::get('/admin/ticket/tdkaktifkan/{id_ticket}', 'HomeController@tdkaktifkan_ticket')->name('tdkaktifkan_ticket');
	Route::get('/admin/ticket/comingsoon/{id_ticket}', 'HomeController@comingsoon_ticket')->name('comingsoon_ticket');
	
	//confirm ticket
	Route::get('/admin/expired', 'HomeController@expired')->name('expired');
	Route::get('/admin/ticket/belum_bayar', 'HomeController@belum_bayar')->name('belum_bayar');
	Route::get('/admin/confirm_ticket', 'HomeController@confirm_ticket')->name('confirm_ticket');
	Route::get('/admin/confirm_ticket/valid/{id_confirm}/{id_orderticket}','HomeController@confirm_ticket_action')->name('confirm_ticket_action');
	Route::get('/admin/confirm_ticket/tdkvalid/{id_confirm}/{id_orderticket}','HomeController@tdkvalid_ticket_action')->name('tdkvalid_ticket_aksi');
	
	//List valid dan tidak valid Ticket 
	Route::get('/admin/merch/belum_bayar', 'HomeController@belum_bayar2')->name('belum_bayar2');
	Route::get('/admin/confirm_ticket/list', 'HomeController@confirm_ticket_list')->name('confirm_ticket_list');
	Route::get('/admin/confirm_ticket/list/used/ticket', 'HomeController@ticket_used')->name('ticket_used');
	Route::get('/admin/confirm_ticket/list2', 'HomeController@confirm_ticket_list2')->name('confirm_ticket_list2');
	Route::get('/admin/confirm_ticket/list/{id_confirm}/{id_orderticket}/tdkvalid', 'HomeController@tdkvalid_ticket_action')->name('tdkvalid_ticket_action');
	Route::get('/admin/confirm_ticket/list/{id_orderticket}/tdkvalid', 'HomeController@tdkvalid_ticket_action2')->name('tdkvalid_ticket_action2');
	Route::get('/admin/confirm_ticket/list_tdkvalid', 'HomeController@tdkvalid_ticket_list')->name('tdkvalid_ticket_list');
	Route::get('/admin/confirm_ticket/list_tdkvalid/{id_confirm}/{id_orderticket}', 'HomeController@confirm_ticket_action2')->name('valid_ticket_action');
	
	//confirm merch
	Route::get('/admin/expired2', 'HomeController@expired2')->name('expired2');
	Route::get('/admin/confirm_merch', 'HomeController@confirm_merch')->name('confirm_merch');
	Route::get('/admin/confirm_merch/valid/{id_confirm}/{id_ordermerch}','HomeController@confirm_merch_action')->name('valid_merch_action');
	Route::get('/admin/confirm_merch/tdkvalid/{id_confirm}/{id_ordermerch}','HomeController@tdkvalid_merch_action')->name('tdkvalid_merch_action2');
	Route::get('/admin/confirm_merch/list/{id_ordermerch}/tdkvalid', 'HomeController@tdkvalid_merch_action3')->name('tdkvalid_merch_action3');
	
	//List valid dan tidak valid Merchandise || mohon maap nama functionnya bikin pusing
	Route::get('/admin/confirm_merch/list', 'HomeController@confirm_merch_list')->name('confirm_merch_list');
	Route::get('/admin/confirm_merch/list2', 'HomeController@confirm_merch_list2')->name('confirm_merch_list2');
	Route::get('/admin/confirm_merch/list/{id_confirm_merch}/{id_ordermerch}/tdkvalid', 'HomeController@tdkvalid_merch_action')->name('tdkvalid_merch_action');
	Route::get('/admin/confirm_merch/list_tdkvalid', 'HomeController@tdkvalid_merch_list')->name('tdkvalid_merch_list');
	Route::get('/admin/confirm_merch/list_tdkvalid/{id_confirm_merch}/{id_ordermerch}/', 'HomeController@confirm_merch_action')->name('confirm_merch_action');
	
    Route::get('/checker/{enkrip}', 'HomeController@checker')->name('checker');
    Route::get('/checked/{enkrip}', 'HomeController@checked')->name('checked');
	//--------------------------------------
	
    // LINE UP GS
    Route::get('admin/lineup', 'HomeController@lineup')->name('lineup');
    Route::get('admin/lineup/tambah', function(){
        return view('admin.lineup.tambah');
    })->name('lineup_tambah');
    Route::post('admin/lineup/tambah', 'HomeController@lineup_tambah')->name('lineup_store');
    Route::get('admin/lineup/edit/{id}', 'HomeController@lineup_edit')->name('lineup_edit');
    Route::get('admin/lineup/hapus/{id}', 'HomeController@lineup_hapus')->name('lineup_hapus');
    Route::post('admin/lineup/edit', 'HomeController@lineup_edit_act')->name('lineup_edit_act');
    Route::get('admin/scan_barcode','HomeController@get')->name('get');
	
});
