@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'PROGRAMME REPORT FORM (PRF) - Create (Organization Representative Only)')<br>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>
            

<div class="container px-20 py-5 w-full mx-auto pb-10 flex justify-center" >

        <!-- insert image here -->
    <!-- <div class="p-4 rounded-md text-left flex-auto w-max" style="">
        <img class="object-scale-down h-48 w-full"  src="https://ih1.redbubble.net/image.1066412296.0216/fposter,small,wall_texture,product,750x1000.u1.jpg">
    </div> -->

    <div class="p-10 shadow-md rounded-md text-left bg-gray-50 w-screen mt-4" style=" ">

    <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
               
                <form action="{{ route('report.post.step.3') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">

                    <div class="flex -mr-px ">
				            <span class="px-10 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                PROGRAMME DOCUMENTS
                            </span>
			            </div>
                        <br>

                        <label for="name">1. At least 3 pieces of pictures </label><br>
                        <label for="name">2. Programme Schedule </label><br>
                        <label for="name">3. Organising Committee (Name/Post/Matric no.) </label><br>
                        <label for="name">4. List of participants (Name/Matric no.) </label><br>
                        <label for="name">5. Programme book, magazine, bulletin (if any)</label><br>
                        <label for="name">6. Approval letter of programme</label><br><br>
                        <label for="name">Note: Please upload the above documents in a Google Drive and share the link.</label><br><br>

                        <label for="name">
                            <span class="text-gray-700">Google Drive Link</span>
                         </label>
                        <input class="form-input mt-1 block w-full" type="text" name="achievementsObservation" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('report.fileName)') }}">
                        <br><br>
                    </div>
                    
                   
                            <div class="flex justify-end space-x-4">
                            <a href="{{route('dashboard') }}"  class="btn btn-primary bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Cancel
                            </a>
                                <button type="submit" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ">
                                    Review Details
                                </button>
                            </div>
                            <div class="p-2 flex space-x-96">
                            <div class="flex justify-start">
                                <a type="button" href="{{ route('report.create.step.2') }}" class="btn btn-warning bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
                                    Back
                                </a>
                            </div>
                            </div>

                </form><br/>
                
              
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js') }} "></script>

@endsection   

