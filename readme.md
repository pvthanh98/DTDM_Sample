# Điện Toán Đám Mây
Bài mẫu uploads một project php lên heroku
## Cấu hình proxy:
```
export http_proxy=http://cache-st.ctu.edu.vn:3128
export https_proxy=http://cache-st.ctu.edu.vn:3128
```

## Install Heroku
```
sudo snap install --classic heroku
```
## Proxy config for git
```
git config --global http.proxy http://cache-st.ctu.edu.vn:3128
```
## Cách tạo app heroku

- Bước 1: Tạo thư mục project
```
mkdir <tên thư mục>
```
- Bước 2: gõ lệnh:
```
$ sudo git init
```
- Bước 3: Tạo app trên heroku bằng lệnh:
```
$ heroku create <tên app>
```
Lưu ý: Nếu dùng lệnh git init rồi thì heroku sẽ tự động remote app (bỏ qua bước này nếu làm đúng thứ tự)
- Bước 4: Tiến hành chỉnh sửa, thêm file cho project
- Bước 5: Đẩy project lênh server
```
 $ sudo git add .                         // có dấu chấm, dùng để thêm vào git
 $ sudo git commit -m "my commit"         // xác nhận trạng thái trong git
 $ sudo git push heroku master           // đẩy trạng thái xác nhận lên server
```
