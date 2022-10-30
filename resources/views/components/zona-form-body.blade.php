@csrf
<div class="col-md-6 offset-3">
    <div class="form-group">
        <label for="detazona" class="form-label mt-4">Nombre de Zona</label>
        <input type="text" class="form-control" name="detazona" id="detazona" placeholder="Ingrese nombre de zona" value="{{ old('detazona', $zona->detazona) }}">
      </div>

    <div class="form-group mt-4">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="{{ url('/zonas') }}" type="button" class="btn btn-danger">Cancelar</a>
    </div>
</div>
