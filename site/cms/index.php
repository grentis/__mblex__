<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?
	include('inc/xmlFunc.php');
	
	$xml = '../data/news.xml';

	$messaggio = "";
	$item = array();
	
	if(isset($_POST['reset'])) {
		$item = array();
	} else if (isset($_POST['save'])) {
		if  (isset($_POST['id']))
			updateNews($_POST['id'], $_POST['date'], $_POST['title'], $_POST['description'], $xml);
		else
			writeNews($_POST['date'], $_POST['title'], $_POST['description'], $xml);
	} else if (isset($_POST['delete']))	{
		deleteNews((string)$_POST['delete'], $xml);
	}
?>

<html>
	<head>
		<title>News</title>
		<!-- jQuery -->
		
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<link href="css/css.css" rel="stylesheet" type="text/css" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript" src="../resources/jquery.validate.pack.js"></script>
		  
		  
		<script>
		  $(document).ready(function() {
			$("#date").datepicker({ dateFormat: 'dd/mm/yy' });
			validateForm();
		  });
		  
		  tinyMCE.init({
				// General options
				mode : "textareas",
				theme : "advanced",
				plugins : "style,advimage,advlink,inlinepopups,media,contextmenu,paste,advlist",
		
				// Theme options
				theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,image,|,cut,copy,paste,|,undo,redo,|,forecolor,backcolor,|,bullist,numlist,|,outdent,indent,blockquote,|,sub,sup,|,link,unlink,anchor,image,hr,|,cleanup,removeformat,|,charmap,|,code",
				theme_advanced_buttons2 : "",
				/*
				theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
				theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
				theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
				theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
				*/
				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "left",
				theme_advanced_statusbar_location : "bottom",
				theme_advanced_resizing : true,
		
				// Example content CSS (should be your site CSS)
				//content_css : "css/content.css",
		
				// Drop lists for link/image/media/template dialogs
				/*template_external_list_url : "lists/template_list.js",
				external_link_list_url : "lists/link_list.js",
				external_image_list_url : "lists/image_list.js",
				media_external_list_url : "lists/media_list.js",
				*/
		
				// Style formats
				/*style_formats : [
					{title : 'Bold text', inline : 'b'},
					{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
					{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
					{title : 'Example 1', inline : 'span', classes : 'example1'},
					{title : 'Example 2', inline : 'span', classes : 'example2'},
					{title : 'Table styles'},
					{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
				]*/
		
			});

			function confirmation(titolo,data) {
				return confirm("Vuoi cancellare " + titolo + " creata il "+data+"?");
			}
			
			function validateForm(){
		  		var c = $('#form');
		  		if(c && c.size() > 0){
					c.validate({
			  			rules: {
			    			date: {
			      				required: true
			    			},
			    			title: {
			    				required: true
			    			}
			  			}
			  		});
			  	}
		  	}
		</script>
	</head>
	<body>
		<div class="content">
		<div class="header">
		</div>
		<div class="rows">
			<h2>News List</h2>
			<?
				if (getNews(null, $xml) != null)
				{
					//var_dump(getNews(null, $xml));
			?>		
					<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					<table>
						<tr>
							<!-- <th>id</th> -->
							<th>Data</th>
							<th>Titolo</th>
							<th>Descrizione</th>
							<th colspan="2">Azioni</th>
						</tr>
			<?
					$i = 0;
					foreach (getNews(null, $xml) as $new)
					{
			?>
						<tr <? if ($i % 2) {?> class="odd" <? } ?>>
							<!-- <td><?=$item['id']?></td> -->
							<td><?=$new['date']?></td>
							<td><?=$new['title']?></td>
							<td><?=$new['description']?></td>
							<td class="actions"><input type="submit" name="edit" value="<?=$new['id']?>" class="edit" /></td>
							<td class="actions"><input type="submit" name="delete" value="<?=$new['id']?>" class="delete" onclick="return confirmation('<?=$new['title']?>', '<?=$new['date']?>')" /></td>
						</tr>
			<?
						$i++;
					}
			?>		</table>
					</form>
			<?
				}
				else
				{
			?>
				<h3>Non sono presenti News</h3>
			<?
				}
			?>
		</div>
		<div class="rows">
			<?
				if (isset($_POST['edit']))
				{
					$item = getNews($_POST['edit'], $xml);
			?>
			<h2>Modifica la News creata in data <?=$item[0]['date']?> con titolo <?=$item[0]['title']?></h2>
			<?
				}
				else
				{
			?>
				<h2>Inserisci Nuova News</h2>
			<?
				}
			?>
			<form class="form" id="form" action="<?=$_SERVER['PHP_SELF']?>" method="post" name="form">
				<?
					if (isset($_POST['edit']))
					{
						$t_id = $item[0]['id'];
						$t_date = $item[0]['date'];
						$t_title = $item[0]['title'];
						$t_descr = $item[0]['description'];
				?>
					<input type="hidden" name="id" value="<?=$t_id?>" />
				<?
					} else {
						$t_id = -1;
						$t_date = NULL;
						$t_title = NULL;
						$t_descr = NULL;	
					}
						
				?>
				<fieldset>
					<label>data</label><br/>
					<input type="text" name="date" value="<?=$t_date?>" id="date" />
				</fieldset>
				<fieldset>
					<label>titolo</label><br/>
					<input type="text" name="title" value="<?=$t_title?>" id="title" />
				</fieldset>
				<fieldset>
					<label>descrizione</label>
					<textarea id="elm1" name="description" rows="15" cols="80" style="width: 100%"><?=$t_descr?></textarea>
				</fieldset>
				<table>
					<tr>
						<td><input type="submit" name="save" value="Save News" class="save" /></td>
						<td><input type="reset" name="reset "value="Reset" class="reset" /></td>
					</tr>
				</table>
			</form>
		</div>
		</div>
	</body>
</html>