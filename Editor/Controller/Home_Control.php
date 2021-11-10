<?php
require_once '../Model/Model_.php';

function fetchAllPosts(){
	return showAllPosts();
}

function fetchAllPendingPosts(){
	return showAllPendingPosts();
}

function fetchAllCommentss(){
	return showAllComments();
}

?>