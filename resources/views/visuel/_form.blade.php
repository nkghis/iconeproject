<!-- Adresse Form Input -->
<div class="form-group row">
    <label for="lib_adresse" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Adresse') }}</strong></label>

    <div class="col-md-6">
        <input id="adresse" type="text" class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}" name="adresse" value="{{ old('adresse') }}"  autofocus>

        @if ($errors->has('adresse'))
            <span class="invalid-feedback">
                <strong><font>{{ $errors->first('adresse') }}</font></strong>
            </span>
        @endif
    </div>
</div>

<!-- Sticker Form Input -->
<div class="form-group row">
    <label for="communeid" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Commune') }}</strong></label>

    <div class="col-md-6">
        {{--Autofill dropdown edit form--}}
        <select id="idcommune" name="commune" class="select-type form-control"  >

            @if($commune->count())

                <option value="">- Selectionner la commune -</option>
                @foreach ($commune as $communes)
                    <option value="{{$communes->id}}">{{$communes->name}}</option>
                @endforeach
            @endif
        </select>

        @if ($errors->has('commune'))
            <span class="invalid-feedback">
                <strong><font>{{ $errors->first('commune') }}</font></strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="lib_image" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('') }}</strong></label>

    <div class="col-md-6">
        <input id="image" type="file" aria-describedby="filehelp" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('limage') }}"  autofocus>
        <small id="filehelp" class="form-text text-muted"> Veuillez sauvegarder une image valide. La taille de l'image  ne doit pas exceder 2Mo.</small>
        @if ($errors->has('image'))
            <span class="invalid-feedback">
                <strong><font>{{ $errors->first('image') }}</font></strong>
            </span>
        @endif
    </div>
</div>



