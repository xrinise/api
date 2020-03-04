<?php
$json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
$data = json_decode($json, true);
$list = $data['records'];

if(@$_POST['keyword'] && @$_POST['keyword'] != ''){
$json = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s=' . $_POST['keyword']);
$data = json_decode($json, true);
$list = $data['records'];
}
?>

<link rel="stylesheet" href="style.css">
<table width="100%">
		<thead>
 		
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Category</th>
			</tr>
		</thead>
		<div style="float: center">
		<form method="post">
				<input type="text" name="keyword">
				<input type="submit" name="submit" value="Search">
		</form>
		
		<a href="form.php" style="text-decoration: none">
			<input type="button" value="ADD">
		</a>
		
			</div>
		<tbody>
			<?php foreach($list as $item) { ?>
				<tr>
					<td>
						<a href="preview.php?id=<?php echo $item['id']?>"><?php echo $item['name'] ?></a>
					</td>
					<td><?php echo $item['price'] ?></td>
					<td><?php echo $item['description'] ?></td>
					<td><?php echo $item['category_name'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
</table>		
