<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin\Categor;
use App\Models\Article;
use App\Models\PdfDocu;
use App\Models\faquestion;
use App\Events\Admin\FaquestionEvent;


class ArticleController extends Controller
{

    public function index(){   
        return 'article';
    }

    public function generateArticle(Request $request, Article $id){

        return view('section.documnts.pdf_files.index');

        $id->clicks = $id->clicks +1;
        $id->update();

        return view($id->adress);
    }

    public function pdfDocument(Request $request, Article $id){
        $id->clicks = $id->clicks +1;
        $id->update();

        $data = PdfDocu::all();
        //return $data;
        return view($id->adress,['data'=> $data]);
    }

    public function downloadPdf(Request $request, PdfDocu $id){
          $id->nbr_download = $id->nbr_download + 1;
          $id->update();
          $pathToFile = $id->adress;
          return response()->download($pathToFile);
          
    }
    public function viewPdf(Request $request, PdfDocu $id){
        $id->nbr_download = $id->nbr_download + 1;
          $id->update();
          $pathToFile = $id->adress;
          return redirect($pathToFile);
    }

    public function viewForum(Request $request, Article $id){
         $id->clicks = $id->clicks +1;
         $id->update();

         $data = faquestion::all();
         
         foreach($data as $key => $value) {
            # code...
            $value->answer = $value->answers()->get();
         }
        
         //return $data;
         return view($id->adress, ['data'=>$data]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'user_name'=>'required|alpha_num|alpha_dash',
            'email'=>'required|email',
            'question'=>'required|string'
        ]);

        FaquestionEvent::dispatch(faquestion::create($validated));
        //faquestion::latest('id')->first()
        return $this->viewForum($request, Article::find(6));
        //return redirect(route('view.forum',['id'=>6]));
    }
}
