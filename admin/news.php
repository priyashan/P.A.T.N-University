

<html>
	<head>
		<title>Update News</title>

	</head>
	<body>


		<form method="POST" action="news.php" enctype="multipart/form-data">
			<table width="600" align="center" border="10">

				<tr>
					<td align="center" bgcolor="yellow" colspan="16">	<h1>Update News Here</h1>
					</td>
				</tr>

				<tr>
					<td align="center"><b>News Title</b></td>
					<td align="center"><input type="text" name="title" size="35"></td>
				</tr>

				<tr>
					<td align="center"><b>News Author</b></td>
					<td align="center"><input type="text" name="author" size="35"></td>
				</tr>

				<tr>
					<td align="center"><b>News Keyword</b></td>
					<td align="center"><input type="text" name="keyword" size="35"></td>
				</tr>
				
				<tr>
					<td align="center"><b>News Content</b></td>
					<td  align="center"><textarea name="content" cols="40" rows="15" size="40"></textarea></td>
				</tr>

				<tr>
					<td align="center"><b>News image</b></td>
					<td  align="right"><input type="file" name="image"></td>
				</tr>


				<tr>
					
					<td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now" ></td>
				</tr>
			</table>
		</form>
	

<a href="logout.php">Log out</a>

	</body>
</html>


<?php
	include("include\connect.php");
	if(isset($_POST['submit']))
	{
	$post_title = $_POST['title'];
	$post_date = date('d-m-y');
	$post_author = $_POST['author'];
	$post_keyword = $_POST['keyword'];
	$post_content = $_POST['content'];
	$post_image = $_FILES['image']['name'];
	$image_tmp= $_FILES['image']['tmp_name'];



	if ($post_title=='' or $post_keyword=='' or $post_content=='' or $post_author==''){

	

		echo "<script>alert('any of fields is can not be empty')</script>";
		exit();

	}
	else {
		move_uploaded_file($image_tmp,"images/$post_image");
		$insert_query = "insert into news (news_title,news_date,news_author,news_image,news_keyword,news_content) values ('$post_title','$post_date','$post_author','$post_image','$post_keyword','$post_content')";
	

		if (mysql_query($insert_query)){

		echo "<center><h1>Post Published Succssfully!</h1></center>";


	}

	}



	}

?>


