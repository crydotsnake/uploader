<?php
if ($this->getProperty('context') == 'mediapool_media')
{
    $tmp = '
    <dl class="rex-form-group form-group preserve" id="jquery-file-upload-row">
    <dt></dt>
    <dd>
    <!-- The table listing the files available for upload/download -->
    <div class="jquery-file-upload-dropzone"><span class="hint">Datei(en) hierhin ziehen</span>
    <ul role="presentation" class="jquery-file-upload-queue files"></ul>
    </div>
    <div class="row fileupload-buttonbar">
        <div class="col-lg-12">
            <!-- The fileinput-button span is used to style the file input field as button -->
            <span class="btn btn-success fileinput-button">
                <i class="glyphicon glyphicon-plus"></i>
                <span>' . $this->i18n('jquery_file_upload_buttonbar_add_file') . '</span>
                <input type="file" name="files[]" multiple="">
            </span>
            <button type="submit" class="btn btn-primary start">
                <i class="glyphicon glyphicon-upload"></i>
                <span>' . $this->i18n('jquery_file_upload_buttonbar_start_upload') . '</span>
            </button>
        </div>
    </div>
    <div class="row fileupload-options">
        <div class="col-lg-12">
            <label><input type="checkbox" checked id="resize-images"> übergroßes Bild vor Upload verkleinern</label>
        </div>
    </div>
    </dd>
    </dl>
    ';
}
else
{
    $tmp = '
    <dl class="rex-form-group form-group preserve" id="jquery-file-upload-row">
    <dt></dt>
    <dd>
    <!-- The table listing the files available for upload/download -->
    <div class="jquery-file-upload-dropzone"><span class="hint">Datei(en) hierhin ziehen</span>
    <ul role="presentation" class="jquery-file-upload-queue files"></ul>
    </div>
    <div class="row fileupload-buttonbar">
        <div class="col-lg-7">
            <!-- The fileinput-button span is used to style the file input field as button -->
            <span class="btn btn-success fileinput-button">
                <i class="glyphicon glyphicon-plus"></i>
                <span>' . $this->i18n('jquery_file_upload_buttonbar_add_files') . '</span>
                <input type="file" name="files[]" multiple="">
            </span>
            <button type="submit" class="btn btn-primary start">
                <i class="glyphicon glyphicon-upload"></i>
                <span>' . $this->i18n('jquery_file_upload_buttonbar_start_upload') . '</span>
            </button>
            <button type="reset" class="btn btn-warning cancel">
                <i class="glyphicon glyphicon-ban-circle"></i>
                <span>' . $this->i18n('jquery_file_upload_buttonbar_cancel') . '</span>
            </button>
        </div>
        <!-- The global progress state -->
        <div class="col-lg-5 fileupload-progress fade">
            <!-- The global progress bar -->
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
            </div>
            <!-- The extended global progress state -->
            <div class="progress-extended">&nbsp;</div>
        </div>
    </div>
    <div class="row fileupload-options">
        <div class="col-lg-12">
            <label><input type="checkbox" checked id="resize-images"> übergroße Bilder vor Upload verkleinern</label>
        </div>
    </div>
    </dd>
    </dl>
    ';
}
return '<div id="jquery-file-upload-buttonbar-template" style="display: none">' . $tmp . '</div>';
