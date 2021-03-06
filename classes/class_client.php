<?php

	class Client extends Handle {

		var $id;
		var $account_id;
		var $title;
		var $entered;
		var $updated;
		var $image;

		function Client($var='') {
			if (is_numeric($var) && ($var)) {
				$dbObj = db_getDBObject();
				$sql = "SELECT * FROM Client WHERE id = $var";
				$row = mysql_fetch_array($dbObj->query($sql));
				$sql = "SELECT * FROM Client_Image WHERE client_id = $var ORDER BY id";
				$r = $dbObj->query($sql);
				$i = 0;
				while ($row_aux = mysql_fetch_array($r)) {
					$image[$i]['id'] = $row_aux['id'];
					$image[$i]['image_id'] = $row_aux['image_id'];
					$image[$i]['thumb_id'] = $row_aux['thumb_id'];
					$image[$i]['image_caption'] = $row_aux['image_caption'];
					$image[$i]['image_caption1'] = $row_aux['image_caption1'];
					$image[$i]['image_caption2'] = $row_aux['image_caption2'];
					$image[$i]['image_caption3'] = $row_aux['image_caption3'];
					$image[$i]['image_caption4'] = $row_aux['image_caption4'];
					$image[$i]['thumb_caption'] = $row_aux['thumb_caption'];
					$image[$i]['thumb_caption1'] = $row_aux['thumb_caption1'];
					$image[$i]['thumb_caption2'] = $row_aux['thumb_caption2'];
					$image[$i]['thumb_caption3'] = $row_aux['thumb_caption3'];
					$image[$i]['thumb_caption4'] = $row_aux['thumb_caption4'];
					$image[$i]['order'] = $row_aux['order'];
					$sql = "SELECT * FROM Image WHERE id = $row_aux[image_id]";
					$row_aux = mysql_fetch_array($dbObj->query($sql));
					$image[$i]['width'] = $row_aux['width'];
					$image[$i]['height'] = $row_aux['height'];
					$i++;
				}
				$this->makeFromRow($row, $image);
			} else {
				$this->makeFromRow($var);
			}
		}

		function getImagesCount() {
			return count($this->image);
		}

		function makeFromRow($row='', $image='') {
			$this->image = $image;
			$row['id'] ? $this->id = $row['id'] : $this->id = 0;
			$row['account_id'] ? $this->account_id = $row['account_id'] : $this->account_id = 0;
			$row['entered'] ? $this->entered = $row['entered'] : $this->entered = 0;
			$row['updated'] ? $this->updated = $row['updated'] : $this->updated = 0;
			$row['title'] ? $this->title = $row['title'] : $this->title = 'NO NAME';
		}

		function Save() {
			$this->prepareToSave();
			if ($this->id) {
				$dbObj = db_getDBObject();
				$sql = "UPDATE Client SET"
					. " title = $this->title,"
					. " account_id = $this->account_id,"
					. " updated = NOW()"
					. " WHERE id = $this->id";
				$dbObj->query($sql);
			} else {
				$dbObj = db_getDBObject();
				$sql = "INSERT INTO Client"
					. " (title,"
					. " account_id,"
					. " entered,"
					. " updated)"
					. " VALUES"
					. " ($this->title, "
					. " $this->account_id, "
					. " NOW(), "
					. " NOW())";
				$dbObj->query($sql); 
				$this->id = mysql_insert_id($dbObj->link_id);
			}
			$this->prepareToUse();
		}

		function setClient($client, $item_id) {
            $dbObj = db_getDBObject();
			$sql = "DELETE FROM Client_Item WHERE item_type='listing' AND item_id = $item_id";
			$dbObj->query($sql);
			$sql = "INSERT INTO Client_Item (item_id, client_id, item_type) VALUES ($item_id, $client, 'listing')";
			$rs3 = $dbObj->query($sql);
				                            		}

		function Delete() {
			$dbObj = db_getDBObject();
			$sql = "SELECT * FROM Client_Image WHERE client_id = $this->id";
			$r = $dbObj->query($sql);
			while ($row = mysql_fetch_array($r)) {
				$imageObj = new Image($row['image_id']);
				$imageObj->Delete();
				$imageObj = new Image($row['thumb_id']);
				$imageObj->Delete();
			}
			$sql = "DELETE FROM Client_Image WHERE client_id = $this->id";
			$dbObj->query($sql);
			$sql = "DELETE FROM Client WHERE id = $this->id";
			$dbObj->query($sql);
			$sql = "DELETE FROM Client_Item WHERE client_id = $this->id";
			$dbObj->query($sql);
		}

		// like prepareToSave but only used by AddImage and EditImage
		function getClientToSave($vars='') {
			if($vars) {
				foreach($vars as $key => $value) if (is_string($value)) if ((!strstr($value, "\'")) && (!strstr($value, "\\\"")) && (!strstr($value, "\\"))) $vars[$key] = addslashes($value);
				$result = $vars;
			} else $result = 0;
			return $result;
		}

		// like prepareToUse but only used by AddImage and EditImage
		function getClientToUse($vars='') {
			if($vars) {
				foreach($vars as $key => $value) $vars[$key] = stripslashes($value);
				$result = $vars;
			} else $result = 0;
			return $result;
		}

		function AddImage($row) {
			$dbObj = db_getDBObject();
			$row = $this->getClientToSave($row);
			$sql = "INSERT INTO Client_Image"
				. " (client_id, image_id, thumb_id, image_caption, image_caption1, image_caption2, image_caption3, image_caption4, thumb_caption, thumb_caption1, thumb_caption2, thumb_caption3, thumb_caption4)"
				. " VALUES"
				. " ($this->id,"
				. " $row[image_id],"
				. " $row[thumb_id],"
				. " '$row[image_caption]',"
				. " '$row[image_caption1]',"
				. " '$row[image_caption2]',"
				. " '$row[image_caption3]',"
				. " '$row[image_caption4]',"
				. " '$row[thumb_caption]',"
				. " '$row[thumb_caption1]',"
				. " '$row[thumb_caption2]',"
				. " '$row[thumb_caption3]',"
				. " '$row[thumb_caption4]')";
				
			$dbObj->query($sql);
			$row = $this->getClientToUse($row);
		}

		function EditImage($row) {
			$dbObj = db_getDBObject();
			$row = $this->getClientToSave($row);
			$sql = "UPDATE Client_Image SET"
					. " client_id = $this->id,"
					. " image_id = $row[image_id],"
					. " thumb_id = $row[thumb_id],"
					. " image_caption = '$row[image_caption]',"
					. " image_caption1 = '$row[image_caption1]',"
					. " image_caption2 = '$row[image_caption2]',"
					. " image_caption3 = '$row[image_caption3]',"
					. " image_caption4 = '$row[image_caption4]',"
					. " thumb_caption = '$row[thumb_caption]',"
					. " thumb_caption1 = '$row[thumb_caption1]',"
					. " thumb_caption2 = '$row[thumb_caption2]',"
					. " thumb_caption3 = '$row[thumb_caption3]',"
					. " thumb_caption4 = '$row[thumb_caption4]'"
					. " WHERE id = $row[id]";
			$dbObj->query($sql);
			$row = $this->getClientToUse($row);
		}

		function DeleteImage($id) {
			$dbObj = db_getDBObject();
			$sql = "SELECT * FROM Client_Image WHERE id = $id AND client_id = $this->id";
			$row = mysql_fetch_array($dbObj->query($sql));
			$image = new Image($row["image_id"]);
			$image->Delete();
			$image = new Image($row["thumb_id"]);
			$image->Delete();
			$sql = "DELETE FROM Client_Image WHERE id = $id";
			$dbObj->query($sql);
		}

	}

?>
