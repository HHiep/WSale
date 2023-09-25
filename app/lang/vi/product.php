<?php

return [
    'title' => [
        'search' => '[Tìm kiếm]',
        'list' => '[Danh sách Sản phẩm]',
        'add' => '[Thêm mới Sản phẩm]',
        'update' => '[Chỉnh sửa Sản phẩm]',
        'detail' => '[Chi tiết Sản phẩm]',
        'update_pending' => '[Chỉnh sửa Sản phẩm chờ phê duyệt]',
        'images' => '[Hình ảnh Sản phẩm]',
        'pending_image' => '[Hình ảnh Sản phẩm chờ duyệt]',
        'approved' => '[Phê duyệt Sản phẩm]'
    ],
    'table' => [
        'code' => 'Mã sản phẩm',
        'name' => 'Sản phẩm',
        'total_amount' => 'Tổng số lượng tồn kho',
        'price' => 'Giá gốc',
        'promotional_price' => 'Giá ưu đãi',
        'start_date' => 'Ngày bắt đầu đề xuất',
        'end_date' => 'Ngày kết thúc đề xuất',
        'created_by' => 'Người tạo',
        'status' => 'Trạng thái hiển thị',
        'action' => 'Hành động',
        'detail' => 'Chi tiết'
    ],
    'label' => [
        'brand' => 'Thương hiệu',
        'category' => 'Danh mục',
        'name' => 'Tên Sản phẩm',
        'code' => 'Mã sản phẩm',
        'price' => 'Giá gốc',
        'alias' => 'Alias URL',
        'status' => 'Trạng thái hiển thị',
        'weight' => 'Trọng lượng (gram)',
        'origin' => 'Xuất xứ',
        'length' => 'Chiều dài',
        'width' => 'Chiều rộng',
        'height' => 'Chiều cao',
        'sizes' => 'Kích cỡ',
        'colors' => 'Màu sắc',
        'highlight' => 'Sản phẩm Đề xuất',
        'packing_size' => 'Kích thước đóng gói (cm)',
        'created_by' => 'Người khởi tạo',
        'created_at' => 'Thời gian khởi tạo',
        'updated_by' => 'Người chỉnh sửa',
        'updated_at' => 'Thời gian chỉnh sửa',
        'approved_by' => 'Người phê duyệt',
        'approved_at' => 'Thời gian phê duyệt',
        'pending_status' => 'Trạng thái phê duyệt',
        'action' => 'Hành động',
        'description' => 'Mô tả sản phẩm',
        'amount_stock' => '[Số lượng hàng trong kho]',
        'amounts' => 'Số lượng',
        'cancel_add_product' => 'Thêm mới Sản phẩm',
        'cancel_update_product' => 'Chỉnh sửa Sản phẩm'
    ],
    'placeholder' => [
        'brand' => 'Lựa chọn thương hiệu',
        'category' => 'Lựa chọn danh mục',
        'name' => 'Nhập tên sản phẩm...',
        'code' => 'Nhập mã sản phẩm...',
        'price' => 'Nhập giá gốc...',
        'alias' => 'Nhập alias url...',
        'status' => 'Trạng thái hiển thị',
        'weight' => 'Nhập trọng lượng...',
        'origin' => 'Nhập xuất xứ...',
        'length' => 'Dài',
        'width' => 'Rộng',
        'height' => 'Cao',
        'sizes' => 'Nhập kích cỡ...',
        'amounts' => 'Nhập số lượng...',
        'colors' => 'Nhập màu sắc...',
        'pending_status' => 'Trạng thái phê duyệt',
        'action' => 'Hành động',
        'description' => 'Nhập mô tả sản phẩm...'
    ],
    'button' => [
        'complete' => 'Hoàn thành',
        'back' => 'Quay lại',
        'update' => 'Chỉnh sửa',
        'cancel' => 'Hủy bỏ',
        'search' => 'Tìm kiếm'
    ],
    'notification' => [
        'add' => [
            'success' => 'Sản phẩm [:name] đã được thêm thành công.',
            'failure' => 'Sản phẩm [:name] được thêm đã thất bại.',
            'waiting_success' => 'Sản phẩm [:name] đã được đưa vào danh sách chờ phê duyệt.'
        ],
        'update' => [
            'success' => 'Sản phẩm [:name] đã chỉnh sửa thành công.',
            'failure' => 'Sản phẩm [:name] đã chỉnh sửa thất bại.',
            'waiting_success' => 'Sản phẩm [:name] đã được chỉnh sửa thành công.'
        ],
        'delete' => [
            'success' => 'Xóa Sản phẩm [:name] thành công.',
            'failure' => 'Xóa Sản phẩm [:name] thất bại.'
        ],
        'approved' => [
            'success' => 'Yêu cầu đã được Phê duyệt thành công.',
        ],
        'refused' => [
            'success' => 'Yêu cầu đã được Từ chối thành công.',
        ],
        'cancel' => [
            'success' => 'Yêu cầu đã được Hủy bỏ thành công.',
        ],
    ],
    'breadcrumb' => [
        'home' => 'Trang chủ',
        'product' => 'Sản phẩm',
        'update' => 'Chỉnh sửa',
        'detail' => 'Chi tiết',
        'pending' => [
            'pending' => 'Chờ phê duyệt',
            'list' => 'Danh sách',
            'images' => 'Hình ảnh'
        ],
        'add' => 'Thêm mới',
        'list' => 'Danh sách',
        'approved' => 'Chi tiết Sản phẩm chờ phê duyệt',
        'update_request' => 'Chỉnh sửa Sản phẩm chờ phê duyệt',
        'images' => 'Hình ảnh',
    ]
];
