<?php

function UpdateDatabase($statment, $dbcon) {

  $updateStmnt=$dbcon->prepare($statment);
  $updateStmnt->execute();
  $updateStmnt->close();

}


function sql_result_one($sql, $dbcon) {

   $stmnt=$dbcon->prepare($sql);
   $stmnt->bind_result($result);
   $stmnt->execute();
   $stmnt->fetch();
   $stmnt->close();

   return  $result;
}


function Smart() {
  $mySmarty = new Smarty();
  $mySmarty->setTemplateDir("smarty/templates");
  $mySmarty->setCompileDir("smarty/templates_c");
  return $mySmarty;
}

function getList($parent_id, $offset, $theList) {
   $childList = array();
   foreach($theList as $post)
   {
	if($post->get_parentID() == $parent_id)
	{
		$post->set_offset($offset);
		$childList[] = $post;
		$childList = array_merge($childList, getList($post->get_id(), $offset+1, $theList));	
	}
   }   
   return $childList;
}
