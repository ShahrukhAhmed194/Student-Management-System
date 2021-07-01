<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    
    public function index()
    {
        $students = Student::all();
        return view('student', ['students'=>$students, 'layout'=>'index']);
    }

   
    public function create()
    {
        $students = Student::all();
       
        return view('student', ['students'=>$students, 'layout'=>'create']);
    }

    
    public function store(Request $request)
    {
        // return $request->all();

     $request->validate([
             'cne' => 'required|unique:students,cne',
        //     //  'image' => 'image|mimes:jpeg,png,jpg',
           
         ]);
        $students = new Student();
        $students->cne = $request->post('cne');
        $students->name = $request->post('name');
        $students->email = $request->post('email');
        $students->age = $request->post('age');
        $students->department = $request->post('department');
        
         if($request->hasfile('image')){
             $image = $request->file('image');
             $ext = $image->extension();
             $image_name = time().'.'.$ext;
             $image->storeAs('/public/media',$image_name);
             $students->image = $image_name;
         }
       
        
        $students->save();
        
        return redirect('/');
    }

    
    public function show($id)
    {
        $student = Student::find($id);
        $students = Student::all();

        return view('student',['students'=>$students, 'student'=>$student, 'layout'=>'show']);
    }

    
    public function edit($id)
    {
        $student = Student::find($id);
        $students = Student::all();

        return view('student',['students'=>$students, 'student'=>$student, 'layout'=>'edit']);
    }

  
    public function update(Request $request, $id)
    {

        $student = Student::find($id);
        $student->cne = $request->input('cne');
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->age = $request->input('age');
        $student->department = $request->input('department');
        if($request->hasfile('image')){
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $student->image=$image_name;
        }
        $student->save();
        return redirect('/');
    }

    
    public function delete($id)
    {
        $student = Student::find($id);

        $student->delete();
        return redirect('/');
        // return view('student',['students'=>$students, 'student'=>$student, 'layout'=>'show']);
    }
}
