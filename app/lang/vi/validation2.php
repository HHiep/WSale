<?php

return [
    'mail_adr' => [
        'required' => 'Địa chỉ mail không được bỏ trống.',
        'email' => 'Địa chỉ mail không hợp lệ.',
        'max' => 'Địa chỉ mail không lớn hơn :max ký tự !'
    ],
    'password' => [
        'required' => 'Mật khẩu không được bỏ trống.',
        'confirmed' => 'Mật khẩu và mật khẩu xác nhận không khớp'
    ],
    'password_confirmation' => [
        'required' => 'Mật khẩu xác nhận không được bỏ trống.',
    ]
];
