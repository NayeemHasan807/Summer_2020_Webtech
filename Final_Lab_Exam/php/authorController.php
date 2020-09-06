<?php 

	require_once('../php/session_header.php');
	require_once('../service/authorService.php');


	//save article
	if(isset($_POST['save'])){
		
		$username 		= $_POST['username'];
		$article		= $_POST['article'];

		if(empty(trim($article))){
			header('location: ../views/writearticle.php?error=null_error');
		}else{
			$count = getAllArticleCount();
			
			$savearticle = [
				'id' => $count+1,
				'username'=> $username,
				'article'=> $article
			];

			$status = insert($savearticle);
			if($status){
				header('location: ../views/all_article.php?success=done');
			}else{
				header('location: ../views/writearticle.php?error=db_error');
			}
		}
	}

	//update article
	if(isset($_POST['edit'])){

		$id			= $_POST['id'];
		$article 	= trim($_POST['article']);

		if(empty($article)){
			header('location: ../views/editarticle.php?id={$id}');
		}else{

			$article = [
				'id'=> $id,
				'article'=> $article
				
			];

			$status = update($article);

			if($status){
				header('location: ../views/all_article.php?success=done');
			}else{
				header('location: ../views/editarticle.php?id={$id}');
			}
		}
	}

	//delete article
	if(isset($_POST['yes'])){

		$id = $_POST['id'];
		$status = delete($id);

		if($status){
			header('location: ../views/all_article.php?success=done');
		}
	}
	elseif(isset($_POST['no'])){
		header('location: ../views/all_article.php');
	}

?>