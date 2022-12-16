<div class="form-group {{ $errors->has('kategori') ? 'has-error' : ''}}">
    <label for="kategori" class="control-label">{{ 'kategori' }}</label>
    <input class="form-control" name="kategori" type="text" id="kategori" value="{{ isset($formkategori->kategori) ? $formkategori->kategori : ''}}" >
    {!! $errors->first('kategori', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('satuan') ? 'has-error' : ''}}">
    <label for="satuan" class="control-label">{{ 'satuan' }}</label>
    <input class="form-control" name="satuan" type="text" id="satuan" value="{{ isset($formkategori->satuan) ? $formkategori->satuan : ''}}" >
    {!! $errors->first('Satuan', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
