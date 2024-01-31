<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repository\ProjectRepository;
use App\Models\Project;

class ProjectController extends Controller
{
    protected $projectRepository ;
public function __construct(Project $projectRepository){
    $this->projectRepository = $projectRepository;
}

    public function index(Request $request)
    {
        $projects = $this->projectRepository->all();
        return view('project.index',compact('projects'))->render();
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string',
            'date_debut' => 'required',
            'date_fin' => 'required',
            // Add more validation rules as needed
        ]);

        $this->projectRepository->create($data);

        // Redirect or respond as needed
        return redirect()->route('projects.index')->with('success', 'Project created successfully');
   
    }
    public function delete($id){
        $project = $this->projectRepository->find($id);
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }

}
