<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use PDF;
//model
use App\merch;
use App\ticket;
use App\orderticket;
use App\confirm;
use App\ordermerch;
use App\confirm_merch;
use Illuminate\Support\Facades\Crypt;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function admin_dash()
    {
        $user = DB::table('users')
                ->get();
        $merch = DB::table('merch')
                ->get();
        $ticket = DB::table('ticket')
                ->where('status_ticket','=', 1)
                ->get();
        $ordermerch = DB::table('ordermerch')
                ->where('status_ordermerch','=', 1)
                ->get();
        $orderticket = DB::table('orderticket')
                ->where('status_orderticket','=', 1)
                ->get();
        return view('admin.admin_dash',[
            'user'=>$user,
            'merch'=>$merch,
            'ticket'=>$ticket,
            'ordermerch'=>$ordermerch,
            'orderticket'=>$orderticket
        ]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function generateRandomString($length = 26) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    
    public function ordertik(Request $req)
    {
            if(Auth::user()->isAdmin == TRUE){
                return abort(404);
            }
        $id_ticket = $req->G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH;
        
        $data = DB::table('ticket')
                    ->where(['id_ticket'=>$id_ticket])
                    ->first();
            
            if($req->qty < 1 OR $req->qty > $data->stok OR empty($data->stok) OR $data->stok < 1 OR $req->qty > 3){
                return back();
            }
            
        // VALIDASI JUMLAH TIKET //
            $checking = DB::table('orderticket')->where('id_users',Auth::user()->id_users)->get();
            $jummlah = 0;
            if(!empty($checking)){
                foreach($checking as $c){
                    $jummlah = $jummlah + $c->jumlah_orderticket;
                }
                $jummlah = $jummlah + $req->qty;
            }
            if($jummlah > 3){
                return redirect('/user/dash')->with('eror','Maaf, jumlah tiket yang anda pesan lebih dari 3!');
            }
        // END VALIDASI //
        
            $random = rand(1,999);
            
            $random_orderticket = $this->generateRandomString();
            
            $orderticket = new orderticket;
            $orderticket->id_orderticket = $random_orderticket; 
            $orderticket->id_users = Auth::user()->id_users;
            $orderticket->id_ticket = $id_ticket;
            $orderticket->die_orderticket = date("Y-m-d H:i:s", strtotime("+ 1 hour"));
            $orderticket->tgl_orderticket = date("Y-m-d");
            $orderticket->kode_orderticket = $random;
            $orderticket->jumlah_orderticket = $req->qty;
            $orderticket->status_orderticket = 0;
            
            $cal = $data->stok - $req->qty;
            if($orderticket->save()){
                
                DB::table('ticket')
                      ->where('id_ticket',$id_ticket)
                      ->update(['stok'=>$cal]);
                
                // $orderticket = DB::table('orderticket')->where([['id_orderticket','=',$orderticket->id_orderticket],['id_users','=',Auth::user()->id_users],['id_ticket','=',$id_ticket]])->first();
                $orderticket = DB::table('orderticket')->where(['id_users'=>Auth::user()->id_users, 'id_orderticket' => $random_orderticket])->get();
                
                // return $random_orderticket;
                return redirect('/get_ticket/'.$random_orderticket);
            }
        return redirect('/user/dash')->with('eror','Tiket tidak berhasil di tambah!');

    }
    
    public function ordermerch(Request $req){
            if(Auth::user()->isAdmin == TRUE){
                return abort(404);
            }
        $id_merchen = $req->e92363553640b53bb03c9514cb27edea;
        
        $data = DB::table('merch')->where(['id_merch'=>$id_merchen])->first();
        if($req->qty < 1 OR empty($req->qty)){
            return back();
        }
        $random = rand(1,999);
        $random_ordermerch = $this->generateRandomString();
        $ordermerch = new ordermerch();
        $ordermerch->id_ordermerch = $random_ordermerch;
        $ordermerch->id_users = Auth::user()->id_users;
        $ordermerch->id_merch = $id_merchen;
        $ordermerch->jumlah_ordermerch = $req->qty;
        if($data->kategori_merch == "BAJU"){
        $ordermerch->ukuran_ordermerch = $req->ukuran;
        }
        $ordermerch->kode_ordermerch = $random;
        $ordermerch->die_ordermerch = date("Y-m-d H:i:s", strtotime("+ 1 hour"));
        $ordermerch->tgl_ordermerch = date("Y-m-d");
        $ordermerch->status_ordermerch = 0;
        if($ordermerch->save()){
            $ordermerch = DB::table('ordermerch')->where(['id_users'=>Auth::user()->id_users, 'id_ordermerch' => $random_ordermerch])->get();
            return redirect(route('ordermerch_get', $random_ordermerch));
        }
            
    }
    
    public function ordermerch_get($id_ordermerch){
        $data = DB::table('ordermerch')
            ->join('merch','ordermerch.id_merch','merch.id_merch')
            ->where(['ordermerch.id_users'=>Auth::user()->id_users,'ordermerch.id_ordermerch'=>$id_ordermerch,'ordermerch.status_ordermerch'=>false])
            ->get();
        
        // print_r($data);
        if(count($data) > 0){
            $output_data = DB::table('ordermerch')
                            ->join('merch','ordermerch.id_merch','merch.id_merch')
                            ->where(['id_users'=>Auth::user()->id_users, 'id_ordermerch' => $id_ordermerch])
                            ->first();
                    
            return view('user.get_mech',['payment'=>$output_data]);
        }
    
        return redirect('/user/dash'); 
    }
    
    public function upload_bukti(Request $req)
    {
        $this->validate($req,[
            'img'=>'required|image|mimes:jpg,jpeg,png',
            'pengirim'=>'required',
        ]);

        // $data = DB::table('confirm_payment')->where([['id_ticket','=',$req->G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH],['id_users','=',Auth::user()->id_users]])->get();

        $data = DB::table('confirm_payment')
                ->join('orderticket','confirm_payment.id_orderticket', 'orderticket.id_orderticket')
                ->join('ticket', 'orderticket.id_ticket', 'ticket.id_ticket')
                ->join('users', 'orderticket.id_users', 'users.id_users')
                ->where(['confirm_payment.id_users'=>Auth::user()->id_users,'confirm_payment.id_orderticket'=>$req->G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH,'confirm_payment.id_ticket'=>$req->id_ticket,'confirm_payment.status_confirm'=>'uncheck'])
                ->get();
        if(count($data) > 0){
            return back()->with('sukses','Anda telah mengupload bukti pembayaran! Silahkan tunggu 1x24 jam atau hubungi admin!');
        }else{

            $new = new confirm;
            $new->id_users = Auth::user()->id_users;
            $new->id_orderticket = $req->G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH;
            $new->id_ticket = $req->id_ticket;
            $new->pengirim_confirm = $req->pengirim;
    
            $image = $req->img;
            $name = Auth::user()->id_users.'_'.$req->pengirim.'_'.date('Y-m-d H:i:s').'.'.$image->getClientOriginalExtension();
            $lokasi = public_path('images/proof');
            if($image->move($lokasi,$name)){
                $new->bukti_confirm = $name;
                if($new->save()){
                    return back()->with('sukses','Berhasil mengupload bukti, Silahkan tunggu 1x24 jam atau hubungi admin!');
                }
            }
            return back()->with('eror','Gagal mengupload bukti! Silahkan coba beberapa saat lagi!');
        }
    }
    
    
    public function upload_bukti_merch(Request $req){
        $this->validate($req,[
            'img'=>'required|image|mimes:jpg,jpeg,png',
            'pengirim'=>'required',
        ]);

        // $data = DB::table('confirm_payment')->where([['id_ticket','=',$req->G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH],['id_users','=',Auth::user()->id_users]])->get();

        $data = DB::table('confirm_merch')
                ->join('ordermerch','confirm_merch.id_ordermerch', 'ordermerch.id_ordermerch')
                ->join('merch', 'ordermerch.id_merch', 'merch.id_merch')
                ->join('users', 'ordermerch.id_users', 'users.id_users')
                ->where(['confirm_merch.id_users'=>Auth::user()->id_users,'confirm_merch.id_ordermerch'=>$req->G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH,'confirm_merch.id_merch'=>$req->id_ticket,'confirm_merch.status_confirm'=>'uncheck'])
                ->get();
        if(count($data) > 0){
            return back()->with('sukses','Anda telah mengupload bukti pembayaran! Silahkan tunggu 1x24 jam atau hubungi admin!');
        }

        $new = new confirm_merch;
        $new->id_users = Auth::user()->id_users;
        $new->id_ordermerch = $req->G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH;
        $new->id_merch = $req->id_merch;
        $new->pengirim_confirm = $req->pengirim;

        $image = $req->img;
        $name = Auth::user()->id_users.'_'.$req->pengirim.'_'.date('Y-m-d H:i:s').'.'.$image->getClientOriginalExtension();
        $lokasi = public_path('images/proof');
        if($image->move($lokasi,$name)){
            $new->bukti_confirm = $name;
            if($new->save()){
                return back()->with('sukses','Berhasil mengupload bukti, Silahkan tunggu 1x24 jam atau hubungi admin!');
            }
        }
        return back()->with('eror','Gagal mengupload bukti! Silahkan coba beberapa saat lagi!');
    }
    
    public function dash(){
        $data = DB::table('orderticket')
                ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                ->where('orderticket.id_users',Auth::user()->id_users)
                ->get();
                
        $data2 = DB::table('ordermerch')
                ->join('merch','ordermerch.id_merch','merch.id_merch')
                ->where('ordermerch.id_users',Auth::user()->id_users)
                ->get();
                
                
        $data4 = DB::table('ordermerch')
                ->join('merch','ordermerch.id_merch','merch.id_merch')
                ->where(['ordermerch.status_ordermerch'=>'0'])
                ->get();
                
        foreach($data4 as $data4){
                
             
            if($data4->status_ordermerch == FALSE && date('Y-m-d H:i:s') > $data4->die_ordermerch){
                $decrypted = $data4->id_ordermerch;
                $id_ticket = $data4->id_merch;
                
                $datxa2 = DB::table('ordermerch')
                        ->where(['id_ordermerch' => $decrypted])
                        ->update(['status_ordermerch'=> '3']);
            }
        }
                
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
                
        $data5 = DB::table('confirm_payment')
                ->join('orderticket','confirm_payment.id_orderticket', 'orderticket.id_orderticket')
                ->join('ticket', 'confirm_payment.id_ticket', 'ticket.id_ticket')
                ->join('users', 'confirm_payment.id_users', 'users.id_users')
                ->where(['confirm_payment.id_users'=>Auth::user()->id_users])
                ->get();
        return view('user/dash',['data'=>$data, 'data2'=>$data2, 'data5'=>$data5]);
    }
    
    //////////////////
    //   Merchandise  
    /////////////////
    
    public function merchandise()
    {
        $merchan = DB::table('merch')
            ->get();
        return view('admin.merchandise',['merchan'=>$merchan]);
    }
    public function tambah_merchandise()
    {
        return view('admin.tambah_merchandise');
    }
    public function tambah_merchandise_action(Request $req)
    {
        $this->validate($req,[
            'img'=> 'image|mimes:png,jpg,jpeg',
        ]);

        $img = $req->img;

        $name = time().'.'.$img->getClientOriginalExtension();
        $lokasi = public_path('images/merch');
        // $img->move($lokasi,$name);

        if($img->move($lokasi,$name)){
            $merch = new merch;
            $merch->nama_merch = $req->nama_merch;
            $merch->harga_merch = $req->harga_merch;
            $merch->kategori_merch  = $req->kategori_merch;
            $merch->foto_merch = $name;
            $merch->desc_merch = $req->desc;

            if($merch->save()){
                return redirect('/admin/merchandise/')->with('sukses','Berhasil Menambah Merchandise!');
            }
        }
        return back()->with('eror','Gagal Menambah Merchandise!');
    }
    public function edit_merchandise($id_merch)
    {   
        $data = DB::table('merch')
                ->where('id_merch',$id_merch)
                ->first();
        return view('admin.edit_merchandise',['merch'=>$data]);
    }
    
    public function hapus_merchandise($id_merch){
        DB::table('merch')->where('id_merch', $id_merch)->delete();
        return redirect(route('merchandise'))->with('sukses', 'Berhasil Menghapus Merchandise!');
    }
    
    public function edit_merchandise_action($id_merch, Request $req)
    {
        
        if($req->img){
            $image = $req->img;
            $name = time().'.'. $image->getClientOriginalExtension();
            $lokasi = public_path('images/merch');
            $image->move($lokasi,$name);
            
            DB::table('merch')->where('id_merch',$req->id_merch)->update([
                'id_merch' => $req->id_merch,   
                'nama_merch' => $req->nama_merch,   
                'harga_merch' => $req->harga_merch,
                'foto_merch' => $name,
                'kategori_merch' => $req->kategori_merch
            ]);
        }else{
            DB::table('merch')->where('id_merch',$req->id_merch)->update([
                'id_merch' => $req->id_merch,   
                'nama_merch' => $req->nama_merch,   
                'harga_merch' => $req->harga_merch,
                'kategori_merch' => $req->kategori_merch
            ]);   
        }
        // if(Update()){
            return redirect('/admin/merchandise/')->with('sukses','Berhasil Mengedit Merchandise!');
        // }

        // return redirect('/user/data_player/{id_teams}')->with('eror','Gagal update!');
    }
    
    /**
    *-------------------------------
    *Ticket
    *-------------------------------
    *
    **/
    public function ticket()
    {
        $ticket = DB::table('ticket')
            ->get();
        return view('admin.ticket',['ticket'=>$ticket]);
    }
    public function tambah_ticket()
    {
        return view('admin.tambah_ticket');
    }
    public function tambah_ticket_action(Request $req)
    {
        $merch = new ticket;
        $merch->jenis_ticket = $req->jenis_ticket;
        $merch->harga_ticket = $req->harga_ticket;
        $merch->status_ticket = 1;
        //$merch->stock_ticket = $req->stock_ticket;
        $merch->akhir_ticket = $req->akhir_ticket;

        if($merch->save()){
            return redirect('/admin/ticket/')->with('sukses','Berhasil Menambah Ticket!');
        }
        return back()->with('eror','Gagal Menambah Ticket!');
    }
    public function edit_ticket($id_ticket)
    {   
        $data = DB::table('ticket')
                ->where('id_ticket',$id_ticket)
                ->first();
        return view('admin.edit_ticket',['ticket'=>$data]);
    }
    public function edit_ticket_action($id_ticket, Request $req)
    {            
        DB::table('ticket')->where('id_ticket',$req->id_ticket)->update([
            'id_ticket' => $req->id_ticket,   
            'jenis_ticket' => $req->jenis_ticket,   
            'harga_ticket' => $req->harga_ticket,
            //'stock_ticket' => $req->stock_ticket,
            'akhir_ticket' => $req->akhir_ticket
        ]);
        return redirect('/admin/ticket/')->with('sukses','Berhasil Update Ticket!');
    }
    public function aktifkan_ticket($id_ticket, Request $req)
    {            
        DB::table('ticket')->where('id_ticket',$req->id_ticket)->update([
            'id_ticket' => $req->id_ticket,
            'status_ticket' => 1
        ]);
        return redirect('/admin/ticket/')->with('suksesAktf','Berhasil mengaktifkan ticket!');
    }
    public function tdkaktifkan_ticket($id_ticket, Request $req)
    {            
        DB::table('ticket')->where('id_ticket',$req->id_ticket)->update([
            'id_ticket' => $req->id_ticket,
            'status_ticket' => 0
        ]);
        return redirect('/admin/ticket/')->with('suksesTdkAktf','Berhasil Nonaktifkan ticket!');
    }
    public function comingsoon_ticket($id_ticket, Request $req)
    {            
        DB::table('ticket')->where('id_ticket',$req->id_ticket)->update([
            'id_ticket' => $req->id_ticket,
            'status_ticket' => 2
        ]);
        return redirect('/admin/ticket/')->with('suksesAktf','Berhasil Mengcoming soon kan ticket!');
    }
    
    /**
    *-------------------------------
    *Confirm payment ticket 
    *-------------------------------
    *
    **/
    public function confirm_ticket()
    {
        $data = DB::table('confirm_payment')
                ->where([
                    'confirm_payment.status_confirm'=>'uncheck',
                ])
                ->join('ticket','confirm_payment.id_ticket','ticket.id_ticket')
                ->join('users','confirm_payment.id_users','users.id_users')
                ->join('orderticket','confirm_payment.id_orderticket','orderticket.id_orderticket')
                ->get();
        return view('admin.confirm_page',['prioritas'=>$data]);
    }
    
    public function confirm_ticket_action($id_confirm,$id_orderticket)
    {
        $konfirmasi_payment = confirm::find($id_confirm);
        $konfirmasi_payment->status_confirm = 'valid';
        
        $data = DB::table('orderticket')
                ->where('orderticket.id_orderticket',$id_orderticket)
                ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                ->join('users','orderticket.id_users','users.id_users')
                ->first();
        
        $id_ticket = $data->id_ticket;
                
        // $cal = $data->stok - $data->jumlah_orderticket;
        
        $sticket = ticket::find($id_ticket);
        // $sticket->stok = $cal;
        

        $pendaftaran = orderticket::find($id_orderticket);
        $pendaftaran->status_orderticket = TRUE;
        $pendaftaran->status_orderticket = TRUE;
        if($konfirmasi_payment->save()){
            if($pendaftaran->save()){
                if($sticket->save()){
                    return back()->with('sukses', 'Berhasil Melakukan Feedback!');
                }
            }
        }

        return back();
    }
    
    public function confirm_ticket_action2($id_confirm,$id_orderticket)
    {
        $konfirmasi_payment = confirm::find($id_confirm);
        $konfirmasi_payment->status_confirm = 'valid';
        
        $data = DB::table('orderticket')
                ->where('orderticket.id_orderticket',$id_orderticket)
                ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                ->join('users','orderticket.id_users','users.id_users')
                ->first();
        
        $id_ticket = $data->id_ticket;
                
        $cal = $data->stok - $data->jumlah_orderticket;
        
        $sticket = ticket::find($id_ticket);
        $sticket->stok = $cal;
        

        $pendaftaran = orderticket::find($id_orderticket);
        $pendaftaran->status_orderticket = TRUE;
        $pendaftaran->status_orderticket = TRUE;
        if($konfirmasi_payment->save()){
            if($pendaftaran->save()){
                if($sticket->save()){
                    return back()->with('sukses', 'Berhasil Melakukan Feedback!');
                }
            }
        }

        return back();
    }
    
    
    public function belum_bayar()
    {
        $data = DB::table('orderticket')
                ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                ->join('users','orderticket.id_users','users.id_users')
                ->where(['status_orderticket'=>'0'])
                ->get();
        return view('admin.list_page_ticket_belumbayar',['prioritas'=>$data]);
    }
    
    public function belum_bayar2()
    {
        $data = DB::table('ordermerch')
                ->join('merch','ordermerch.id_merch','merch.id_merch')
                ->join('users','ordermerch.id_users','users.id_users')
                ->where(['status_ordermerch'=>'0'])
                ->get();
        return view('admin.list_page_merch_belumbayar',['prioritas'=>$data]);
    }
    
    public function expired()
    {
        $data = DB::table('orderticket')
                ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                ->join('users','orderticket.id_users','users.id_users')
                ->where(['status_orderticket'=>'3'])
                ->get();
        return view('admin.list_page_ticket_expired',['prioritas'=>$data]);
    }
    
    public function confirm_ticket_list()
    {
        $data = DB::table('confirm_payment')
                ->where([
                    'confirm_payment.status_confirm'=>'valid',
                    'orderticket.status_orderticket'=>'1'
                ])
                ->join('ticket','confirm_payment.id_ticket','ticket.id_ticket')
                ->join('users','confirm_payment.id_users','users.id_users')
                ->join('orderticket','confirm_payment.id_orderticket','orderticket.id_orderticket')
                // ->orderBy('updated_at','desc')
                ->get();
        return view('admin.list_page_ticket',['prioritas'=>$data]);
    }
    
    public function confirm_ticket_list2()
    {
        $data = DB::table('confirm_payment')
                ->where([
                    'confirm_payment.status_confirm'=>'valid',
                    'orderticket.status_orderticket'=>'1'
                ])
                ->join('ticket','confirm_payment.id_ticket','ticket.id_ticket')
                ->join('users','confirm_payment.id_users','users.id_users')
                ->join('orderticket','confirm_payment.id_orderticket','orderticket.id_orderticket')
                // ->orderBy('updated_at','desc')
                ->get();
        return view('admin.list_page_ticket2',['prioritas'=>$data]);
    }
    
    //Action tidak valid ticket
    public function tdkvalid_ticket_action2($id_orderticket)
    {
        
        $data = DB::table('orderticket')
                ->where('orderticket.id_orderticket',$id_orderticket)
                ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                ->join('users','orderticket.id_users','users.id_users')
                ->first();
        
        $id_ticket = $data->id_ticket;
                
        $cal = $data->stok + $data->jumlah_orderticket;
        
        $sticket = ticket::find($id_ticket);
        $sticket->stok = $cal;

        $pendaftaran = orderticket::find($id_orderticket);
        $pendaftaran->status_orderticket = 2;
        if($pendaftaran->save()){
            if($sticket->save()){
                return back()->with('sukses', 'Berhasil Melakukan Feedback!');
            }
        }

        return back();
    }
    public function tdkvalid_ticket_action($id_confirm,$id_orderticket)
    {
        $konfirmasi_payment = confirm::find($id_confirm);
        $konfirmasi_payment->status_confirm = 'invalid';
        
        $data = DB::table('orderticket')
                ->where('orderticket.id_orderticket',$id_orderticket)
                ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                ->join('users','orderticket.id_users','users.id_users')
                ->first();
        
        $id_ticket = $data->id_ticket;
                
        $cal = $data->stok + $data->jumlah_orderticket;
        
        $sticket = ticket::find($id_ticket);
        $sticket->stok = $cal;

        $pendaftaran = orderticket::find($id_orderticket);
        $pendaftaran->status_orderticket = 2;
        if($konfirmasi_payment->save()){
            if($pendaftaran->save()){
                if($sticket->save()){
                    return back()->with('sukses', 'Berhasil Melakukan Feedback!');
                }
            }
        }

        return back();
    }
    
    public function tdkvalid_ticket_list()
    {
        $data = DB::table('confirm_payment')
                ->where([
                    'confirm_payment.status_confirm'=>'invalid',
                ])
                ->join('ticket','confirm_payment.id_ticket','ticket.id_ticket')
                ->join('users','confirm_payment.id_users','users.id_users')
                ->join('orderticket','confirm_payment.id_orderticket','orderticket.id_orderticket')
                ->get();
        $data2 = DB::table('orderticket')
                ->where([
                    'orderticket.status_orderticket'=> '2',
                ])
                ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                ->join('users','orderticket.id_users','users.id_users')
                ->get();
        return view('admin.list_tdkvalid_ticket',['prioritas'=>$data, 'data'=>$data2]);
    }
    
    /**
    *-------------------------------
    *Confirm payment merch 
    *-------------------------------
    *
    **/
    
    public function expired2()
    {
        $data = DB::table('ordermerch')
                ->join('merch','ordermerch.id_merch','merch.id_merch')
                ->join('users','ordermerch.id_users','users.id_users')
                ->where(['status_ordermerch'=>'3'])
                ->get();
        return view('admin.list_page_merch_expired',['prioritas'=>$data]);
    }
    
    
    public function confirm_merch()
    {
        $data = DB::table('confirm_merch')
                ->where([
                    'confirm_merch.status_confirm'=>'uncheck',
                ])
                ->join('merch','confirm_merch.id_merch','merch.id_merch')
                ->join('users','confirm_merch.id_users','users.id_users')
                ->join('ordermerch','confirm_merch.id_ordermerch','ordermerch.id_ordermerch')
                ->get();
        return view('admin.confirm_page_merch',['prioritas'=>$data]);
    }
    
    //Action valid merch
    public function confirm_merch_action($id_confirm,$id_ordermerch)
    {
        $konfirmasi_payment = confirm_merch::find($id_confirm);
        $konfirmasi_payment->status_confirm = 'valid';
        
        $data = DB::table('ordermerch')
                ->where('ordermerch.id_ordermerch',$id_ordermerch)
                ->join('merch','ordermerch.id_merch','merch.id_merch')
                ->join('users','ordermerch.id_users','users.id_users')
                ->first();

        $order = ordermerch::find($id_ordermerch);
        $order->status_ordermerch = TRUE;
        if($konfirmasi_payment->save()){
            if($order->save()){
                return back()->with('sukses', 'Berhasil Melakukan Feedback!');
            }
        }

        return back();
    }
    
    
    public function confirm_merch_list()
    {
        $data = DB::table('confirm_merch')
                ->where([
                    'confirm_merch.status_confirm'=>'valid',
                ])
                ->join('merch','confirm_merch.id_merch','merch.id_merch')
                ->join('users','confirm_merch.id_users','users.id_users')
                ->join('ordermerch','confirm_merch.id_ordermerch','ordermerch.id_ordermerch')
                // ->orderBy('updated_at','desc')
                ->get();
        return view('admin.list_page_merch',['prioritas'=>$data]);
    }
    public function confirm_merch_list2()
    {
        $data = DB::table('confirm_merch')
                ->where([
                    'confirm_merch.status_confirm'=>'valid',
                ])
                ->join('merch','confirm_merch.id_merch','merch.id_merch')
                ->join('users','confirm_merch.id_users','users.id_users')
                ->join('ordermerch','confirm_merch.id_ordermerch','ordermerch.id_ordermerch')
                // ->orderBy('updated_at','desc')
                ->get();
        return view('admin.list_page_merch2',['prioritas'=>$data]);
    }
    
    //Action tidak valid merch
    public function tdkvalid_merch_action($id_confirm,$id_ordermerch)
    {
        $konfirmasi_payment = confirm_merch::find($id_confirm);
        $konfirmasi_payment->status_confirm = 'invalid';
        
        $data = DB::table('ordermerch')
                ->where('ordermerch.id_ordermerch',$id_ordermerch)
                ->join('merch','ordermerch.id_merch','merch.id_merch')
                ->join('users','ordermerch.id_users','users.id_users')
                ->first();

        $order = ordermerch::find($id_ordermerch);
        $order->status_ordermerch = 2;
        if($konfirmasi_payment->save()){
            if($order->save()){
                return back()->with('sukses', 'Berhasil Melakukan Feedback!');
            }
        }

        return back();
    }
    public function tdkvalid_merch_action3($id_ordermerch)
    {
        
        $data = DB::table('ordermerch')
                ->where('ordermerch.id_ordermerch',$id_ordermerch)
                ->join('merch','ordermerch.id_merch','merch.id_merch')
                ->join('users','ordermerch.id_users','users.id_users')
                ->first();
                
        $pendaftaran = ordermerch::find($id_ordermerch);
        $pendaftaran->status_ordermerch = 2;
        if($pendaftaran->save()){
                return back()->with('sukses', 'Berhasil Melakukan Feedback!');
            
        }

        return back();
    }
    
    public function tdkvalid_merch_list()
    {
        $data = DB::table('confirm_merch')
                ->where([
                    'confirm_merch.status_confirm'=>'invalid',
                ])
                ->join('merch','confirm_merch.id_merch','merch.id_merch')
                ->join('users','confirm_merch.id_users','users.id_users')
                ->join('ordermerch','confirm_merch.id_ordermerch','ordermerch.id_ordermerch')
                // ->orderBy('updated_at','desc')
                ->get();
                
        $data2 = DB::table('ordermerch')
                ->where([
                    'ordermerch.status_ordermerch'=> '2',
                ])
                ->join('merch','ordermerch.id_merch','merch.id_merch')
                ->join('users','ordermerch.id_users','users.id_users')
                ->get();
        return view('admin.list_tdkvalid_merch',['prioritas'=>$data, 'data'=>$data2]);
    }
    
    public function checker($enkrip)
    {
        
        $decrypted = base64_decode($enkrip);
        $decrypted1 = base64_decode($decrypted);
        // $decrypted = Crypt::decryptString($enkrip);       
        // $decrypted1 = Crypt::decryptString($decrypted);

        $data = DB::table('orderticket')
            ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
            ->join('users','orderticket.id_users','users.id_users')
            ->where(['orderticket.id_orderticket'=>$decrypted1,'orderticket.used_orderticket'=>0])
            ->first();
            
        $useded = DB::table('orderticket')
            ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
            ->join('users','orderticket.id_users','users.id_users')
            ->where(['orderticket.id_orderticket'=>$decrypted1,'orderticket.used_orderticket'=>1])
            ->first();
                
        if (Auth::user()->isAdmin == TRUE AND $data) {
            
            $used = DB::table('orderticket')
                ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                ->join('users','orderticket.id_users','users.id_users')
                ->where('orderticket.id_orderticket',$decrypted1)
                ->update([
                    'used_orderticket' => TRUE,
                    'orderticket.updated_at' => date('Y-m-d H:i:s')
                ]);
            return view('admin.checker',['data'=>$data]);
        
            
        }elseif($useded){
            return abort(419);
        }
        
        
        
        return abort(404);
        
    }
    public function checked($enkrip)
    {
        $decrypted = base64_decode($enkrip);
        $decrypted1 = base64_decode($decrypted);
        // $decrypted = Crypt::decryptString($enkrip);       
        // $decrypted1 = Crypt::decryptString($decrypted);

        $data = DB::table('ordermerch')
            ->join('merch','ordermerch.id_merch','merch.id_merch')
            ->join('users','ordermerch.id_users','users.id_users')
            ->where(['ordermerch.id_ordermerch'=>$decrypted1,'ordermerch.used_ordermerch'=>0])
            ->first();
            
        $useded = DB::table('ordermerch')
            ->join('merch','ordermerch.id_merch','merch.id_merch')
            ->join('users','ordermerch.id_users','users.id_users')
            ->where(['ordermerch.id_ordermerch'=>$decrypted1,'ordermerch.used_ordermerch'=>1])
            ->first();
                
        if (Auth::user()->isAdmin == TRUE AND $data) {
            
            $used = DB::table('ordermerch')
                ->join('merch','ordermerch.id_merch','merch.id_merch')
                ->join('users','ordermerch.id_users','users.id_users')
                ->where('ordermerch.id_ordermerch',$decrypted1)
                ->update([
                    'used_ordermerch' => TRUE,
                    'ordermerch.updated_at' => date('Y-m-d H:i:s')
                ]);
            return view('admin.checked',['data'=>$data]);
        
            
        }elseif($useded){
            return abort(419);
        }
        
        
        
        return abort(404);
        
    }
    
    public function get_ticket_barcode($enkrip)
    {
        $decrypted = base64_decode($enkrip);
        // $decrypted = Crypt::decryptString($enkrip);     
        
        $data = DB::table('orderticket')
                ->join('ticket','orderticket.id_ticket', 'ticket.id_ticket')
                ->join('users','orderticket.id_users', 'users.id_users')
                ->where(['orderticket.id_users'=>Auth::user()->id_users,'orderticket.id_orderticket'=>$decrypted])
                ->first();
                
        $data2 = DB::table('orderticket')
                ->join('ticket','orderticket.id_ticket', 'ticket.id_ticket')
                ->where(['orderticket.id_users'=>Auth::user()->id_users,'orderticket.id_orderticket'=>$decrypted])
                ->first();
        
        if(!empty($data) OR !empty($data2)){
            return view('user.get_ticket_barcode',['data'=>$data,'data2'=>$data2]);
        }
        
        return abort(404);
                
    }
    
    public function get_merch_barcode($enkrip)
    {
        $decrypted = base64_decode($enkrip);
        // $decrypted = Crypt::decryptString($enkrip);     
        
        $data = DB::table('ordermerch')
                ->join('merch','ordermerch.id_merch', 'merch.id_merch')
                ->join('users','ordermerch.id_users', 'users.id_users')
                ->where(['ordermerch.id_users'=>Auth::user()->id_users,'ordermerch.id_ordermerch'=>$decrypted])
                ->first();
                
        $data2 = DB::table('ordermerch')
                ->join('merch','ordermerch.id_merch', 'merch.id_merch')
                ->where(['ordermerch.id_users'=>Auth::user()->id_users,'ordermerch.id_ordermerch'=>$decrypted])
                ->first();
                
        return view('user.get_merch_barcode',['data'=>$data,'data2'=>$data2]);
    }

    public function get_merch_pdf($enkrip)
    {
        $decrypted = base64_decode($enkrip);

         $data = DB::table('ordermerch')
                ->join('merch','ordermerch.id_merch', 'merch.id_merch')
                ->join('users','ordermerch.id_users', 'users.id_users')
                ->where(['ordermerch.id_users'=>Auth::user()->id_users,'ordermerch.id_ordermerch'=>$decrypted])
                ->first();
                
        $data2 = DB::table('ordermerch')
                ->join('merch','ordermerch.id_merch', 'merch.id_merch')
                ->where(['ordermerch.id_users'=>Auth::user()->id_users,'ordermerch.id_ordermerch'=>$decrypted])
                ->first();
        $pdf = PDF::loadview('user.pdf.pdf_act', ['data'=>$data, 'data2'=>$data2]);
        //return $pdf->download('evoucher_merch.pdf');
        return $pdf->stream();
    }
    
    public function cod(Request $req)
    {
        
        $data = DB::table('confirm_payment')
                ->join('orderticket','confirm_payment.id_orderticket', 'orderticket.id_orderticket')
                ->join('ticket', 'orderticket.id_ticket', 'ticket.id_ticket')
                ->join('users', 'orderticket.id_users', 'users.id_users')
                ->where(['confirm_payment.id_users'=>Auth::user()->id_users,'confirm_payment.id_orderticket'=>$req->G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH,'confirm_payment.id_ticket'=>$req->id_ticket,'confirm_payment.status_confirm'=>'uncheck'])
                ->get();
                
        if(count($data) > 0){
            return redirect('/user/dash');
        }else{
            
            $this->validate($req,[
                'img'=>'required|image|mimes:jpg,jpeg,png',
            ]);
            $new = new confirm;
            $new->id_users = Auth::user()->id_users;
            $new->id_orderticket = $req->G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH;
            $new->id_ticket = $req->id_ticket;
            $new->pengirim_confirm = Auth::user()->nama_users. " - COD";
            
            $image = $req->img;
            $name = Auth::user()->id_users.'_'.$req->pengirim.'_'.date('Y-m-d H:i:s').'.'.$image->getClientOriginalExtension();
            $lokasi = public_path('images/proof');
            if($image->move($lokasi,$name)){
                $new->bukti_confirm = $name;
                if($new->save()){
                    return back()->with('sukses','Berhasil mengupload bukti, Silahkan tunggu 1x24 jam atau hubungi admin!');
                }
            }
        }
        
    }
    public function cod2(Request $req)
    {
        
        $data = DB::table('ordermerch')
                ->join('merch', 'ordermerch.id_merch', 'merch.id_merch')
                ->join('users', 'ordermerch.id_users', 'users.id_users')
                ->join('confirm_merch','ordermerch.id_ordermerch', 'confirm_merch.id_ordermerch')
                ->where(['ordermerch.id_users'=>Auth::user()->id_users,'ordermerch.id_ordermerch'=>$req->G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH,'ordermerch.id_merch'=>$req->id_ticket,'confirm_merch.status_confirm'=>'uncheck'])
                ->get();
                
        if(count($data) > 0){
            return redirect('/user/dash');
        }else{
        
            $this->validate($req,[
                'img'=>'required|image|mimes:jpg,jpeg,png',
            ]);
            $new = new confirm_merch;
            $new->id_users = Auth::user()->id_users;
            $new->id_ordermerch = $req->G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH;
            $new->id_merch = $req->id_ticket;
            $new->pengirim_confirm = Auth::user()->nama_users. " - COD";
            $image = $req->img;
            $name = Auth::user()->id_users.'_'.$req->pengirim.'_'.date('Y-m-d H:i:s').'.'.$image->getClientOriginalExtension();
            $lokasi = public_path('images/proof');
            if($image->move($lokasi,$name)){
                $new->bukti_confirm = $name;
                if($new->save()){
                    return back()->with('sukses','Berhasil mengupload bukti, Silahkan tunggu 1x24 jam atau hubungi admin!');
                }
            }
        }
    }
    
    
    public function lineup(){
        $data = DB::table('lineup')->get();
        return view('admin.lineup.index', ['data' => $data]);
    }
    
    public function lineup_tambah(Request $req){
        $this->validate($req,[
            'foto'=> 'image|mimes:png,jpg,jpeg',
        ]);

        $img = $req->foto;

        $name = time().'.'.$img->getClientOriginalExtension();
        $lokasi = public_path('images/gs');
        // $img->move($lokasi,$name);

        if($img->move($lokasi,$name)){
           DB::table('lineup')->insert(['nama' => $req->nama, 'foto' => $name, 'deskripsi' => $req->desc]);
           return redirect(route('lineup'))->with('sukses','Berhasil Menambah GS!');
        }
        return back()->with('eror','Gagal Menambah GS!');
    }

    public function lineup_hapus($id)
    {
    	DB::table('lineup')->where('id_line', $id)->delete();
    	return redirect(route('lineup'))->with('sukses', 'Berhasisl Menghapus GS!');
    }

    public function lineup_edit($id)
    {
    	$data = DB::table('lineup')->where('id_line', $id)->get();
    	return view('admin.lineup.edit', ['data' => $data]);
    }

    public function lineup_edit_act(Request $req)
    {
    	if($req->foto){
            $image = $req->foto;
            $name = time().'.'. $image->getClientOriginalExtension();
            $lokasi = public_path('images/gs');
            $image->move($lokasi,$name);
            
            DB::table('lineup')->where('id_line',$req->id)->update([
                'nama' => $req->nama,   
                'foto' => $name,
                'deskripsi' => $req->desc
            ]);
        }else{
            DB::table('lineup')->where('id_line',$req->id)->update([
                'nama' => $req->nama,   
                'deskripsi' => $req->desc
            ]);
        }
        // if(Update()){
            return redirect(route('lineup'))->with('sukses','Berhasil Mengedit GS!');	
    }
    
    public function idord($id_orderticket){
        
        $data = DB::table('orderticket')
                ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                ->where([
                    'orderticket.id_users'=>Auth::user()->id_users,
                    'orderticket.id_orderticket'=>$id_orderticket,
                    'orderticket.status_orderticket'=>false
                ])
                ->get();
        
        // print_r($data);
        if(count($data) > 0){
            
            $output_data = DB::table('orderticket')
                            ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                            ->where(['id_users'=>Auth::user()->id_users, 'id_orderticket' => $id_orderticket])
                            ->first();
                    
            return view('user.get_ticket',['payment'=>$output_data]);
        }
    
        return redirect('/user/dash'); 
    }
    public function get()
    {
        return view('admin.get');
    }
    public function ticket_used()
    {
        $data = DB::table('orderticket')
                ->join('ticket','orderticket.id_ticket','ticket.id_ticket')
                ->join('users','orderticket.id_users','users.id_users')
                ->select('users.id_users','users.nama_users','users.email','orderticket.*','ticket.*')
                ->where(['status_orderticket'=>'1'])
                ->where(['used_orderticket'=>'1'])
                ->get();
        $orderticket = DB::table('orderticket')
                ->where('status_orderticket','=', 1)
                ->get();
        return view('admin.list_used',['prioritas'=>$data,'orderticket'=>$orderticket]);
        
    }
    
}
