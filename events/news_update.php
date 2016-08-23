<?php
include'connection.php';
$sql = "SELECT headers FROM newsandeventsitemsheaders";
		
$result = mysqli_query($link,$sql);
if(!$result)
{
    echo mysqli_error($link);
    exit();
}

while($rows = mysqli_fetch_array($result))
{
//Loop through each row on array and store the data to $item_list[]
    $category_list[] = array('category' => $rows['headers']);
  }
?>  
<!DOCTYPE html>

<head>

    <title>News & Events - Update</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
	<link href="css/advisories_newsandevents.css"   rel="stylesheet" type="text/css" />
<script type="text/javascript">
 
function GotoHome()
{
    window.location = 'news_index.php?';
}
 </script>
 
 
        <!-- libraries -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
		<script src="js/advisories_newsandevents_validator.js"></script>
</head>
<body>
    <div class="wrapper">
		<div class="content" style="width: 900px !important;">
			<?php// include 'header.php'; ?><br/>
			<div>
			<form id="frmvalue" method="POST"  enctype="multipart/form-data" action="news_index.php"; >		
				<input type="hidden" name="S No" 
		         value="<?php echo (isset($gresult) ? $gresult["s_no"] : ''); ?>" /> 

				<table>
					
					<tr>
						<td>
							<label for="item_category">NEWS & EVENTS HEADER: </label>
						</td>
						<td>
							
							<select name="news-headerlist" id="news-headerlist" >
							<?php foreach($category_list as $value): ?>
							<option value="<?php echo $value['category'];?>"> <?php echo $value['category'];?> </option>
							<?php endforeach; ?>
							</select>
							
							<td>
								<p class="news-frmvalue-news-header-message">                        
								<input type="hidden" >
								</p>					
							</td>

						</td>
					<tr>
					
					
					
					<tr>
						<td>
							<label for="status">SUB HEADING: </label>
						</td>
						<td>
							<input type="text" name="news-subheading" id="news-subheading"
							value="<?php echo (isset($gresult) ? $gresult["subheading"] :  '');?>" 
							class="txt-fld"/>
							
							<td>
								<p class="news-frmvalue-subheading-message">                        
								<input type="hidden" >
								</p>					
							</td>
						</td>
					</tr>
					<tr>
						<td>
							<label for="price">DESCRIPTION: </label>
						</td>
						<td>
							<input type="text" name="news-description" id="news-description" 
							value="<?php echo (isset($gresult) ? $gresult["description"] :  '');?>" 
							class="txt-fld"/>
							
							<td>
								<p class="news-frmvalue-description-message">                        
								<input type="hidden" >
								</p>					
							</td>
						</td>
						</tr>
						<tr>
						<td>
							<label for="news-file">IMAGE: </label>
						</td>
						<td>
						<input size="25" name="news-file" id="news-file" type="file" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt" class="box"/>
					     <label for="filename"> <?php echo (isset($gresult) ? $gresult["image_path"] :  '');?></label>
							
							<td>
								<p class="news-frmvalue-image-message">                        
								<input type="hidden" >
								</p>
							</td>						
							
						</td>
					</tr>
					
						<br>
						<br>
						</form>
				</table>
				<input type="hidden" name="action_type" value="<?php echo (isset($gresult) ? 'edit' :  'add');?>"/>
				<div style="text-align: center; padding-top: 30px;">
				<input type="hidden" name="sn"
                                     value="<?php echo (isset($gresult) ? $gresult["s_no"] : '');  ?>" />
					<input class="btn" type="submit" name="save" id="news-save" value="SAVE" />
					<input class="btn" type="button" name="save" id="cancel" value="CANCEL" 
					onclick=" return GotoHome();"/>
				</div>
			</form>
			</div>
		</div>
		
		<section id="copyright" class="light_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>&copy; Copyright 2015 - <strong> GURU Information Technology Services Pvt Ltd.</strong></p>
                </div>
                               
            </div>
        </div>
    </section>
	</div>
</body>
</html>