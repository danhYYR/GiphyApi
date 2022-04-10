
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<link rel="stylesheet" href="CSS\Header_navigator.css">
<link rel="stylesheet" href="CSS\comment.css">
<link rel="icon" href="Image/logo.png">

<body>
    <div class="topnav">
		<a href=".\index.html">Home</a>
		<a href=".\Trending.html">Trending</a>
		<a class="active" href=".\About.html">About</a>
	</div>
	<div class="container" style="margin-top: 3%;">
		<div class="row">
			<div class="col-11 mx-auto profile">
				<h1>Thông cá nhân</h1>
				<p>Chào mọi người mình là Nguyễn Công Danh sinh viên K19 thuộc khoa Khoa Học Ứng Dụng </p><br>
				<p>Hiện tại mình thuộc team phát triển app tra cứu luận văn giúp các bạn sinh viên trong khoa
					để tìm hiểu thêm về những luận văn của các thầy cô và anh chị đi trước từ đó có thêm những định
					hướng sâu hơn trong tương lai
				</p>
			</div>
			<div class="col-11 mx-auto profile">
				<h1>Thông tin trang web</h1>
				<p>Trang web này là trang web mình xây dựng cho việc học cách xử lý dữ liệu lấy về thông qua API từ
					trang Giphy</p><br>
				<p>API là một "giao diện" giữa phần mềm với phần mềm.
					API là cách để các phần mềm (hệ điều hành, ứng dụng, các module trong hệ thống doanh nghiệp
					v…v…) giao tiếp với nhau</p>
				<p>Hay gọi dễ hiểu hơn thì nhờ có API mà các phần mềm khác ngôn ngữ có thể giao tiếp với nhau được
				</p>
				<p>Các tính năng lấy và xử lí data được lấy<a href="https://www.youtube.com/watch?v=SOZvOte5LXw"> ý
						tưởng </a>từ anh toidicodedao
					và được mình custom thêm các tính năng load more và remove lastgif</p>
			</div>
		</div>
		<div class="row">
            <form action="Comment_POST.php"method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">        
                <label for="subject">Subject</label>
                <textarea id="subject" name="comment" placeholder="Write something.." style="height:200px"></textarea>
        
                <input type="submit" value="Submit">
            </form>
            <h3>Comment:</h3>
            <?php include("comment_save.php"); ?>
        </div>
    </div>
    <footer style="margin-top: 3%;">
	
		<div class="social col-12">
			<!-- Facebook -->
			<a href="https://www.facebook.com/danh.cong1911">
				<span class="ion-social-facebook mr-4 mr-lg-5"></span>
			</a>
			<a href="mailto:danh.nguyendanh0989@hcmut.edu.vn">
				<span class="icon ion-ios-email mr-4 mr-lg-5 ml-lg-3" style="color:white"
					style="font-size:20px"></span></a>
		</div>
	</div>
</div>
</footer>  

      
</body>
</html>