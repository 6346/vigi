@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Keisti filmą [{{ $Motorcycle->title ?? '' }}][{{ $Motorcycle->id ?? '' }}]</h3>
        </div>
        <form action="{{ route('admin.Motorcycles.update', $Motorcycle) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $Motorcycle->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Pavadinimas</label>
                    <input type="text" class="form-control" name="title" value="{{ $Motorcycle->title ?? '' }}"
                        id="title" placeholder="Pavadinimas">
                </div>

                <div class="form-group">
                    <label for="release-date">Data</label>
                    <input type="date" class="form-control" name="release_date"
                        value="{{ $Motorcycle->release_date ?? '' }}" id="release-date" placeholder="Data">
                </div>

                <div class="form-group">
                    <label for="description">Aprašymas</label>
                    <input type="text" class="form-control" name="description" value="{{ $Motorcycle->description ?? '' }}"
                        id="description" placeholder="Aprašymas">
                </div>

                <div class="form-group">
                    <label for="runtime">Greitis</label>
                    <input type="number" class="form-control" max="1000" name="runtime"
                        value="{{ $Motorcycle->runtime ?? '' }}" id="runtime" placeholder="Greitis">
                </div>

                <div class="form-group">
                    <label for="rating">Reitingas</label>
                    <input type="text" class="form-control" maxlength="5" name="rating"
                        value="{{ $Motorcycle->rating ?? '' }}" id="rating" placeholder="Reitingas">
                </div>

                <x-forms.multi-relation-select :tagName="'genres'" :model="$Motorcycle" :relationItems="$genres" />

                <x-forms.multi-relation-select :tagName="'languages'" :model="$Motorcycle" :relationItems="$languages" />

                <x-forms.multi-relation-select :tagName="'countries'" :model="$Motorcycle" :relationItems="$countries" />

                <x-forms.multi-relation-select :tagName="'model'" :model="$Motorcycle" :relationItems="$model" :optionDisplay="'fullName'" />

                <div class="form-group">    
                    <x-forms.image-input :images="[$Motorcycle->image]" :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
                </div>

                <div class="form-group">    
                    <x-forms.image-input :images="$Motorcycle->images"  :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
                </div>
                
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
