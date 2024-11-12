<?php
defined('BASEPATH') OR exit('No direct script access allowed');

interface Asc_controller {
    const ALERT_SUCCESS_SAVE="Data berhasil disimpan.";
    const ALERT_SUCCESS_DELETE="Data berhasil dihapus.";
    const ALERT_FAILED="Terjadi kesalan.";
    const UPLOAD_TYPE_IMAGE='icon';
    const UPLOAD_TYPE_SOUND='sound';
    const UPLOAD_TYPE_FILE='file';
    const DOC_STATUS_DRAFT='draft';
    const DOC_STATUS_PUBLISH='publish';
}
