<?php

use Illuminate\Support\Facades\Crypt;

function encrypt_id($id) {
    return Crypt::encryptString($id);
}

function decrypt_id($encrypted_id) {
    return Crypt::decryptString($encrypted_id);
}