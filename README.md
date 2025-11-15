# Task Management System (PHP + MySQL)

Một hệ thống quản lý công việc đơn giản, hỗ trợ phân quyền và quản lý nhiệm vụ giữa Admin và Employee.  
Phát triển bằng **PHP (PDO)**, **MySQL**, chạy trên **XAMPP**.

---

## Demo Tính năng chính

### **1. Quản lý người dùng (User Management)**
- Phân quyền 2 loại:
  - **Admin**
  - **Employee**
- Admin có thể:
  - Tạo user
  - Cập nhật user
  - Xóa user
  - **Xác thực user (is_verified)**  
    → Employee phải được admin xác thực mới đăng nhập được.
- Người dùng có thể tự đăng ký tài khoản (role mặc định = employee)

### **2. Quản lý công việc (Task Management)**
- Tạo nhiệm vụ
- Chỉnh sửa nhiệm vụ
- Xóa nhiệm vụ
- Giao nhiệm vụ theo user
- Hiển thị danh sách nhiệm vụ

### **3. Phân loại và lọc nhiệm vụ (Filter & Sorting)**
- Theo trạng thái: `pending`, `in_progress`, `completed`
- Theo hạn công việc (due date)
- Lọc nhiệm vụ quá hạn

### **4. Đăng nhập – Phân quyền – Bảo mật**
- Hệ thống đăng nhập sử dụng `password_hash`
- Chặn truy cập trái phép theo role
- Chỉ Employee đã xác thực mới được login

### **5. Thông báo (Notifications)**
- Gửi thông báo khi có nhiệm vụ mới
- Đánh dấu đã đọc
- Hiển thị thông báo theo người dùng

---


### **Tài khoản người dùng (Employee)**  
Có thể:
- Admin tạo
- Hoặc người dùng tự đăng ký tại trang đăng ký

> *Employee cần admin xác thực mới đăng nhập được.*

---

## Requirements

| Công cụ | Phiên bản |
|--------|-----------|
| XAMPP  | PHP + Apache + MySQL |
| PHP    | **7.4 hoặc cao hơn** |
| MySQL  | **5.7 hoặc cao hơn** |
| Trình duyệt | Chrome / Edge / Firefox |

---


## Tài khoản mẫu (Test Accounts)
-- account : nguyenvanc
-- pass : 123456

### **Tài khoản Quản trị (Admin)**
-- account : admin
-- pass : 123


Bật:
- Apache
- MySQL


### **Clone repo về máy**

git clone https://github.com/your-username/emp-manager.git

