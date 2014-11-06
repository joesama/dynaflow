<div class="container">
    <div class="row">
        <div class="col-xs-12">
                <h3>Create Sys Flow</h3>
                {{ Form::open(array('url' => 'sysflow/store', 'class' => 'form-horizontal')) }}

                <div class="form-group {{ $errors->first('name_brand', 'has-error') }}">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        {{ Form::text('name', null, array('class'=>'form-control','placeholder'=>'Name'))}}
                    </div>
                </div>

                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="simpan" class="btn btn-primary" value="simpan">Simpan</button>
                        <a href="{{ URL::to('sysflow')}}" class="btn btn-default">Batal</a>
                    </div>
                </div>
                {{ Form::close() }}
        </div>
    </div>
</div>