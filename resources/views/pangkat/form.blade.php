{{ Html::ul($errors->all()) }}
<div class="form-group">
    <label class="control-label col-md-3">Nama <span class="text-danger">*</span></label>
    <div class="col-md-9">
        {{ Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Juru Muda', 'required']) }}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Golongan <span class="text-danger">*</span></label>
    <div class="col-md-9">
        {{ Form::text('golongan', null, ['class' => 'form-control', 'placeholder' => 'I/a', 'required']) }}
    </div>
</div>