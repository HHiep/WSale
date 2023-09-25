<?php

/*
|--------------------------------------------------------------------------
| Authentication Language Lines
|--------------------------------------------------------------------------
|
| The following language lines are used during authentication for various
| messages that we need to display to the user. You are free to modify
| these language lines according to your application's requirements.
|
*/

return [
    'auth_failed' => 'Bạn đã nhập sai Email hoặc Mật khẩu.',
    'notification' => [
        'mail' => [
            'failure' => 'Gửi mail thất bại, nếu tiếp tục xảy ra lỗi vui lòng liên hệ Quản trị viên.',
            'forgotpwd' => 'Mail chứa đường link tạo mật khẩu mới đã được gửi tới địa chỉ mail của bạn.'
        ]
    ],
    'password_old' => [
        'required' => 'Mật khẩu hiện tại không được bỏ trống.',
    ],
    'password_new' => [
        'required' => 'Mật khẩu mới không được bỏ trống.',
        'confirmed' => 'Xác nhận mật khẩu mới không khớp với Mật khẩu mới.'
    ],
    'password_confirmation' => [
        'required' => 'Xác nhận mật khẩu mới không được bỏ trống.',
    ]
];
