<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>注册管理员</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script language="javascript" type="text/javascript" src="style/ems.js"></script>
	</head>
	<body>
		<div id="wrap">
			<div id="top_content">
					<div id="header">
						<div id="rightheader">
							<p>
								<span id="localtime"><?php echo "<script type='text/javascript'> tick();</script>"; ?></span>
							<br />
							</p>
						</div>
						<div id="topheader">
							<h1 id="title">
								<a href="#">员工管理系统</a>
							</h1>
						</div>
						<div id="navigation">
						</div>
					</div>
				<div id="content">
					<p id="whereami">
					</p>
					<h1>
						注册管理员
					</h1>
					<form action="ems.reg.handle.php" method="post">
						<table cellpadding="0" cellspacing="0" border="0"
							class="form_table">
							<tr>
								<td valign="middle" align="right">
									用户名:
								</td>
								<td valign="middle" align="left">
									<input type="text" class="inputgri" name="username" onblur="seluname(this.value);"/>
								</td>
								<td><span id="erruname"></span></td>
							</tr>
							<tr>
								<td valign="middle" align="right">
									真实姓名:
								</td>
								<td valign="middle" align="left">
									<input type="text" class="inputgri" name="name" />
								</td>
							</tr>
							<tr>
								<td valign="middle" align="right">
									密码:
								</td>
								<td valign="middle" align="left">
									<input type="password" class="inputgri" name="pwd" />
								</td>
							</tr>
							<tr>
								<td valign="middle" align="right">
									性别:
								</td>
								<td valign="middle" align="left">
									男
									<input type="radio" class="inputgri" name="sex" value="m" checked="checked"/>
									女
									<input type="radio" class="inputgri" name="sex" value="f"/>
								</td>
							</tr>
							
							<tr>
								<td valign="middle" align="right">
									验证码:
									</td>
								<td valign="middle" align="left">
									<input style="width:60px" type="text" class="inputgri" name="number" onblur="checkCode(this.value);"/>
									<img  title="点击刷新" src="code/captcha.php" align="bottom" onclick="this.src='code/captcha.php?'+Math.random();"></img>
								</td>
								<td><span id="errcode"></span></td>
							
							</tr>
						</table>
						<p>
							<input type="submit" class="button" value="注册管理员" />
							<input type="button" class="button" value="返回" onclick="location='/EMS/em'"/>
							
						</p>
					</form>
				</div>
			</div>
			<div id="footer">
				<div id="footer_bg">
				ABC@126.com
				</div>
			</div>
		</div>
	</body>
</html>
