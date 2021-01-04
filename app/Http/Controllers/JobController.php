<?php

namespace App\Http\Controllers;
use App\User;
use App\Job;
use Validator;

use Illuminate\Http\Request;

class JobController extends Controller
{
    
    public function index()
    {
         $data=[];
         $data['jobs'] = Job::select('id','title','content','user_id','salary','created_at')->get();

        return view('Job.index', $data);
    }

    
    public function create()
    {
        $data=[];
        return view('Job.create', $data );
    }

    
    public function store(Request $request)
    {
        //validation

        $rules= [
            'title' => 'required',
            'content' => 'required',
            'salary' => 'required'
            
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database insert

        Job::create([

            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'salary' => $request->input('salary'),
            'user_id' => auth()->user()->id
        ]);

        //redirect

        session()->flash('message','Job Post Added Successfully');
        session()->flash('type','success');
        return redirect()->route('jobposts.create');
    }

    
    public function show($id)
    {
        $data=[];
        $data['job'] = Job::with('user')->select('id','title','content','salary','created_at')->find($id);
        return view('Job.show', $data );
    }

    
    public function edit($id)
    {
        $data=[];
        $data['job'] = Job::select('id','title','content','salary','created_at')->find($id);
        return view('Job.edit', $data);
    }

    
    public function update(Request $request, $id)
    {
        //validation

        $rules= [
            'title' => 'required',
            'content'=> 'required',
            'salary' => 'required'
           
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database update

        $job = Job::find($id);

        $job->update([

            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'salary' => $request->input('salary')
        ]);

        //redirect

        session()->flash('message','Job post has been updated');
        session()->flash('type','success');
        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();

        //redirect

        session()->flash('message','Job Post deleted');
        session()->flash('type','danger');
        return redirect()->route('jobposts.index');
    }
}
