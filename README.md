học cách sử dụng GIT-GITHUB bằng các câu lệnh
                              ----- GIT  -------
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
   
   11. gitk : hiện lên 1 cửa sổ mới để xem sơ đồ TREE
   
   12. git branch : hiện thị tất cả các nhánh mk đã có
   
   13. git checkout -b <tên> : tạo ra 1 nhánh và chuyển sang nhánh đó để làm việc
   
   14. git chechout <branch> : chuyển sang Branch  để làm vc
   
   15. git merge <branch B> : đồng bộ hóa từ Branch B sang Branch A
         
         trong đó phải: git checkout A  trước mới có thể được
    
   16. git branch -d <name Branch> : xóa Branch không cần thiết
   
   còn 1 số bài học về: git reset, git revert, gitignore thì mk sẽ tìm hiểu sau
   
                            ----- GIT HUB -------
   -  tạo Repository
   1. git remote add <tên tùy í> <link Repository>
   
   2. git push -u origin master : cho lần đầu sử dụng
   
   3. git push : push lên server(GITHUB)
   
   4. git config --global credential.helper "cache --timeout=18000" : lưu thông tin đăng nhập trong khoảng 5h
   
   5. sao khong kd
   
   
   
   
   
