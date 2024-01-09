<?php
namespace App\Http\Controllers;
use Auth;
use Session;
use Exception;
use app\Models\User;
use illuminate\http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\Archive1;
use App\Models\Editorial_new1;
class ArticleController extends Controller
{
                public function __construct()
                {
                /*$this->middleware('auth');*/
                }
                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
               
                public function index()
                {
                return view("panel.home");
                }

                public function add_article()
                {
                return view("panel.add_article");
                }

                public function add(Request $req)
                {
                $req->validate([
                'reference'=>'required',
                'vol'=>'required',
                'title'=>'required',
                'author'=>'required',
                'abstract'=>'required',
                'sub'=>'required',
                'file'=>'required|mimes:jpeg,jpg,png,pdf,gif|max:10000']);
                $imageName = time().'.'.$req->file->extension();
                $req->file->move(('uploads/articles'),$imageName);
                $archive1 = new Archive1;
                $archive1->reference = $req->reference;
                $archive1->vol = $req->vol;
                $archive1->issue = $req->issue;
                $archive1->year = $req->year;
                $archive1->part = $req->part;
                $archive1->title = $req->title;
                $archive1->author = $req->author;
                $archive1->abstract = $req->abstract;
                $archive1->keywords = $req->keywords;
                $archive1->sub = $req->sub;
                $archive1->country = $req->country;
                $archive1->pageno = $req->pageno;
                $archive1->doi = $req->doi;
                $archive1->extra = $req->extra;
                $archive1->upload_date = $req->upload_date;
                $archive1->file = $imageName;
                $archive1->save();
                return back()->with("alert", "Data has been Submited!");
                }

                public function update(Request $req, $id){
                $req->validate([
                'reference'=>'required',
                'title'=>'required',
                'author'=>'required',
                'abstract'=>'required',
                'sub'=>'required',
                'file'=>'nullable|mimes:jpeg,jpg,png,pdf,gif|max:10000']);
                $archive1 = Archive1::where('id',$id)->first();
                if(isset($request->image)){
                $imageName = time().'.'.$req->file->extension();
                $req->file->move(('uploads/articles'),$imageName);
                $archive1->file = $imageName;
                }       
                $archive1->reference = $req->reference;
                $archive1->vol = $req->vol;
                $archive1->issue = $req->issue;
                $archive1->year = $req->year;
                $archive1->part = $req->part;
                $archive1->title = $req->title;
                $archive1->author = $req->author;
                $archive1->abstract = $req->abstract;
                $archive1->keywords = $req->keywords;
                $archive1->sub = $req->sub;
                $archive1->country = $req->country;
                $archive1->pageno = $req->pageno;
                $archive1->doi = $req->doi;
                $archive1->extra = $req->extra;
                $archive1->upload_date = $req->upload_date;
                $archive1->save();
                return back()->with("alert", "Data has been updated!");
                }

                public function destroy($id)
                {
                Archive1::where('id',$id)->delete();
                return back()->with("alert", "Data has been Deleted.");
                }

                public function all_article(Request $request)
                {
                $search = $request['search'] ?? "";
                if($search != "") {
                $archive1 = Archive1::where('author', 'LIKE', "%$search%")->orwhere('reference', 'LIKE', "%$search%")->get();
                } else{
                $archive1 = Archive1::all();
                }
                return view("panel.all_article", ['archive1'=>$archive1]);
                }

                public function edit_article($id)
                {
                $archive1 = Archive1::where('id',$id)->first();
                return view('panel.edit_article',['archive1'=> $archive1]);
                }




                //     end article
                public function all_editor(Request $request)
                {
                $search = $request['search'] ?? "";
                if($search != "") {
                $editorial_new1 = Editorial_new1::where('editor_name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
                } else{
                $editorial_new1 = editorial_new1::all();
                }
                return view("panel.all_editor", ['editorial_new1'=>$editorial_new1]);
                }

                public function add_editor()
                {
                return view("panel.add_editor");
                }

                public function edit_editor($id)
                {
                $editorial_new1 = Editorial_new1::where('id',$id)->first();
                return view('panel.edit_editor',['editorial_new1'=> $editorial_new1]);
                }

                public function store(Request $req)
                {
                $req->validate([
                'editor_name'=>'required',
                'email'=>'required',
                'degree'=>'required',
                'post'=>'required',
                'affiliation'=>'required',
                'contact'=>'required',
                'profile_link'=>'required',
                'image_name'=>'nullable|mimes:jpeg,jpg,png,pdf,gif|max:10000',
                'category'=>'required']);
                $imageName = time().'.'.$req->image_name->extension();
                $req->image_name->move(('uploads/editorial'),$imageName);
                $editorial_new1 = new Editorial_new1;
                $editorial_new1->editor_name = $req->editor_name;
                $editorial_new1->email = $req->email;
                $editorial_new1->degree = $req->degree;
                $editorial_new1->post = $req->post;
                $editorial_new1->affiliation = $req->affiliation;
                $editorial_new1->contact = $req->contact;
                $editorial_new1->profile_link = $req->profile_link;
                $editorial_new1->image_name = $imageName;
                $editorial_new1->category = $req->category;
                $editorial_new1->save();
                return back()->with("alert", "Data has been added!");
                }

                public function update_editor(Request $request, $id){
                $request->validate([
                'editor_name'=>'required',
                'email'=>'required',
                'degree'=>'required',
                'post'=>'required',
                'affiliation'=>'required',
                'contact'=>'required',
                'profile_link'=>'required',
                'image_name'=>'nullable|mimes:jpeg,jpg,png,pdf,gif|max:10000',
                'category'=>'required']);
                $editorial_new1 = Editorial_new1::where('id',$id)->first();
                if(isset($request->image)){
                $imageName = time().'.'.$req->image_name->extension();
                $request->image_name->move(('uploads/editorial'),$imageName);
                $editorial_new1->imageName = $imageName;
                }
                $editorial_new1->editor_name = $request->editor_name;
                $editorial_new1->email = $request->email;
                $editorial_new1->degree = $request->degree;
                $editorial_new1->post = $request->post;
                $editorial_new1->affiliation = $request->affiliation;
                $editorial_new1->contact = $request->contact;
                $editorial_new1->profile_link = $request->profile_link;
                $editorial_new1->category = $request->category;
                $editorial_new1->save();
                return back()->with("alert", "Data has been updated!");
                }

                public function delete_editor($id)
                {
                Editorial_new1::where('id',$id)->delete();
                return back()->with("alert", "Data has been Deleted.");
                }

                public function add_indexing()
                {
                return view("panel.add_indexing");
                }

                public function manage_user()
                {
                return view("panel.manage_user");
                }
} //class end