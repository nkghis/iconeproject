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

<!-- Select Campagne -->
<div class="form-group row">
    <label for="campagneid" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Campagne') }}</strong></label>

    <div class="col-md-6">
        {{--Autofill dropdown edit form--}}
        <select id="idcampagne" name="campagne" class="select-type form-control"  >

            @if($campagne->count())

                <option value="">- Selectionner la campagne -</option>
                @foreach ($campagne as $campagnes)
                    <option value="{{$campagnes->id}}">{{$campagnes->nomcampagne}}</option>
                @endforeach
            @endif
        </select>

        @if ($errors->has('campagne'))
            <span class="invalid-feedback">
                <strong><font>{{ $errors->first('campagne') }}</font></strong>
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

<!-- Checkbox  -->

{{--<div class="row">
    <div class="col-md-5">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Concurent</label>
        </div>
    </div>
</div>--}}
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6 text-left">
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="concurrent" type="checkbox" id="inlineCheckbox1" value="1">
            <label class="form-check-label" for="inlineCheckbox1"><strong style="color:yellow">Concurrent</strong></label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="confrere" type="checkbox" id="inlineCheckbox2" value="1">
            <label class="form-check-label" for="inlineCheckbox2"><strong style="color:blue">Confrère</strong></label>
        </div>
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



