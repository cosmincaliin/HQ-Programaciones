<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', isset($activitat) ? $activitat->title : '', ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcio') }}
            {{ Form::text('descripcio', isset($activitat) ? $activitat->descripcio : '', ['class' => 'form-control' . ($errors->has('descripcio') ? ' is-invalid' : ''), 'placeholder' => 'Descripcio']) }}
            {!! $errors->first('descripcio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hores') }}
            {{ Form::text('hores', isset($activitat) ? $activitat->hores : '', ['class' => 'form-control' . ($errors->has('hores') ? ' is-invalid' : ''), 'placeholder' => 'Hores']) }}
            {!! $errors->first('hores', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <label for="programacion_id">Programacio</label>
            <select class="form-control" name="programacion_id" id="programacion_id">
                @foreach (\App\Models\Programacion::all() as $programacion)
                    <option value="{{ $programacion->id }}" {{ isset($activitat) && $programacion->id == $activitat->programacion_id ? 'selected' : '' }}>{{ $programacion->modul->name }} ( {{ $programacion->any }} )</option>
                @endforeach
            </select>
            {!! $errors->first('programacio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uf_id') }}
            <select class="form-control" name="uf_id" id="uf_id">
                @foreach (\App\Models\Uf::all() as $uf)
                    <option value="{{ $uf->id }}" {{ isset($activitat) && $uf->id == $activitat->uf_id ? 'selected' : '' }}>{{ $uf->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('uf_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ra_ids') }}
            <select class="form-control" name="ra_ids" id="ra_ids">
                <!-- Las opciones se llenarán dinámicamente con JavaScript -->
            </select>
            {!! $errors->first('ra_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('criteri_ids') }}
            {{ Form::text('criteri_ids', isset($activitat) ? $activitat->criteri_ids : '', ['class' => 'form-control' . ($errors->has('criteri_ids') ? ' is-invalid' : ''), 'placeholder' => 'Criteri Ids']) }}
            {!! $errors->first('criteri_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contingut_ids') }}
            {{ Form::text('contingut_ids', isset($activitat) ? $activitat->contingut_ids : '', ['class' => 'form-control' . ($errors->has('contingut_ids') ? ' is-invalid' : ''), 'placeholder' => 'Contingut Ids']) }}
            {!! $errors->first('contingut_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#uf_id').change(function() {
        var ufId = $(this).val();
        if (ufId) {
            $.ajax({
                url: '/ra/byUf/' + ufId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('#ra_ids').empty();
                    $.each(data, function(key, value) {
                        $('#ra_ids').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });
        } else {
            $('#ra_ids').empty();
        }
    });
});
</script>
