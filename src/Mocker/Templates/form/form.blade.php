{{-- Part of Mocker project. --}}

@extends('_global.html')

@section('content')
<div class="container form-item" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-6">
            {!! \Windwalker\Html\Form\FormWrapper::start('admin-form', 'post', $uri['current']) !!}
            <fieldset class="form-horizontal">
                <legend>Basic</legend>

                <div class="form-group">
                    <label for="input-package" class="col-sm-2 control-label">Package</label>
                    <div class="col-sm-10">
                        <input type="text" name="package" class="form-control" id="input-package" placeholder="Package Namespace" value="Flower">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input-item" class="col-sm-2 control-label">Item</label>
                    <div class="col-sm-10">
                        <input type="text" name="item" class="form-control" id="input-item" placeholder="Item Name" value="sakura">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input-list" class="col-sm-2 control-label">List</label>
                    <div class="col-sm-10">
                        <input type="text" name="list" class="form-control" id="input-list" placeholder="List Name" value="sakuras">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Table</legend>

                <div class="well table-block form-inline">
                    <h4>
                        Field  <span class="field-num">1</span>
                    </h4>

                    <h5>Head</h5>

                    <div class="form-group">
                        <input type="text" name="field[1][name]" class="form-control" id="table-field-1-name" placeholder="Field Name *" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="field[1][title]" class="form-control" id="table-field-1-title" placeholder="Title">
                    </div>

                    <br />
                    <label class="checkbox-inline">
                        <input type="checkbox" value="field[1][is_ordering]"> Is ordering
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" value="field[1][sort]"> Sort
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" value="field[1][translate]"> Translate
                    </label>

                    <h5>Body</h5>

                    <select name="field[1][content]" class="form-control" id="">
                        <option value="default">$item->{field_name}</option>
                        <option value="datetime">DateTime::toLocalTime($item->{field_name})</option>
                        <option value="state">$grid->state($item->{field_name})</option>
                        <option value="state">$grid->foreignLink($item->{field_name})</option>
                    </select>
                </div>
            </fieldset>
            {!! \Windwalker\Html\Form\FormWrapper::end() !!}
        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>
@stop
