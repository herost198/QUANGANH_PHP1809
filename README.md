học cách sử dụng GIT-GITHUB bằng các câu lệnh
   1. git init : để khởi tạo git trong project hiện tại của mk
   
   2. git status : hiện thỉ các file đã or chưa add vào git
    
   3. git add <file> : thêm vào GIT nhưng nó đang ở Staging area
    
   4. git commit -m 'lý do' : thêm hẳn vào git nhưng nó tồn tại ở Repository
    
   5. git config --global user.mail <tên mail> 
          git config --global user.name <tên name> 
          /*  dùng cho khi không thể dùng câu lệnh 4 */
          
   6. git log : hiện thỉ các hoạt động file đã diễn ra trong quá trình sau khi sử dụng câu lệnh 4
      
   7. git show <tên commit khi sử dụng câu lệnh 6> : hiện thị các file đã chỉnh sửa gì trong đó ở 1 thời điểm nào đó
   
   8. git diff : sử dụng để xem lịch sử chỉnh sửa file đó
   
   9. git checkout -- <tên file > : câu lệnh trên chỉ thực hiện được khi nó đang ở trạng thái Working diretory sẽ làm cho file chỉnh sửa trở về như trước lúc mk chưa chỉnh sửa
   
   10. git reset HEAD <tên file> : câu lệnh này chỉ thực hiện dk khi nó đang ở trạng thái Staging area(sau khi sử dụng  câu lệnh 3) sẽ làm cho file đó trở về Trạng thái Working directory
   
   
   
   
   
   
