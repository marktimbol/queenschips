@extends('admin.layout.admin')

@section('pageTitle', 'Galleries')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/dropzone.css') }}" />
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Galleries</h1>

            @foreach( $galleries->chunk(6) as $chunks)

                <div class="row gallery" style="margin-bottom: 10px;">

                    @foreach($chunks as $gallery)

                        <div class="col-md-2 col-xs-4">

                            <div class="gallery__photo">
                           
                                <!-- filename, title, hasOwnPath? -->
                                {!! getPhoto($gallery->photo, $gallery->photo, true) !!} 
                                
                                <form 
                                    method="POST" 
                                    action="{{ route('admin.galleries.destroy', $gallery->id) }}"
                                    class="gallery__delete">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" class="btn btn-sm btn-danger">&times;</button>
                                </form>
                            </div>

                        </div>

                    @endforeach

                </div>

            @endforeach 

            {!! $galleries->render() !!}

            <hr />

            <h3>Upload Photos</h3>

            <form method="POST" action="{{ route('admin.galleries.store') }}" class="dropzone" id="uploadPhotoForm">
            	{!! csrf_field() !!}
            </form>
        </div>
    </div>

@endsection	

@section('footer_scripts')
	<script src="{{ elixir('js/dropzone.js') }}"></script>
@endsection