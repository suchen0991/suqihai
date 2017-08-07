<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" href="./static/bt3/css/bootstrap.min.css">

</head>
<body>
<a href="?">返回上级</a>
	<div class="container" style="margin-top: 10px;">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
                    <tr>
                        <td>编号</td>
                        <td>姓名</td>
                        <td>出生日期</td>
                        <td>性别</td>
                        <td>爱好</td>
                        <td>头像</td>
                        <td>班级</td>
                    </tr>


                <?php foreach ($data as $k=>$d): ?>
                    <tr>
                        <td><?php echo $k+1;?></td>
                        <td><?php echo $d['sname']?></td>
                        <td><?php echo $d['birthday'] ?></td>
                        <td><?php echo $d['sex']?></td>
                        <td><?php echo $d['hobby']?></td>
                        <td>
                            <img src="<?php echo $d['profile']?>" width="80">
                        </td>
                        <td><?php echo $d['gname']?></td>
                    </tr>
                <?php  endforeach?>
                </table>
			</div>
		</div>
	</div>

</body>
</html>